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
        sh 'cd ~; rm -rf project/*;'
        sh '''


git clone git@github.com:Gavrysh/jenkins.git /home/jenkins/project
'''
        sh 'tar -zcf deploy.tar.gz project/*'
      }
    }
  }
}