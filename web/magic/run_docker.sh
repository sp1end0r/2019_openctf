#!/bin/bash

docker="magic"
port="30091:80"
sudo docker rmi -f $docker:web
sudo docker build --tag $docker:web .
sudo docker run -d -p $port $docker:web


