<?php

// require 'func.php';

require 'old/task.php';

$query = require 'core/bootstrap.php';

 

$router = Router::load('routes.php');

require $router->direct(Request::uri(), Request::method());