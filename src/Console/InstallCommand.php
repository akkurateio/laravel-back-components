<?php

namespace Akkurate\LaravelBackComponents\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'back-components:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the Back Components resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $this->comment('Publishing Back Components Assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'back-components-assets']);

        $this->info('Back Components scaffolding installed successfully.');
    }

}
