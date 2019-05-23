## Run xampp
sudo /opt/lampp/manager-linux-x64.run

## Root SuperStartup
/opt/lampp/htdocs/SuperStartup

## Run server
php artisan serve

## Drop all table & migrate
php artisan migrate:fresh

## Make controller
php artisan make:controller NameController
php artisan make:controller NameController --resource (generate HTTP method example)

## Make model
php artisan make:model Namemodel
