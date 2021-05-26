<?php

namespace MarshmallowPackages\LinkedinFollowers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LinkedinFollowersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('linkedin-followers');
    }
}
