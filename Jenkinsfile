pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                bat 'dir' 
                bat 'docker --version'
                bat 'docker-compose up -d'
                bat 'PING -n 180 127.0.0.1>nul'
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
