#!/usr/bin/env bash

if [ $EUID -ne 0 ]; then
    echo "Please run as root user"
    exit
fi

echo "[+] Adding to git"
git add .

echo "[+] Committing to git"
echo "Please enter commit message"
read commit_message
git commit -m $commit_message

echo "[+] Pushing to github"
git push
