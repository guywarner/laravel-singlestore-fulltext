<?php

namespace Guywarner\LaravelSinglestoreFulltext\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Guywarner\LaravelSinglestoreFulltext\LaravelSinglestoreFulltextServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Guywarner\\LaravelSinglestoreFulltext\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSinglestoreFulltextServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-singlestore-fulltext_table.php.stub';
        $migration->up();
        */
    }
}
