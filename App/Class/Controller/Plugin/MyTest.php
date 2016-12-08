<?php

namespace App\Controller\Plugin;

use Core\ServiceLocator\InitializerInterface;
use Core\ServiceLocator\ServiceLocatorAwareInterface;
use Core\ServiceLocator\ServiceLocator;
use Core\ServiceLocator\PluginManager\FactoryInterface;

class MyTest implements InitializerInterface, ServiceLocatorAwareInterface, FactoryInterface
{
    public $name = 'dymyw';

    /**
     * @var ServiceLocator|\App\Hint\ServiceLocator
     */
    protected $locator = null;

    // init
    public function initialize()
    {
        $this->name = 'dymyw';
        echo 'MyTest plugin initialize';
    }

    public function setName($name = 'mark')
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Set service locator
     *
     * @param ServiceLocator $serviceLocator
     * @return MyTest
     */
    public function setServiceLocator(ServiceLocator $serviceLocator)
    {
        $this->locator = $serviceLocator;
        return $this;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocator
     */
    public function getServiceLocator()
    {
        return $this->locator;
    }

    public function factory()
    {
        $instance = new \stdClass();
        return $instance;
    }
}
