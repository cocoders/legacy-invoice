<?php

namespace L3l0Labs\SystemAccess;

interface SystemAccountRegistry {
    public function add(SystemAccount $account);
    /**
     * @param $email
     * @return SystemAccount
     */
    public function findOneByEmail($email);
}
