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
        sh 'rm -rf /home/jenkins/project'
        sh '''


git clone git@github.com:Gavrysh/jenkins.git /home/jenkins/project'''
        sh '''tar --exclude=\'.git\' --exclude=\'jenkinsfile\' -zcvf deploy.tar.gz /home/jenkins/project/
'''
        sh 'scp /home/jenkins/deploy.tar.gz jenkins@54.93.249.169:/home/jenkins'
        sh 'ssh jenkins@54.93.249.169 tar -xzvf deploy.tar.gz -C /var/www/html'
      }
    }
  }
}