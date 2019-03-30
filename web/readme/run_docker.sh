#!/bin/bash

docker="readme"
port="30094:80"
sudo docker rmi -f $docker:web
sudo docker build --tag $docker:web .
sudo docker run -d -p $port $docker:web


