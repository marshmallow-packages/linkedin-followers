<?php

namespace MarshmallowPackages\LinkedinFollowers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MarshmallowPackages\LinkedinFollowers\Commands\LinkedinFollowersCommand;

class LinkedinFollowersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('linkedin-followers');
    }
}
