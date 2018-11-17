pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                bat 'dir' 
                bat 'docker --version'
                bat 'docker-compose up -d'
                bat 'sleep 180'
                echo 'Building....'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing....'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
