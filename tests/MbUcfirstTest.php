<?php

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function Sergeich5\Helpers\mb_ucfirst;

class MbUcfirstTest extends TestCase
{
    static function data(): array
    {
        return [
            ['абв', 'Абв'],
            ['бвг', 'Бвг'],
            ['вгд', 'Вгд'],
            ['где', 'Где'],
            ['Деё', 'Деё'],
            ['еёж', 'Еёж'],
            ['ёжз', 'Ёжз'],
            ['жзи', 'Жзи'],
            ['зий', 'Зий'],
            ['зий', 'Зий'],
            ['ийк', 'Ийк'],
            ['йкл', 'Йкл'],
            ['клм', 'Клм'],
            ['лмн', 'Лмн'],
            ['мно', 'Мно'],
            ['ноп', 'Ноп'],
            ['опр', 'Опр'],
            ['прс', 'Прс'],
            ['рст', 'Рст'],
            ['сту', 'Сту'],
            ['туф', 'Туф'],
            ['уфх', 'Уфх'],
            ['фхц', 'Фхц'],
            ['хцч', 'Хцч'],
            ['цчш', 'Цчш'],
            ['чшщ', 'Чшщ'],
            ['шщэ', 'Шщэ'],
            ['щэю', 'Щэю'],
            ['эюя', 'Эюя'],
            ['юя', 'Юя'],
            ['яю', 'Яю'],
        ];
    }

    #[DataProvider('data')]
    function test(string $string, string $expected)
    {
        $this->assertEquals($expected, mb_ucfirst($string));
    }
}