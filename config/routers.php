<?php

use Web\Blog\Core\Classes\Router;

$router = new Router();

$router->addRouter('', 'posts/index.php', 'get');
$router->addRouter('about', 'about.php', 'get');
$router->addRouter('login', 'users/login.php', 'get');
$router->addRouter('signup', 'users/signup.php', 'get');

$router->match();
