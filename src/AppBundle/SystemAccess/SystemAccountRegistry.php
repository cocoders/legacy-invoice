<?php

namespace AppBundle\SystemAccess;

use Doctrine\Common\Persistence\ObjectManager;
use L3l0Labs\SystemAccess\SystemAccount;
use AppBundle\Entity\SystemAccount as DoctrineSystemAccount;
use L3l0Labs\SystemAccess\SystemAccountRegistry as SystemAccountRegistryInterface;

final class SystemAccountRegistry implements SystemAccountRegistryInterface
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function add(SystemAccount $account)
    {
        $this->objectManager->persist($account);
        $this->objectManager->flush();
    }

    /**
     * @param $email
     * @return SystemAccount
     */
    public function findOneByEmail($email)
    {
        return $this->objectManager->getRepository(DoctrineSystemAccount::class)->findOneBy([
            'email' => $email
        ]);
    }
}

