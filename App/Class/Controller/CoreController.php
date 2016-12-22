<?php

namespace App\Controller;

class CoreController extends AbstractActionController
{
    public function autoLoaderAction()
    {
        return [
            'title' => 'AutoLoader 自动加载类',
        ];
    }

    public function serviceLocatorAction()
    {
        return [
            'title' => 'ServiceLocator 服务定位器',
        ];
    }

    public function pdoAction()
    {
        return [
            'title' => 'Pdo 数据对象操作类',
        ];
    }

    public function redisAction()
    {
        return [
            'title' => 'Redis 缓存',
        ];
    }
}
