<?php

namespace MainApp;

require_once 'Extra/Prefix.php';

use Extra\Prefix;

final class App
{
    public function outputRandomClassName($randomClass)
    {
        require_once ($randomClass . '.php');
        $randomClassObject = new $randomClass();
        $prefix = new Prefix();
        $prefix->setCurrentDate();
        $randomClassObject->createNewProperty('prefix', $prefix);
        return $randomClassObject->viewAction();
    }

}