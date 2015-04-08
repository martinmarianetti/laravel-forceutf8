# laravel-forceutf8
This is a Laravel wrapper for neitanod/forceutf8

#Installation

##Install via composer

Add:

    "require": {
        "neitanod/forceutf8": "dev-master"
    }
    
to your composer.json file, then run:
    
    composer update martinmarianetti/laravel-forceutf8


Add: 

    'Martinmarianetti\Forceutf8\Forceutf8ServiceProvider',
    
to your providers array in config/app.php

Add:

    'Encoding' => 'Martinmarianetti\Forceutf8\Facades\Encoding',
    
to your aliases array in config/app.php

#Docs
Use: https://github.com/neitanod/forceutf8
