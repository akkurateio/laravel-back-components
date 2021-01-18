<?php

namespace Akkurate\LaravelBackComponents\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
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

        (new Filesystem)->copyDirectory(__DIR__.'/../../assets/css', public_path('css'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../assets/js', public_path('js'));

        copy(__DIR__.'/../../stubs/.prettierrc.js', public_path('.prettierrc.js'));
        copy(__DIR__.'/../../stubs/package.json', base_path('package.json'));
        copy(__DIR__.'/../../stubs/icons.js', base_path('icons.js'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/favicons', public_path('favicons'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/fonts', public_path('fonts'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/images', public_path('images'));

        copy(__DIR__.'/../../stubs/mix-manifest.json', public_path('mix-manifest.json'));
        copy(__DIR__.'/../../stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/../../stubs/webpack.site.js', base_path('webpack.site.js'));

        (new Filesystem)->deleteDirectory(resource_path('css'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/sass', resource_path('sass'));

        (new Filesystem)->deleteDirectory(resource_path('js'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/js', resource_path('js'));

        $this->line('');
        $this->info('Back components scaffolding installed successfully.');
        $this->comment('Please execute "npm install && npm run dev" to build your assets.');

    }

}
