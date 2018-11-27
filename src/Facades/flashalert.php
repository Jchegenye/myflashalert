<?php

namespace jchegenye\flashalert\Facades;

use Illuminate\Support\Facades\Facade;

class flashalert extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flashalert';
    }
}
