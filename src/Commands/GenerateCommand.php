<?php

namespace CodeWeaver\LaravelRestify\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateCommand extends Command
{
    public $signature = 'restify:gen {name}';

    public $description = 'Generate files from stubs.';

    public function handle(): int
    {
        $name = $this->argument('name');

        try {
            Artisan::call('restify:gen-data '.$name.'Data');
            Artisan::call('restify:gen-controller '.$name.'Controller');
        } catch (\Throwable $th) {
            report($th);

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
