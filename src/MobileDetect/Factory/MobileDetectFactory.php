<?php
namespace Neilime\MobileDetect\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FActory\FactoryInterface;

/**
 * Class MobileDetectFactory
 * @package Neilime\MobileDetect\Factory
 */
class MobileDetectFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $serviceLocator
     * @param string $requestedName
     * @param array|null $options
     * @return \Mobile_Detect
     */
    public function __invoke(ContainerInterface $serviceLocator, $requestedName, array $options = null)
    {
        return new \Mobile_Detect();
    }
}