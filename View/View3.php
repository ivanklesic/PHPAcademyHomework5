<?php

namespace View;

require_once 'AbstractView/BaseView.php';
require_once 'InterfaceView/ViewInterface.php';

use AbstractView\BaseView;
use InterfaceView\ViewInterface;

class View3 extends BaseView implements ViewInterface
{
    public function viewAction()
    {
        return isset($this->prefix) ? $this->prefix->getCurrentDate() . ' ' . parent::viewAction() : parent::viewAction();
    }

}