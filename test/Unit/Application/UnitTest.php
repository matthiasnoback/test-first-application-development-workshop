<?php
declare(strict_types=1);

namespace Application;

use Application\Unit;
use PHPUnit\Framework\TestCase;

final class UnitTest extends TestCase
{
    /**
     * @test
     */
    public function it_works(): void
    {
        self::assertTrue(true);

        self::assertTrue(class_exists(Unit::class));
    }
}
