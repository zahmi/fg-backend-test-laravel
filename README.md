# fg-backend-test-laravel

## Description
This is a simple REST API project created using Lumen micro framework of Laravel.

## Pre requisites for the project

1. Php version >= 5.6.4
2. Apache2
3. Mysql
4. Composer
5. php artisan

If all the dependancies above in your local environment is setup then see the following instructions for setting up the project.

## Setup the project in your local environment

## Steps

1. After cloning the project, go to root of your project directory.
2. Run "composer install" command.
3. Create a MySql database by login to MySql. Name the database as "fg_backendtest_laravel".
4. Refer the database name in the .env file in the root directory of the project.
5. Run "php artisan migrate" command. That will setup the tables in your DB.