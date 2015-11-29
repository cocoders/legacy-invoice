<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $iWantToRegister = false;
    private $systemAccountRegistry;
    private $registrationUseCase;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->systemAccountRegistry = new \L3l0Labs\Adapters\InMemory\SystemAccountRegistry();
        $this->registrationUseCase = new \L3l0Labs\SystemAccess\UseCase\Registration(
            $this->systemAccountRegistry,
            new \L3l0Labs\SystemAccess\UseCase\Registration\DefaultFactory()
        );
    }

    /**
     * @Given I am website visistor
     */
    public function iAmWebsiteVisistor()
    {
    }

    /**
     * @Given I want to register
     */
    public function iWantToRegister()
    {
        $this->iWantToRegister = true;
    }

    /**
     * @When I give following information:
     */
    public function iGiveFollowingInformation(TableNode $table)
    {
        if (!$this->iWantToRegister) {
            throw new \LogicException('You do not want to register');
        }

        $row = $table->getRowsHash();

        $this->registrationUseCase->execute(
            new \L3l0Labs\SystemAccess\UseCase\Registration\Command(
                $row['email'],
                $row['password'],
                $row['vat id number']
            )
        );
    }

    /**
     * @Then I should be able to access system using following credentials:
     */
    public function iShouldBeAbleToAccessSystemUsingFollowingCredentials(TableNode $table)
    {
        $row = $table->getRowsHash();

        $systemAccount = $this->systemAccountRegistry->findOneByEmail($row['email']);
        if (!$systemAccount) {
            throw new \LogicException('You cannot login into system with such credentials. System account not found');
        }

        if (!password_verify($row['password'], $systemAccount->getPasswordHash())) {
            throw new \LogicException('You cannot login into system with such credentials. Password not match');
        }
    }
}
