<?php

namespace AbstractView;


abstract class BaseView
{
    protected $className;

    public function __construct()
    {
        $classArray = explode('\\', get_class($this));
        $this->className = end($classArray);
    }

    public function viewAction()
    {
        return $this->className;
    }

    public function createNewProperty($name, $value)
    {
        $this->{$name} = $value;
    }
}