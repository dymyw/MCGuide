<?php

namespace App\Controller;

class UtilsController extends AbstractActionController
{
    public function httpAction()
    {
        return [
            'title' => 'Http',
        ];
    }

    public function wordConvertorAction()
    {
        return [
            'title' => 'WordConvertor',
        ];
    }

    public function stringAction()
    {
        return [
            'title' => 'String',
        ];
    }

    public function urlAction()
    {
        return [
            'title' => 'Url',
        ];
    }

    public function mathAction()
    {
        return [
            'title' => 'Math',
        ];
    }
}
