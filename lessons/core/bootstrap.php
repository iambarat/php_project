<?php

$app = [];

require 'core/database/connection.php';

require 'core/database/query.php';

require 'core/router.php';
require 'core/request.php';


$app['config'] = require 'config.php';

$app['query'] = new query(connect::conn($app['config']['database']));


