<?php

namespace spec\Assimtech\FiatBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AssimtechFiatBundleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Assimtech\FiatBundle\AssimtechFiatBundle');
    }
}
