<?php

namespace MarshmallowPackages\LinkedinFollowers\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MarshmallowPackages\LinkedinFollowers\LinkedinFollowersServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MarshmallowPackages\\LinkedinFollowers\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LinkedinFollowersServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_linkedin-followers_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
