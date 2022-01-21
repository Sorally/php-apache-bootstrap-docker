#!/bin/bash

# stop all running containers
docker kill $(docker ps -q)


# build our new container
docker build -t img-php-apache-example . 


#run it!
docker run -it -d -p 8080:80 img-php-apache-example

echo "done"