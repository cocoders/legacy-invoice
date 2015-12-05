<?php

namespace L3l0Labs\SystemAccess\UseCase;

use L3l0Labs\Accounting\Invoice\VatIdNumber;
use L3l0Labs\SystemAccess\SystemAccount;
use L3l0Labs\SystemAccess\SystemAccountRegistry;
use L3l0Labs\SystemAccess\UseCase\Registration\Command;
use L3l0Labs\SystemAccess\UseCase\Registration\Factory;

class Registration {
    /**
     * @var SystemAccountRegistry
     */
    private $accountRegistry;
    /**
     * @var Factory
     */
    private $factory;
    
    public function __construct(SystemAccountRegistry $accountRegistry, Factory $factory) {
        $this->accountRegistry = $accountRegistry;
        $this->factory = $factory;
    }
    
    public function execute (Command $command) {
        $systemAccount = $this->factory->create(
            $command->email,
            password_hash($command->password, PASSWORD_DEFAULT),
            new VatIdNumber($command->vatIdNumber)
        );
        $this->accountRegistry->add($systemAccount);
    }
}
