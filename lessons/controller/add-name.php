<?php

$app['query']->insert('user', [
	'name' => $_POST['name']
]);


header('Location: /');