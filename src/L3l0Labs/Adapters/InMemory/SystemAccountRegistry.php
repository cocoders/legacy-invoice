<?php

namespace L3l0Labs\Adapters\InMemory;

use L3l0Labs\SystemAccess\SystemAccount;
use L3l0Labs\SystemAccess\SystemAccountRegistry as SystemAccountRegistryInterface;

final class SystemAccountRegistry implements SystemAccountRegistryInterface
{
    private $accounts = [];

    public function add(SystemAccount $account)
    {
        $this->accounts[$account->getEmail()] = $account;
    }

    /**
     * @param $email
     * @return SystemAccount
     */
    public function findOneByEmail($email)
    {
        if (isset($this->accounts[$email])) {
            return $this->accounts[$email];
        }
    }
}
