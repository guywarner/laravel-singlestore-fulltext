<?php

namespace Guywarner\LaravelSinglestoreFulltext\Commands;

use Illuminate\Console\Command;

class LaravelSinglestoreFulltextCommand extends Command
{
    public $signature = 'laravel-singlestore-fulltext';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
