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
        sh 'ssh jenkins@ws-ub tar -zcvf /home/jenkins/html.tar.gz /var/www/html && rm -rf /var/www/html/*'
        sh 'ssh jenkins@ws-ub tar -xzvf deploy.tar.gz -C /var/www/html/'
      }
    }
  }
  post {
    failure {
        echo 'Post failure job...'
        emailext body: 'Please go to ${BUILD_URL} and verify the build',
        recipientProviders: [[$class: 'DevelopersRecipientProvider'],
        [$class: 'RequesterRecipientProvider']],
        subject: "Job '${JOB_NAME}' (${BUILD_NUMBER}) is failure"
    }
    success {
        echo 'Post success job...'
        emailext body: 'Please go to ${BUILD_URL} and verify the build',
        recipientProviders: [[$class: 'DevelopersRecipientProvider'],
        [$class: 'RequesterRecipientProvider']],
        subject: "Job '${JOB_NAME}' (${BUILD_NUMBER}) is success"
    }
  }
}