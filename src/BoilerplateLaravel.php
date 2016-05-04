<?php

namespace gfazioli\BoilerplateLaravel;

/**
 * BoilerplateLaravel class.
 *
 * @class           BoilerplateLaravel
 * @author          =undo= <giovambattista.fazioli@gmail.com>
 * @date            2016-05-02
 * @version         1.0.0
 *
 * @history
 *
 *
 */
class BoilerplateLaravel
{

  public function __construct( $config = [ ] )
  {
    // You may comment this line if you application doesn't support the config
    if ( empty( $config ) ) {
      throw new \RunTimeException( 'Boilerplate Laravel Facade configuration is empty. Please run `php artisan vendor:publish`' );
    }
  }

  // This methods will be available by BoilerplateLaravel::helloWorld()
  public function helloWorld()
  {
    return 'Hello, World!';
  }
}


/*
|--------------------------------------------------------------------------
| BoilerplateLaravel Exceptions
|--------------------------------------------------------------------------
|
| These exceptions classes are used in this file. Feel free to add your
| custom feedback and classes.
|
*/

class BoilerplateLaravelException extends \Exception{}