<?php

namespace dayscript\laravelZohoCrm\Facades;

use Illuminate\Support\Facades\Facade;

class laravelZohoCrm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelzohocrm';
    }
}
