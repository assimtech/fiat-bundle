<?php

declare(strict_types=1);

namespace spec\Assimtech\FiatBundle\DependencyInjection;

use Assimtech\Fiat;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AssimtechFiatExtensionSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType('Assimtech\FiatBundle\DependencyInjection\AssimtechFiatExtension');
    }

    function it_can_load(
        ContainerBuilder $container
    ): void {
        $configs = [];

        $path = realpath(__DIR__.'/../../src/DependencyInjection').'/../Resources/config/services.yml';
        $container->fileExists($path)->willReturn(true);

        $serviceId = 'assimtech_fiat.accountant';
        $serviceClass = Fiat\Accountant::class;
        $container
            ->setDefinition($serviceId, Argument::which('getClass', $serviceClass))
            ->shouldBeCalled()
        ;
        $container
            ->setAlias($serviceClass, Argument::which('__toString', $serviceId))
            ->shouldBeCalled()
        ;

        $twigServiceId = 'assimtech_fiat.twig.accountant';
        $twigServiceClass = Fiat\Twig\Extension\Accountant::class;
        $container
            ->setDefinition($twigServiceId, Argument::which('getClass', $twigServiceClass))
            ->shouldBeCalled()
        ;
        $container
            ->setAlias($twigServiceClass, Argument::which('__toString', $twigServiceId))
            ->shouldBeCalled()
        ;

        $this->load($configs, $container);
    }
}
