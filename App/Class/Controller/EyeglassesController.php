<?php

namespace App\Controller;

class EyeglassesController extends AbstractActionController
{
    public function genderAction()
    {
        var_dump($this->param());
    }

    public function listAction()
    {
        var_dump($this->param());
    }
}
