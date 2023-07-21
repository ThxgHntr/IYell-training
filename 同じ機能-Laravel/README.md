# Containerize Laravel with docker-compose and Dockerfile

## Make sure you have:
 - Installed laravel libraries using 'composer install'.
 - Created '.env' file by copying '.env.example' and changed it's name into '.env'
 - Generated key for '.env' by using 'php artisan key:generate'
 - Docker installed.

```bash
# Build Docker images and run the container
$ docker-compose up --build
```

## Create new terminal

```bash
# Migrate the database ('employee_management' is the name of the container we want to run this code on)
$ docker exec employee_management php artisan migrate
```
