#!/bin/bash

docker="easy_web"
port="30090:80"
sudo docker rmi -f $docker:web
sudo docker build --tag $docker:web .
sudo docker run -d -p $port $docker:web


