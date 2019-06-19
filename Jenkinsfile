pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Building..'
      }
    }
    stage('Test') {
      steps {
        echo 'Testing..'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying....'
        sh 'rm -rf /home/jenkins/project && mkdir /home/jenkins/project && cd /home/jenkins/'
        sh '''


git clone git@github.com:Gavrysh/jenkins.git /home/jenkins/project/'''
        sh 'cd /home/jenkins/project/ && tar --exclude=\'.git\' --exclude=\'Jenkinsfile\' -zcvf deploy.tar.gz *'
        sh 'scp /home/jenkins/deploy.tar.gz jenkins@54.93.249.169:/home/jenkins'
        sh 'ssh jenkins@54.93.249.169 tar -xzvf deploy.tar.gz -C /var/www/html'
      }
    }
  }
}