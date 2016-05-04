# Boilerplate Laravel Facade

A simple Boilerplace for Laravel Facade and Service Provider

## Requirements

* PHP 5.5.9 or greater
* Laravel 5.2 or greater

## Installation

Download or clone this repo in your folder or vendor.

## Laravel

We include service providers and a facade for easy integration and a nice syntax for Laravel.

Firstly, add the `\BoilerplateLaravel\BoilerplateLaravelServiceProvider` provider to the providers array in `config/app.php`

```php
'providers' => [
  ...
  gfazioli\BoilerplateLaravel\BoilerplateLaravelServiceProvider::class,
],
```

and then add the facade to your `aliases` array

```php
'aliases' => [
  ...
  'BoilerplateLaravel' => gfazioli\BoilerplateLaravel\Facades\BoilerplateLaravelFacade::class,
],
```

### Configuration

Publish the configuration file with:

```sh
// Laravel 5, file will be at config/boilerplate.php
php artisan vendor:publish
```

### Test

Now you may use `BoilerplateLaravel::helloWorld();`

### Renaming

Of course, you would like rename the namespace `gfazioli\BoilerplateLaravel`, the class `BoilerplateLaravel`, etc...
Feel free to rename everythings.
