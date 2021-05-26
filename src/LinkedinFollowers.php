<?php

namespace MarshmallowPackages\LinkedinFollowers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarshmallowPackages\LinkedinFollowers\LinkedinFollowersHelper
 */
class LinkedinFollowers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LinkedinFollowersHelper::class;
    }
}
