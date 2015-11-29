<?php

namespace AppBundle\SystemAccess;

use L3l0Labs\Accounting\Invoice\VatIdNumber;
use L3l0Labs\SystemAccess\SystemAccount;
use L3l0Labs\SystemAccess\UseCase\Registration\Factory;

class SystemAccountFactory implements Factory
{
    /**
     * @param $email
     * @param $password
     * @param VatIdNumber $vatIdNumber
     *
     * @return SystemAccount
     */
    public function create($email, $password, VatIdNumber $vatIdNumber)
    {
        return new \AppBundle\Entity\SystemAccount(
            $email,
            $password,
            $vatIdNumber
        );
    }
}

