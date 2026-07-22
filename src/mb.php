<?php

namespace Sergeich5\Helpers;

function mb_ucfirst($str, $encoding = 'UTF-8'): string
{
    $str = mb_ereg_replace('^[\ ]+', '', $str);
    return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) .
        mb_substr($str, 1, mb_strlen($str), $encoding);
}
