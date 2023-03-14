<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    public function testGetHello(): void
    {
        $this->assertEquals( get_hello(), 'hello' );
    }

}