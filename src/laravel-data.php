<?php

namespace Sergeich5\Helpers;

use Spatie\LaravelData\Optional;

function optionalToNull(mixed $var): mixed
{
    return ($var instanceof Optional) ? null : $var;
}
