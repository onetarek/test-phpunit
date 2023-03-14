<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ExamplesTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertArrayHasKey('foo', ['bar' => 'baz']);
    }

    public function testEqueals(): void
    {
        $this->assertEquals('foo', 5 );
    }

    public function testAssertClassHasAttribute(): void
    {
        $this->assertClassHasAttribute('foo', myclass::class);
    }

    public function testClassHasStaticAttribute(): void
    {
        $this->assertClassHasStaticAttribute('name', myclass::class);
    }

    public function testContains(): void
    {
        $this->assertContains(4, [1, 2, 3], 'array does not contain 4');
    }

    public function testNotContains(): void
    {
        $this->assertNotContains(4, [1, 2, 3]);
    }

    public function testStringContainsString(): void
    {
        $this->assertStringContainsString('foo', 'foo bar');
    }
    
    //https://docs.phpunit.de/en/9.6/assertions.html#assertcontainsonly
    //Reports an error identified by $message if $haystack does not contain only variables of type $type.
    public function testContainsOnly(): void
    {
        $this->assertContainsOnly('string', ['1', '2', 3]);
    }


}