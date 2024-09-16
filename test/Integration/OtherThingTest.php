<?php declare(strict_types=1);

namespace App\Test\Integration;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class OtherThingTest extends TestCase
{
    #[Test]
    public function it_does_the_other_thing(): void
    {
        var_dump('other_thing');

        $this->assertTrue(true);
    }
}
