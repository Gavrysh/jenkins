#!/bin/bash
chmod +x *.sh
cd ~ && tar --exclude=\'.git\' --exclude=\'Jenkinsfile\' --exclude=\'\*.sh\' -zcvf deploy.tar.gz html/