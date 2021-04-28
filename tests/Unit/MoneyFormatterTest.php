<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\MoneyFormatter;

class MoneyFormatterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testFormatted()
    {
        $value = 10000;
        $formatter = new MoneyFormatter($value);
        $this->assertEquals('10 000', $formatter->formatted());
    }

    public function testFormattedLittleNumber()
    {
        $value = 99;
        $formatter = new MoneyFormatter($value);
        $this->assertEquals('99', $formatter->formatted());
    }

    public function testFormattedThousand()
    {
        $value = 1000;
        $formatter = new MoneyFormatter($value);
        $this->assertEquals('1 000', $formatter->formatted());
    }

    public function testFormattedString()
    {
        $value = '1000';
        $formatter = new MoneyFormatter($value);
        $this->assertEquals('1 000', $formatter->formatted());
    }

    public function testFormattedStringSpaced()
    {
        $value = '1 00 0';
        $formatter = new MoneyFormatter($value);
        $this->assertEquals('1 000', $formatter->formatted());
    }

    public function testEraseString()
    {
        $value = '4.100.000';
        $formatter = new MoneyFormatter($value);
        $this->assertEquals('4100000', $formatter->eraseString($value));
    }
}
