<?php

namespace App\Controller;

use Core\Controller\AbstractActionController as ActionController;
use Core\View\Model\ViewModel;

/**
 * @property Plugin\MyTest $myTest
 */
abstract class AbstractActionController extends ActionController
{
    public function init()
    {
        // set default layout
        $this->layout();
        $this->layout
                ->addChild(new ViewModel('layout/includes/header'), '__header')
                ->addChild(new ViewModel('layout/includes/footer'), '__footer');
    }
}
