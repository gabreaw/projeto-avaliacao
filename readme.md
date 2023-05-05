php artisan make:controller EvaluationController --resource
php artisan make:model Evaluation -m
method  =  {{route('evaluation.store')}}

php artisan migrate

service apache2 stop

vendor/bin/sail up
