<?php

namespace AppBundle\Entity;

use L3l0Labs\Accounting\Invoice\VatIdNumber;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * SystemAccount
 */
class SystemAccount implements UserInterface, \Serializable
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $passwordHash;

    /**
     * @var string
     */
    private $vat;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $id;

    public function __construct($email, $passwordHash, VatIdNumber $vatIdNumber)
    {
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->vat = (string) $vatIdNumber;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->passwordHash;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return '';
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->email;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
    }

    public function getVatIdNumber()
    {
        return new VatIdNumber($this->vat);
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->passwordHash,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->passworHash,
        ) = unserialize($serialized);
    }
    public function setUsername($email) {
        
    }
    
    public function setPassword($passwordhash) {
        
        
    }
    
    public function setVatIdNumber($vatIdNumber) {
        
        
    }
    
}
