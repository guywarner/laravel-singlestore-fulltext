<?php

namespace Guywarner\LaravelSinglestoreFulltext;

use Guywarner\LaravelSinglestoreFulltext\Commands\LaravelSinglestoreFulltextCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('laravel-singlestore-fulltext');
    }
}
