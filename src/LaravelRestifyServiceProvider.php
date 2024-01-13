<?php

namespace CodeWeaver\LaravelRestify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CodeWeaver\LaravelRestify\Commands\LaravelRestifyCommand;

class LaravelRestifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-restify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-restify_table')
            ->hasCommand(LaravelRestifyCommand::class);
    }
}
