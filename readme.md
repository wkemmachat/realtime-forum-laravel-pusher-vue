# This is real time single page forum app

#create Model Migration Resource Controller
php artisan make:model Model/Question -mrf

php artisan make:model Model/Reply -mrf

php artisan make:model Model/Category -mrf

php artisan make:model Model/Like -mrf

php artisan make:model Model/Question -mrf

#edit config/database.php

            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',

# create migration
php artisan migrate:refresh

php artisan migrate:fresh

# create factory -> faker
Edit file in factory



#seeds Seeds Folder
Edit DatabaseSeeder.php

php artisan db:seed



#Create API -> routes/api
Route::apiResource('/question','QuestionController@index');

php artisan route:list



#Create slug in model .php
this way we can pass slug in url not the id in url

#Create Resource --> filter some data and send to api
php artisan make:resource QuestionResource





