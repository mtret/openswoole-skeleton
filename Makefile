up:
	docker-compose up

composer-install:
	docker-compose exec -w /var/www openswoole composer install

composer-update:
	docker-compose exec -w /var/www openswoole composer update
