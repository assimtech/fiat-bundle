<?php

declare(strict_types=1);

namespace spec\Assimtech\FiatBundle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AssimtechFiatBundleSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType('Assimtech\FiatBundle\AssimtechFiatBundle');
    }
}
