<?php

namespace App\Controller;

class GeneralController extends AbstractActionController
{
    public function urlAction()
    {
        return [
            'title' => 'MC URL',
        ];
    }

    public function controllerAction()
    {
        return [
            'title' => '控制器',
        ];
    }

    public function viewAction()
    {
        return [
            'title' => '视图',
        ];
    }

    public function modelAction()
    {
        return [
            'title' => '模型',
        ];
    }

    public function pluginAction()
    {
        return [
            'title' => 'MC 插件',
        ];
    }

    public function helperAction()
    {
        return [
            'title' => 'MC 帮助方法',
        ];
    }

    public function routerAction()
    {
        return [
            'title' => 'URI 路由',
        ];
    }

    public function cliAction()
    {
        return [
            'title' => '以 CLI 方式运行',
        ];
    }

    public function phpAction()
    {
        return [
            'title' => 'PHP 替代语法',
        ];
    }
}
