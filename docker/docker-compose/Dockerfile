FROM ubuntu:trusty
MAINTAINER Katelyn Sievert <katelyn.sievert@gmail.com>

RUN apt-get update && apt-get install curl -y
RUN curl -L https://github.com/docker/compose/releases/download/1.3.0rc1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
RUN chmod +x /usr/local/bin/docker-compose

ENTRYPOINT ["/usr/local/bin/docker-compose"]
