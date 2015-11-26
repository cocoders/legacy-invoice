<?php

namespace spec\AppBundle\Entity;

use L3l0Labs\Accounting\Invoice\VatIdNumber;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SystemAccountSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            $email = 'leszek.prabucki@gmail.com',
            $passwordHash = password_hash('testPass', PASSWORD_DEFAULT),
            new VatIdNumber('5932455641')
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Entity\SystemAccount');
    }

    function it_allows_to_returns_VatIdNumber()
    {
        $this->getVatIdNumber()->shouldBeLike(new VatIdNumber('5932455641'));
    }
}
