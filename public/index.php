<?php

require "../vendor/autoload.php";

$router = new AltoRouter();

$router->map('GET', '/' , 
    function() { require "home.html";}, 'home');

$match = $router->match();

// Look if arguments was pasted in the search bar
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}