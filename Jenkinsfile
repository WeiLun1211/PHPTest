pipeline {
  agent any
  stages {
    stage('verify version') {
      steps {
        sh 'php --version'
      }
    }
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
    stage('Testing') {
      steps {
        sh 'chmod +x vendor/bin/phpunit'
        sh 'vendor/bin/phpunit --testsuite MyTest2'
      }
    }
  }
}