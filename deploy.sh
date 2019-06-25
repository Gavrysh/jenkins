#!/bin/bash
scp /home/jenkins/deploy.tar.gz jenkins@ws-ub:/home/jenkins
ssh jenkins@ws-ub tar -zcvf /home/jenkins/html.tar.gz /var/www/html && rm -rf /var/www/html/*
ssh jenkins@ws-ub tar -xzvf deploy.tar.gz -C /var/www/
rm deploy.tar.gz