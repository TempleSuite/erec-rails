bash docker-compose.sh build
bash docker-compose.sh run --rm web bundle install
bash docker-compose.sh run --rm web bundle exec rake db:create
bash docker-compose.sh run --rm web bundle exec rake db:migrate
