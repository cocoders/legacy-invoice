<?php

namespace L3l0Labs\SystemAccess\UseCase\Registration;

class Command {
    
    public $email;
    public $password;
    public $vatIdNumber;
    
    public function __construct($email, $password, $vatIdNumber) {
        $this->email = $email;
        $this->password = $password;
        $this->vatIdNumber = $vatIdNumber;
    }
    
}
