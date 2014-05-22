<?php
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 

//Essa linha mostra o Hello World
$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->get('/', function() use ($app) {
	return 'OK';
});

$app->run(); 
>