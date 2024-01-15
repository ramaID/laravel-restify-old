<?php

namespace CodeWeaver\LaravelRestify\Commands;

use Illuminate\Console\Command;

class SetupCommand extends Command
{
    public $signature = 'restify:setup';

    public $description = 'Setup requirements, installing dependencies.';

    public function handle(): int
    {
        $packages = [
            'spatie/enum',
            'spatie/laravel-data',
            'spatie/laravel-query-builder',
            'spatie/laravel-typescript-transformer',
        ];

        try {
            exec('composer require '.implode(' ', $packages).' -W', $output, $returnCode);

            copy(__DIR__.'/../../stubs/typescript-transformer.php', config_path('typescript-transformer.php'));
        } catch (\Throwable $th) {
            report($th);

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
