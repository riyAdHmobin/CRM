setup:
	@make build
	@make up 
	@make composer-update

build:
	docker-compose build --no-cache --force-rm

down:
	docker-compose down

up:
	docker-compose up -d

open-container:
	docker exec -it crm bash

composer-update:
	docker exec crm bash -c "composer update"

data:
	docker exec crm bash -c "php artisan migrate"
	docker exec crm bash -c "php artisan db:seed"