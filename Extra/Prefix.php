<?php

namespace Extra;

class Prefix
{
    private $currentDate;

    public function getCurrentDate(){
        return $this->currentDate;
    }

    public function setCurrentDate(){
        $this->currentDate = date('d/m/Y');
    }

}