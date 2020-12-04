#!/usr/bin/env bash

if [ "$EUID" -ne 0 ]; then
    echo "Please run as root"
    exit
fi

echo "[+] Running setup..."

if ! command -v composer &>dev/null; then
    echo "[+] Installing composer"
    apt install composer -y
fi

CURRENT_USER=$(who -u | head -n1 | awk '{print $1;}')
CURRENT_DIR=$(pwd)

echo "[+] Running composer"
su - $CURRENT_USER -c "cd ${CURRENT_DIR} && composer install"

if [ ! -f "${CURRENT_DIR}/.env" ]; then
    echo "[+] Preparing project"
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && cp .env.example .env"
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && php artisan key:generate"
fi

if [ ! -h "${CURRENT_DIR}/public/storage" ]; then
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && php artisan storage:link"
fi

read -p "Please enter hostname[brisby.com]: " NGINX_SITE_NAME
if [ ! $NGINX_SITE_NAME ]; then
    NGINX_SITE_NAME="brisby.com"
fi

APP_DIR="$(pwd)/public"

NGINX_CONF_FILE="/etc/nginx/sites-available/${NGINX_SITE_NAME}.conf"
NGINX_LINK_FILE="/etc/nginx/sites-enabled/${NGINX_SITE_NAME}.conf"

if [ ! -f $NGINX_CONF_FILE ]; then
    echo "[+] Writing nginx configuration"
    cat >$NGINX_CONF_FILE <<EOL
server {
	listen 80;

	root ${APP_DIR};

	index index.php index.html index.htm index.nginx-debian.html;

	server_name ${NGINX_SITE_NAME};

	location / {
            try_files \$uri \$uri/ /index.php?\$query_string;
	}

	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
	}

	location ~ /\.ht {
		deny all;
	}
}
EOL

    if [ ! -h $NGINX_LINK_FILE ]; then
        ln -s $NGINX_CONF_FILE $NGINX_LINK_FILE
    fi
fi

if ! grep -q "${NGINX_SITE_NAME}" "/etc/hosts"; then
    echo "[+] Updating /etc/hosts"
    echo "127.0.0.1    ${NGINX_SITE_NAME}" >>/etc/hosts
fi

echo "[+] Reloading nginx configuration"
service nginx reload

echo "[+] Setup complete"

echo "[+] Hostname: ${NGINX_SITE_NAME}"
