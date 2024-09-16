<?php declare(strict_types=1);

namespace App\Test\Unit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ThingTest extends TestCase
{
    #[Test]
    public function it_does_the_thing(): void
    {
        var_dump('thing');

        $this->assertTrue(true);
    }
}
