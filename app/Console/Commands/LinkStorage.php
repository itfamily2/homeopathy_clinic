<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LinkStorage extends Command
{
    protected $signature = 'link:storage';

    protected $description = 'Create symbolic link for storage';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Creating symbolic link for storage...');
        $this->call('storage:link');
        $this->info('Symbolic link created successfully!');
    }
}
