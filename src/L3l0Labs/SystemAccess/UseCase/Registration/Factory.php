<?php

namespace L3l0Labs\SystemAccess\UseCase\Registration;

use L3l0Labs\Accounting\Invoice\VatIdNumber;
use L3l0Labs\SystemAccess\SystemAccount;

interface Factory {
    /**
     * @param $email
     * @param $password
     * @param VatIdNumber $vatIdNumber
     * 
     * @return SystemAccount
     */
    public function create($email, $password, VatIdNumber $vatIdNumber);
}
