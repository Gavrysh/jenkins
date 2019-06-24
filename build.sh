#!/bin/bash
rm -rf /home/jenkins/html && rm deploy.tar.gz && mkdir /home/jenkins/html && cd /home/jenkins/
git clone git@github.com:Gavrysh/school-php.git /home/jenkins/html/
cd ~ && tar --exclude=\'.git\' --exclude=\'Jenkinsfile\' --exclude=\'*.sh\' -zcvf deploy.tar.gz html/
