<?php

namespace Guywarner\LaravelSinglestoreFulltext;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Guywarner\LaravelSinglestoreFulltext\Commands\LaravelSinglestoreFulltextCommand;

class LaravelSinglestoreFulltextServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-singlestore-fulltext')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-singlestore-fulltext_table')
            ->hasCommand(LaravelSinglestoreFulltextCommand::class);
    }
}
