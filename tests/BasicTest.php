<?php

namespace LamTranB\VietnameseTitleCase\Tests;

use LamTranB\VietnameseTitleCase\VietnameseTitleCase;
use PHPUnit\Framework\TestCase;

/**
 * Basic Test.
 */
class BasicTest extends TestCase
{
    public static function titleProvider(): array
    {
        return [
            ['TRẦN BẢO LÂM', 'Trần Bảo Lâm'],
            ['JOHN WICK', 'John Wick'],
            ['daenerys targaryen', 'Daenerys Targaryen'],
        ];
    }

    /**
     * Test transform string to title case.
     *
     * @dataProvider titleProvider
     * @param string $string
     * @param string $expectedString
     */
    public function testTransform(string $string, string $expectedString): void
    {
        $this->assertSame($expectedString, VietnameseTitleCase::transform($string));
    }
}