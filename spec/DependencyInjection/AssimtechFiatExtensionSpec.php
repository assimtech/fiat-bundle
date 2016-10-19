<?php

namespace spec\Assimtech\FiatBundle\DependencyInjection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AssimtechFiatExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Assimtech\FiatBundle\DependencyInjection\AssimtechFiatExtension');
    }

    function it_can_load(ContainerBuilder $container)
    {
        $configs = array();
        $this->load($configs, $container);
    }
}
