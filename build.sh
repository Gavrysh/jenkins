#!/bin/bash
cd ~ && tar --exclude=\'.git\' --exclude=\'Jenkinsfile\' --exclude=\'\*.sh\' -zcvf deploy.tar.gz html/