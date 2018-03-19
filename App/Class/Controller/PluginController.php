<?php

namespace App\Controller;

class PluginController extends AbstractActionController
{
    public function layoutAction()
    {
        return [
            'title' => 'Layout 页面布局插件',
        ];
    }

    public function viewAction()
    {
        return [
            'title' => 'View 视图插件',
        ];
    }

    public function paramAction()
    {
        return [
            'title' => 'Param 参数插件',
        ];
    }

    public function funcAction()
    {
        return [
            'title' => 'Func 常用方法插件',
        ];
    }

    public function viewModelAction()
    {
        return [
            'title' => 'ViewModel 视图模型插件',
        ];
    }
}
