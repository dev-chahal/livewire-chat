<?php

namespace DevChahal\LivewireChat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DevChahal\LivewireChat\LivewireChat
 */
class LivewireChat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DevChahal\LivewireChat\LivewireChat::class;
    }
}
