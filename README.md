# Getting started

## Installation

Install all the dependencies using composer

    composer install
    
Install Vue.js dependencies from npm
    
    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations

    php artisan migrate

Start the local development server

    npm run watch
    php artisan serve

You can now access the server at http://localhost:8000
