<?php

namespace L3l0Labs\SystemAccess;

use L3l0Labs\Accounting\Invoice\VatIdNumber;

class SystemAccount
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $passwordHash;

    /**
     * @var string
     */
    protected $vat;

    public function __construct($email, $passwordHash, VatIdNumber $vatIdNumber)
    {
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->vat = (string) $vatIdNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    public function getVatIdNumber()
    {
        return new VatIdNumber($this->vat);
    }
}

