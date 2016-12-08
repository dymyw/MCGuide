<?php

namespace App\Controller;

class BasicController extends AbstractActionController
{
    public function downloadAction()
    {
        return [
            'title' => 'MC 下载',
        ];
    }
}
