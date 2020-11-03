<?php


// $router->define([

// 	'' => 'controller/index.php',
// 	'about' => 'controller/about.php',
// 	'contact' => 'controller/contact.php',
// 	'names' => 'controller/add-name.php'
// ]);

$router->get('', 'controller/index.php');
$router->get('about', 'controller/about.php');
$router->get('contact', 'controller/contact.php');
$router->post('names','controller/add-name.php');
