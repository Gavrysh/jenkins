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
        sh 'cd /home/jenkins; pwd; rm -rf project; ls -la'
        sh '''


git clone git@github.com:Gavrysh/jenkins.git /home/jenkins/project'''
        sh '''tar --exclude=\'.git\' --exclude=\'jenkinsfile\' -zcvf deploy.tar.gz /home/jenkins/project/
'''
        sh 'scp /home/jenkins/deploy.tar.gz jenkins@54.93.249.169:/home/jenkins'
        sh 'ssh jenkins@54.93.249.169 cd /home/jenkins; ls -la'
      }
    }
  }
}