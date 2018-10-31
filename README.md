# Lunchinator3000
A software application that answers the question “Where to for lunch?”

## Project set up 
Assuming you have docker installed and running 
Start the containers with --build flag if its your first otherwise 

    $ docker-compose up --build

List all running containers 

    $ docker-compose ps 

To use the workspace container as your main bash run

    $ docker exec -i -t app_workspace_1 /bin/bash

Now you have PHP ready run the command

    $ php artisan

Stop the containers 

    $ docker-compose stop

Start your container again in the foreground mode as
    
    $ docker-compose up

OR start in background mode

    $ docker-compose up -d

To Logs get the logs run

    $ docker-compose logs container_name


## Seed Test Data

Seed test data
    
    $ docker exec -i -t app_workspace_1 /bin/bash

Creates test data. Default 100 records.
    
    $ php artisan db:seed


## Run Unit Tests

Execute into the api container
    
    $ docker exec -i -t app_workspace_1 /bin/bash

Then run phpunit command

    $ vendor/bin/phpunit


