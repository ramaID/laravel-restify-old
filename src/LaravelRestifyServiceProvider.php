<?php

namespace CodeWeaver\LaravelRestify;

use CodeWeaver\LaravelRestify\Commands\GenerateCommand;
use CodeWeaver\LaravelRestify\Commands\GenerateControllerCommand;
use CodeWeaver\LaravelRestify\Commands\GenerateDataCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use CodeWeaver\LaravelRestify\Commands\SetupCommand;

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
            // ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_laravel-restify_table')
            ->hasCommand(SetupCommand::class)
            ->hasCommand(GenerateDataCommand::class)
            ->hasCommand(GenerateControllerCommand::class)
            ->hasCommand(GenerateCommand::class)
        ;
    }
}
