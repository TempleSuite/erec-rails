bash docker-compose.sh build
bash docker-compose.sh run web bundle install --path /code/vendor/bundle
bash docker-compose.sh run web rake db:create
bash docker-compose.sh run web rake db:migrate
