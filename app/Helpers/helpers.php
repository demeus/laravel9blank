<?php

use Carbon\Carbon;

function carbon(string $parseString = '', string $tz = null): Carbon
{
    return Carbon::parse($parseString, $tz);
}