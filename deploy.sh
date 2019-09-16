#!/bin/bash

echo "Déploiement vers robin-thomas.fr"
ssh -t robin-thomas.fr "cd /var/www/html/portfolio && sudo git pull"