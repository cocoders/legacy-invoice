<?php

namespace spec\L3l0Labs\Adapters\InMemory;

use L3l0Labs\SystemAccess\SystemAccount;
use L3l0Labs\SystemAccess\SystemAccountRegistry;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SystemAccountRegistrySpec extends ObjectBehavior
{
    function it_is_system_account_registry()
    {
        $this->shouldHaveType(SystemAccountRegistry::class);
    }

    function it_store_added_system_account_object(
        SystemAccount $account
    ) {
        $account->getEmail()->willReturn('leszek.prabucki@gmail.com');
        $this->add($account);

        $this->findOneByEmail('leszek.prabucki@gmail.com')->shouldBe($account);
        $this->findOneByEmail('contact@cocoders.com')->shouldBe(null);
    }
}
