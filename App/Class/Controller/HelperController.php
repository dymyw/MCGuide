<?php

namespace App\Controller;

class HelperController extends AbstractActionController
{
    public function controllerAction()
    {
        return [
            'title' => 'Controller 获取控制器名',
        ];
    }

    public function actionAction()
    {
        return [
            'title' => 'Action 获取方法名',
        ];
    }

    public function pageIdAction()
    {
        return [
            'title' => 'PageId 获取控制器名和方法名',
        ];
    }

    public function selfUrlAction()
    {
        return [
            'title' => 'SelfUrl 获取当前链接地址',
        ];
    }

    public function urlAction()
    {
        return [
            'title' => 'Url 创建链接',
        ];
    }

    public function escapeAction()
    {
        return [
            'title' => 'Escape 过滤字符串',
        ];
    }

    public function dateAction()
    {
        return [
            'title' => 'Date 格式化时间',
        ];
    }
}
