<?php

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class ShowString extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ShowString';
    }
}