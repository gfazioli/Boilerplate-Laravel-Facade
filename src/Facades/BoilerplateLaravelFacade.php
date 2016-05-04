<?php

namespace gfazioli\BoilerplateLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class BoilerplateLaravelFacade extends Facade {

  /**
   * Get the registered name of the component.
   * See src/BoilerplateLaravelServiceProvider.php
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return 'gfazioli.boilerplate.laravel.facade';
  }

}