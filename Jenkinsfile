pipeline {
  agent {
    node {
        label 'ubuntu'
    }
  }
  stages {
    stage('Build') {
      steps {
        echo 'Building..'
        sh 'rm -rf /home/jenkins/project && mkdir /home/jenkins/project && cd /home/jenkins/'
        sh 'git clone git@github.com:Gavrysh/jenkins.git /home/jenkins/project/'
        sh 'cd /home/jenkins/project/ && tar --exclude=\'.git\' --exclude=\'Jenkinsfile\' -zcvf /home/jenkins/deploy.tar.gz *'
      }
    }
    stage('Test') {
      steps {
        echo 'Testing arhive ...'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying....'
        sh 'scp /home/jenkins/deploy.tar.gz jenkins@ws-ub:/home/jenkins'
        sh 'ssh jenkins@ws-ub tar -xzvf deploy.tar.gz -C /var/www/html'
      }
    }
  }
  post {
    failure {
        echo 'Post failure job...'
        emailext (
            subject: "${status}: Job ${env.JOB_NAME} ([${env.BUILD_NUMBER})",
            body: """
            Check console output at <a href="${env.BUILD_URL}">${env.JOB_NAME} (${env.BUILD_NUMBER})</a>""",
            to: "${BUILD_USER_EMAIL}",
            from: 'jenkins@company.com'
        )
    }
    success {
        echo 'Post success job...'
        emailext body: 'A Test EMail',
        recipientProviders: [[$class: 'DevelopersRecipientProvider'],
        [$class: 'RequesterRecipientProvider']],
        subject: "Job '${JOB_NAME}' (${BUILD_NUMBER}) is waiting for input",
        body: "Please go to ${BUILD_URL} and verify the build"
    }
  }
}