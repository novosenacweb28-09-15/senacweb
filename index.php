<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();
// Hello World
$app->get('/hello/:name', function ($name) {

    $inteiro1 = 42; // tipo Integer
    $inteiro2 = 79; // tipo Integer
    $texto = "Ola, "; // tipo String
    $fracao = 2.3; // tipo Float
    $soma = $inteiro1 + $inteiro2;
    $divisao = $inteiro1 / $fracao;
    $multi = $inteiro2 * $fracao;
    $olaMundo = $texto . $name;

    echo "<p>Soma: " . $soma . "</p>";
    echo "<p>Divisao: " . $divisao . "</p>";
    echo "<p>Multiplica: " . $multi . "</p>";
    echo "<p>" . $olaMundo . "</p>";


});

$app->get('/', function() use ($app) {
    $app->view->setData(array('title' => 'página principal', 
                              'page' => 'page/home'
                             ));
    $app->render('layout.php');
});

$app->get('/sobre' , function() use($app) {
    $app->view->setData
        (array('title' => 'página sobre',
               'page' => 'page/about'
              ));    
    $app->render('layout.php');
});

$app->run();
