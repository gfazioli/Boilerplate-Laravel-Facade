<?php

namespace gfazioli\BoilerplateLaravel;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BoilerplateLaravelServiceProvider extends ServiceProvider {

  public function boot()
  {
    // will copy the default configuration in the laravel project
    $this->publishes( [ __DIR__ . '/config/boilerplate.php' => config_path( 'boilerplate.php' ) ] );
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {

    // See src/Facades/BoilerplateLaravelFacade.php
    App::bind( 'gfazioli.boilerplate.laravel.facade', function () {

      // Feel free to comment this section if you no need of configuration
      $config = config( 'boilerplate' );

      if ( ! $config ) {
        throw new \RunTimeException( 'Boilerplate Laravel Facade configuration not found. Please run `php artisan vendor:publish`' );
      }

      // DO NOT REMOVE or COMMENT - here we'll create the Facade
      // Remove $config if you have comment the lines above
      return new \gfazioli\BoilerplateLaravel\BoilerplateLaravel( $config );
    } );
  }
}