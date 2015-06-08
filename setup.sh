bash docker-compose.sh build
bash docker-compose.sh run web bundle --path /bundle/ruby-2.2.1
bash docker-compose.sh run web rake db:create
bash docker-compose.sh run web rake db:migrate
