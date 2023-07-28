#!/bin/bash

if [ ! -f "vendor/autoload.php" ]; then
    composer install --no--progress --no-interaction
fi

if [ ! -f ".env" ]; then
    echo "Creating env file"
    cp .env.example .env
fi


# Migrate database
php artisan migrate
php artisan key:generate
php artisan serve --port=$PORT --host=0.0.0.0 --env=.env #run server at port
exec docker-php-entrypoint "$@"