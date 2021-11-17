pipeline {
    agent any
    stages {
        stage('Cloning Git') {
            steps {
                git([url: 'https://github.com/khaliljedda/blog-back', branch: 'main'])
    }}
        stage('Docker Build and Tag') {
            steps {
                sh 'docker build -t blogback:V1 .'
                sh 'docker tag blogback khalil4/blogback:V1'
                sh 'docker tag blogback khalil4/blogback:V1'
            }
        }

        stage('Publish image to Docker Hub') {
            steps {
                withDockerRegistry([ credentialsId: 'dockerhub_id', url: '' ]) {
                    sh  'docker push khalil4/blogback:V1'
                    sh  'docker push khalil4/blogback:V1'
                }
            }
        }
        }
    }
