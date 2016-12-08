<?php

namespace App\Controller;

class ToolController extends AbstractActionController
{
    public function msgAction()
    {
        $to = $this->param('to', 'World');
        echo "Hello {$to}!" . PHP_EOL;
    }
}
