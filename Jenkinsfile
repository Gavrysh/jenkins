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
      }
    }
    stage('Post') {
      steps {
        echo 'Post...'
        mail(subject: 'AWS Jenkins', body: 'Test')
      }
    }
  }
}