<?php

namespace L3l0Labs\SystemAccess\UseCase\Registration;

use L3l0Labs\Accounting\Invoice\VatIdNumber;
use L3l0Labs\SystemAccess\SystemAccount;

final class DefaultFactory implements Factory
{
    /**
     * @param $email
     * @param $password
     * @param VatIdNumber $vatIdNumber
     *
     * @return SystemAccount
     */
    public function create($email, $passwordHash, VatIdNumber $vatIdNumber)
    {
        return new SystemAccount(
            $email,
            $passwordHash,
            $vatIdNumber
        );
    }
}

