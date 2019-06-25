pipeline {

  agent {
    node {
        label 'ubuntu'
    }
  }
  
  options {
	buildDiscarder(logRotator(numToKeepStr: '10', artifactNumToKeepStr: '10'))
	timestamps()
  }
  
  stages {
    stage('Build') {
      steps {
        echo 'Building..'
		sh 'pwd'
        sh './build.sh'
      }
    }
    stage('Test') {
      steps {
        echo 'Testing arhive ...'
		sh './test.sh'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying....'
        sh './deploy.sh'
      }
    }
  }

  post {
    failure {
        echo 'Post failure job...'
        emailext body: 'Please go to ${BUILD_URL} and verify the build',
        recipientProviders: [[$class: 'DevelopersRecipientProvider'], [$class: 'RequesterRecipientProvider']],
        subject: "Job '${JOB_NAME}' (${BUILD_NUMBER}) is failure"
    }
  }
  
}