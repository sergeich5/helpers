<?php

namespace tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function Sergeich5\Helpers\number;

class NumberTest extends TestCase
{
    static function data(): array
    {
        $strings = ['день', 'дня', 'дней'];

        $data = [
            0 => [1, 21, 31, 101],
            1 => [2, 3, 4, 22, 23, 24, 32, 33, 34, 102, 103, 104],
            2 => [0, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 25, 26, 27, 28, 29, 30, 100, 105],
        ];

        $result = [];

        foreach ($data as $index => $numbers)
            foreach ($numbers as $number)
                $result[] = [$number, $strings, $index];


        return $result;
    }

    #[DataProvider('data')]
    function test(int $number, array $strings, int $expected)
    {
        $this->assertEquals(
            $strings[$expected],
            number($number, $strings)
        );
    }
}