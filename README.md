# Lunchinator3000
A software application that answers the question “Where to for lunch?”
Lunchinator3000 chooses a list of suggested restaurants from lunch group’s restaurant list, collects and tallies the votes, and then decides where you are go and to eat

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
    
    $ php artisan migrate
    
    $ php artisan db:seed

## Acces our routes

Now lets access our data on the terminal

Using information of the seeded data into the database

    $ curl -X POST -F 'email=some-name@gmail.com' -F 'password=admin' http://localhost:8000/api/auth/login

    $ curl -X GET http://localhost:8000/api/users

Using the token provided
    
    $ curl -X POST -F 'email=some-name@gmail.com' -F 'password=admin' http://localhost:8000/api/auth/login

    $ curl -X GET 'http://localhost:8000/api/users?token=tokenFromFirstRequest'

## Run Unit Tests

Execute into the api container
    
    $ docker exec -i -t app_workspace_1 /bin/bash

Then run phpunit command

    $ vendor/bin/phpunit


