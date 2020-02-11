<?php
declare(strict_types=1);

namespace Test\System;

use Behat\MinkExtension\Context\MinkContext;

final class FeatureContext extends MinkContext
{
    /**
     * @When I run Behat
     */
    public function iRunBehat(): void
    {
        $this->visit('/');
    }

    /**
     * @Then it should execute my step definitions
     */
    public function itShouldExecuteMyStepDefinitions(): void
    {
        /*
         * Here we test both that Behat executes this step definition, and that the web application runs in the
         * "testing" environment. This allows us to use configuration specifically for system testing.
         */

        $this->assertPageContainsText('environment testing');
    }
}
