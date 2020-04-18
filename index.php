<?php

require 'inc\Slim\Slim\Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();


$app->get(
    '/',
    function () {
       require_once("view/index.php") 
    }
);
$app->get(
    '/Blog',
    function () {
       require_once("view/Blog.php") 
    }
);
$app->get(
    '/Produtos',
    function () {
       require_once("view/Produtos.php") 
    }
);
$app->get(
    '/Quemsomos',
    function () {
       require_once("view/Quemsomos.php") 
    }
);
$app->get(
    '/Serciços',
    function () {
       require_once("view/Serviços.php") 
    }
);


$app->run();
