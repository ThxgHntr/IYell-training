# Containerize Laravel with docker-compose and Dockerfile

## Make sure you have:
 - Installed laravel libraries using 'composer install'.
 - Created '.env' file by delete the path '.example' of '.env.example'
 - Generated key for '.env' by using 'php artisan key:generate'
 - Docker installed.

## Open terminal
```bash
# Install sail in project
$ php artisan sail:install
```

## Open WSL terminal and go to project folder
```bash
# Build Docker images and run the container in background
$ ./vendor/bin/sail up -d
# Migrate the database
$ sail artisan migrate
```

## Check if the application works

Go to http://localhost:80
