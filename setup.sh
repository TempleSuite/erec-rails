VBoxManage modifyvm "boot2docker-vm" --natdnshostresolver1 off
VBoxManage modifyvm "boot2docker-vm" --natdnsproxy1 on
docker build -t erec/docker-compose docker/docker-compose/
bash docker-compose.sh build
bash docker-compose.sh run --rm web bundle install
bash docker-compose.sh run --rm web bundle exec rake db:create
bash docker-compose.sh run --rm web bundle exec rake db:migrate
