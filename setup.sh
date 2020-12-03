#!/usr/bin/env bash

CURRENT_DIR=$(pwd)
CURRENT_USER=$(who -u | head -n1 | awk '{print $1;}')

echo "Current User ${CURRENT_USER}"

echo "[+] Running Composer"

if ! command -v composer &>dev/null; then
    echo "Please Install Composer"
    exit
else
    su - $CURRENT_USER -c "cd ${CURRENT_DIR} && composer install"
fi
