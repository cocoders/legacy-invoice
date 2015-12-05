<?php

namespace L3l0Labs\Adapters\InMemory;

use L3l0Labs\SystemAccess\SystemAccount;
use L3l0Labs\SystemAccess\SystemAccountRegistry as SystemAccountRegistryInterface;

final class SystemAccountRegistry implements SystemAccountRegistryInterface {

    private $account = [];

    public function add(SystemAccount $account) {

        $this->account[$account->getEmail()] = $account;
    }

    /**
     * @param $email
     * @return SystemAccount
     */
    public function findOneByEmail($email)
    {
        if(isset($this->account[$email])) {
            return $this->account[$email];
        }
    }

}
