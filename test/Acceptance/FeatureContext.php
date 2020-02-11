<?php
declare(strict_types=1);

namespace Test\Acceptance;

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;

final class FeatureContext implements Context
{
    /**
     * @var bool
     */
    private bool $stepWasDefinitionExecuted = false;

    /**
     * @When I run Behat
     */
    public function iRunBehat(): void
    {
        $this->stepWasDefinitionExecuted = true;
    }

    /**
     * @Then it should execute my step definitions
     */
    public function itShouldExecuteMyStepDefinitions(): void
    {
        Assert::assertTrue($this->stepWasDefinitionExecuted);
    }
}
