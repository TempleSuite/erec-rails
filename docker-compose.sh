#!/bin/bash
docker build -t erec/docker-compose docker/docker-compose/
docker run -ti -w /$(pwd)/ -v /$(pwd)/:/$(pwd)/ -v //var/run/docker.sock/:/var/run/docker.sock erec/docker-compose "$@"
