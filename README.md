# PHPHackathon
Code repository for Hackathon in PHP and Laravel Framework

# Prerequisites 
- This project require PHP installed
- This project requires `MySQL` installed and create database with the name of `hackathon2k16`. 
- This project should also require Composer installed on the machine that the project will be run. For more information on installing Composer, refer Composer website https://getcomposer.org/


# Installation & Configuration
To install the follow instruction given below.

- `git clone https://github.com/shavindraSN/PHPHackathon.git`
- `cd PHPHackathon`
- `composer install`
- edit .env file for database configuration and use following configurations
```
  DB_HOST=localhost
  DB_DATABASE=hackathon2k16
  DB_USERNAME=root
  DB_PASSWORD=''
```
Note: DB_PASSWORD is the password that is used to create the `hackathon2k16` database.

- `php artisan migrate:refresh --seed` to create tables and add some test data

# Starting-up project 
- `php artisan serve`

Note: This should start serving the project on port 8000. 
- To open the project open a web browser and access `localhost:8000`
