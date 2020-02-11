<?php
declare(strict_types=1);

namespace Test\System;

use Behat\Testwork\ServiceContainer\Extension;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class DynamicBaseUrlExtension implements Extension
{
    public function process(ContainerBuilder $container): void
    {
    }

    public function getConfigKey(): string
    {
        return 'dynamic_base_url';
    }

    public function initialize(ExtensionManager $extensionManager): void
    {
    }

    public function configure(ArrayNodeDefinition $builder): void
    {
    }

    /**
     * @param array<mixed> $config
     */
    public function load(ContainerBuilder $container, array $config): void
    {
        $webHostname = getenv('WEB_HOSTNAME') ?: 'localhost';

        $container->setParameter('web_hostname', $webHostname);
    }
}
