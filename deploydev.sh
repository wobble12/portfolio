#!/bin/bash

echo "Déploiement vers beta.robin-thomas.fr"
ssh -t robin-thomas.fr "cd /var/www/html/portfolio-beta && sudo git pull"