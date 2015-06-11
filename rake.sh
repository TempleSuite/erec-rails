#!/bin/bash
#
# Usage: ./rails.sh <rails/rake command>
#
bash docker-compose.sh run --rm web bundle exec rake "$@"
