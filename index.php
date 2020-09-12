<?php

require_once 'MainApp/App.php';
use MainApp\App;

$classes = array_diff(scandir('View'), array('..', '.'));

$randomClass = basename($classes[array_rand($classes)], '.php');

$app = new App();
echo $app->outputRandomClassName('View' . DIRECTORY_SEPARATOR . $randomClass);







