<?php

$router->map('GET', '/', 'Acme\Controllers\PageController@getShowHomePage', 'home');

$router->map('GET', '/register', 'Acme\Controllers\PageController@getShowRegisterPage', 'register');

$router->map('GET', '/login', 'Acme\Controllers\PageController@getShowLoginPage', 'login');

$router->map('POST', '/register', 'Acme\Controllers\PageController@postShowRegisterPage', 'register_post');

$router->map('GET', '/testdb', 'Acme\Controllers\PageController@getTestDB', 'testdb');
