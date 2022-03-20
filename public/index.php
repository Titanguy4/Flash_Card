<?php

use Htanguy\Router;

require "../vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__) . '/view');

$router
	->get('/', 'home', 'home')
	->get('/connection', 'connection', 'connection')
	->get('/communautee', 'categorie/communautee', 'communautee')
	->get('/classe', 'categorie/classe', 'classe')
	->get('/mydecks', 'categorie/mydecks', 'mydecks')
	->get('/deconnexion', 'deconnexion', 'deconnexion')
	->run();