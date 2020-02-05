<?php

//this is our controller!

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');
require('classes/pet.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function () {

    $pet1 = new Pet();
    $pet1->eat();

    $view = new Template();
    echo $view->render('views/my-pets.html');
});

//run fat free
$f3 -> run();