<?php

use App\Router;

require "../vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__) . '/view');

$router
	->get('/', 'home', 'home')
	->get('/communautee', 'categorie/communautee', 'communautee')
	->get('/classe', 'categorie/classe', 'classe')
	->get('/mydecks', 'categorie/mydecks', 'mydecks')
	->get('/[*:categorie]/[*:slug]-[*:id]', 'card/show', 'deck')
	->match('/[*:categorie]/[*:slug]-[*:id]', 'card/show', 'deck2')
	->get('/deconnexion', 'deconnexion', 'deconnexion')
	->run();