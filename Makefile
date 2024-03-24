setup:
	@make build
	@make up 
	@make composer-update
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose down
up:
	docker-compose up -d
composer-update:
	docker exec laravel-crm bash -c "composer update"
data:
	docker exec laravel-crm bash -c "php artisan migrate"
	docker exec laravel-crm bash -c "php artisan db:seed"