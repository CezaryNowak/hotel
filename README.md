1. ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
    ```
2. ```
    cp .env.example .env &&
    ./vendor/bin/sail up -d &&
    ./vendor/bin/sail npm install &&
    ./vendor/bin/sail npm run dev
   ```