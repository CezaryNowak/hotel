1. ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
    ```
2. ```
    ./vendor/bin/sail up -d
   ```
3. ```
    ./vendor/bin/sail npm install
   ```
4. ```
    ./vendor/bin/sail npm run dev
   ```