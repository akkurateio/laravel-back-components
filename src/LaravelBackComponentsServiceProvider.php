<?php

namespace Akkurate\LaravelBackComponents;

use Illuminate\Support\ServiceProvider;

/**
 * Config service provider
 *
 */
class LaravelBackComponentsServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'back');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/back'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../resources/sass' => resource_path('sass/vendor/back-components'),
        ], 'sass');

        $this->publishes([
            __DIR__ . '/../resources/js' => resource_path('js/vendor/back-components'),
        ], 'js');

        $this->publishes([
            __DIR__ . '/../public' => public_path(),
        ], 'back-components-assets');

        $this->publishes([
            __DIR__ . '/../resources/fonts' => public_path('fonts'),
        ], 'back-components-assets');

        $this->publishes([
            __DIR__ . '/../resources/favicons' => public_path('favicons'),
        ], 'back-components-assets');

        $this->publishes([
            __DIR__ . '/../resources/images' => public_path('images'),
        ], 'back-components-assets');

        $this->publishes([
            __DIR__ . '/../config/back-components.php' => config_path('back-components.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../config/akk-sidenav.php' => config_path('akk-sidenav.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../config/akk-style.php' => config_path('akk-style.php'),
        ], 'config');

    }

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->mergeConfigFrom(
            __DIR__.'/../config/akk-sidenav.php', 'akk-sidenav'
        );

        $this->mergeConfigFrom(
            __DIR__.'/../config/akk-style.php', 'akk-style'
        );

        $this->mergeConfigFrom(
            __DIR__.'/../config/back-components.php', 'back-components'
        );

        $this->commands([
            Console\InstallCommand::class,
        ]);
	}
}
