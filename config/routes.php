<?php
// routes

function routes($router)
{
    // Define your routes below 👇
    // Example: without database values
    $router->add('GET', '/', 'HomeController@index'); // simple route without middleware
    $router->add('GET','/about', 'HomeController@about');
    $router->add('GET', '/home', 'HomeController@index')->middleware('AuthMiddleware'); // route with middleware
    // Example: with database values
    $router->add('GET', '/users', 'UserController@index'); // route with database values




    $router->add('get', '/404', 'LoginController@not_found'); // 404 page route

}