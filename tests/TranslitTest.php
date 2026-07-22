<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function Sergeich5\Helpers\translit;

class TranslitTest extends TestCase
{
    static function data(): array
    {
        return [
            ['привет', true, true, 'privet'],
            ['ПрИвЕт', false, true, 'PrIvEt'],
            ['съешь еще этих мягких французских булок, да выпей чаю', true, true, 'sesh-esche-etih-myagkih-francuzskih-bulok-da-vypey-chayu'],
            ['съешь еще этих мягких французских булок, да выпей чаю', true, false, 'sesh esche etih myagkih francuzskih bulok, da vypey chayu'],
        ];
    }

    #[DataProvider('data')]
    function test(string $string, bool $toLowerCase, bool $otherSymbolsToDash, string $expected)
    {
        $this->assertEquals($expected, translit($string, $toLowerCase, $otherSymbolsToDash));
    }
}