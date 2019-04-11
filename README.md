# Interactive Make Command for Laravel

## Getting Started

To get started you need to install the package with Composer:

```bash
composer require isbkch/laravel-rich-console
```

### Laravel >= 5.5

That's it! The package is auto-discovered on 5.5 and up!

### Laravel <= 5.4

Add the package service provider to your providers array in `config/app.php`

```php
'providers' => [
    // ...
    Isbkch\Commands\MakeServiceProvider::class,
],
```

To start using this package, run this command in your terminal and follow the onscreen prompts:

```bash
php artisan make
```

### Preview

![](http://i.imgur.com/qR8AQ4U.gif)
