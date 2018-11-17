pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                bat 'dir' 
                bat 'docker --version'
                bat 'docker-compose up -d'
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
    }
}
