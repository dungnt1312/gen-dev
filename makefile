include .env
up:
	- docker-compose up -d
php:
	- docker-compose exec php bash
db:
	- docker-compose exec php php artisan migrate:fresh --seed
down:
	- docker-compose down
chown:
	- sudo chown ${CURRENT_USER}:${CURRENT_USER} -R .
	- sudo chmod 777 -R storage/
