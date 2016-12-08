<?php

namespace App\Controller;

class MyTestController extends AbstractActionController
{
    public function sayAction()
    {
        echo 'Hello World!';
    }

    public function hereAction()
    {
        echo 'See here.';
    }

    public function viewAction()
    {
        $this->layout(false);

        return [
            'title' => 'My title',
            'msg' => 'My message',
            'list' => ['Mark', 'Jack', 'Harry'],
        ];
    }

    public function modelAction()
    {
//        var_dump($this->models->product);
        var_dump($this->models->product->getProductById(12));
    }

    public function pluginAction()
    {
//        var_dump($this->param);
//        var_dump($this->param('name', 'dymyw'));
        var_dump($this->param->has('name'));
    }

    public function pluginInitAction()
    {
        var_dump($this->myTest->setName()->getName());
        var_dump($this->myTest->getName());
    }

    public function pluginLocatorAction()
    {
        var_dump($this->myTest->getServiceLocator());
    }

    public function pluginFactoryAction()
    {
        var_dump($this->myTest);
    }

    public function helperAction()
    {
        var_dump($this->helpers->param('name', 'dymyw'));

        $this->layout(false);
    }

    public function htmlAction()
    {
        echo nl2br(str_replace(' ', '&nbsp;', htmlspecialchars('$router->setRouteMode(Router::ROUTE_MODE_PATHINFO);', ENT_COMPAT | ENT_XHTML)));
    }
}
