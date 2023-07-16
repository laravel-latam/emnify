<?php

namespace LaravelLatam\Emnify\Commands;

use Illuminate\Console\Command;

class EmnifyCommand extends Command
{
    public $signature = 'emnify';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
