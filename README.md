# Laravel Back Components

Blade components to quickly build demo pages.

## Installation

You can install the package via composer:

``` bash
composer require akkurate/laravel-back-components
```

The package will automatically register itself.

You can publish the views with:
```bash
php artisan vendor:publish --provider="Akkurate\LaravelBackComponents\LaravelBackComponentsServiceProvider" --tag="views"
```

```bash
php artisan vendor:publish --provider="Akkurate\LaravelBackComponents\LaravelBackComponentsServiceProvider" --tag="sass"
```

```bash
php artisan vendor:publish --provider="Akkurate\LaravelBackComponents\LaravelBackComponentsServiceProvider" --tag="js"
```

### crud-actions-enabled
Détermine l’affichage de boutons d’action sur les vues index dans le composant back::atomicdesign.atoms.table.