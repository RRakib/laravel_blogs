#!/usr/bin/env bash

if [ $EUID -ne 0 ]; then
    echo "Please login as a root user"
    exit
fi

CURRENT_DIR=$(pwd)
CURRENT_USER=$(who -u | head -n1 | awk '{print $1;}')

echo "Current User ${CURRENT_USER}"

echo "[+] Running Composer"

if ! command -v composer &> /dev/null; then
    echo "Please Install Composer"
    exit
else
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && composer install"
fi


if [ ! -f "${CURRENT_DIR}/.env" ]; then
    echo "[+] Creating ENV File"
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && cp .env.example .env"
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && php artisan key:generate"
fi

echo "[+] Starting server"
php artisan serve
