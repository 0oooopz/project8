php = php
db = db

change_owner: #
	@sudo chown -R $(USER):$(USER) $(CURDIR)

composer_dep: #install composer dependency
	@docker run --rm $(CURDIR)/app:/app composer install

start: #start docker container
	@sudo docker-compose up -d

stop: #stop docker container
	@sudo docker-compose down

show: #show docker's containers
	@sudo docker ps

connect_app: #Connect
	@sudo docker-compose exec $(php) bash

connect_db: #Connect
	@sudo docker-compose exec $(db) bash

fresh: #Drop tables + seeds
	@sudo docker-compose exec $(php) bash php artisan migrate:fresh --seed
