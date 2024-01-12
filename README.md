## Prerequisites
### Using docker
* <a href = "https://www.docker.com/get-started/">Docker</a>
* <a href = "https://docs.docker.com/compose/install/">Docker Compose</a>

## How to run using docker:
Bash following into console
```
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php83-composer:latest \
composer install --ignore-platform-reqs &&
cp .env.example .env &&
./vendor/bin/sail up -d &&
./vendor/bin/sail composer install && 
./vendor/bin/sail php artisan key:generate &&
./vendor/bin/sail php artisan migrate:fresh &&
./vendor/bin/sail php artisan db:seed &&
./vendor/bin/sail php artisan storage:link &&
./vendor/bin/sail npm install &&
./vendor/bin/sail npm run dev
```
./vendor/bin/pint

