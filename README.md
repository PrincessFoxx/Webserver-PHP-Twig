# how to use this template

Change namespace package name in `composer.json`.
```json
{
  "name": "project/name",
  "description": "Project Description",
  "license": "MIT",
  "authors": [
    {
      "name": "Author Name",
      "email": "Author@email.here"
    }
  ],
  "require": {
    "nyholm/psr7": "^1.5",
    "nyholm/psr7-server": "^1.0",
    "slim/slim": "^4",
      "php-di/php-di": "^6.4",
      "slim/twig-view": "^3.3"
  },
  "autoload": {
    "psr-4": {
      "Project\\Name\\": "src/"
    }
  },
  "config": {
    "process-timeout": 0
  },
  "scripts": {
    "start": "php -S localhost:8080 -t public/"
  }
}
```

Change the route class on line 8 of `config/routes.php` to your own route class.

```php
<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {
  $app->get('/', \Project\Name\Action\HomeAction::class);
};
```

Change the namespace of the `HomeAction` class on line 3 of `src/Action/HomeAction.php` to your own namespace.

```php
<?php

namespace Project\Name\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Project\Name\Core\Math;

final class HomeAction {
  public function __construct(
    private Twig $view,
  ){}

  public function __invoke(Request $request, Response $response): Response {
    $a = 20;
    $b = 2;
    $sum = Math::add($a, $b);
    $formula1 = "$a + $b = $sum";

    $product = Math::multiply($a, $b);
    $formula2 = "$a * $b = $product";

    $factoral = Math::factorial($b);
    $formula3 = "$b! = $factoral";
    
    return $this->view->render($response, 'home.twig', [
      'add' => $formula1,
      'multiply' => $formula2,
      'factorial' => $formula3,
    ]);
  }
}
```

Change the namespace of the math class on line 2 of `src/Core/Math.php` to your own namespace.

```php
<?php
  namespace Project\Name\Core;

  /**
   * Math
   * 
   * A class containing static methods for performing mathematical operations.
   * This is just a sample class to demonstrate how to use OOP in PHP.
   */
  final class Math {
    /**
     * Add
     * 
     * Adds two integers together.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The sum of $a and $b
     */
    public static function add(int $a, int $b): int {
      return $a + $b;
    }

    /**
     * Subtract
     * 
     * Subtracts two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The difference of $a and $b
     */
    public static function subtract(int $a, int $b): int {
      return $a - $b;
    }

    /**
     * Multiply
     * 
     * Multiplies two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The product of $a and $b
     */
    public static function multiply(int $a, int $b): int {
      return $a * $b;
    }

    /**
     * Divide
     * 
     * Divides two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The quotient of $a and $b
     */
    public static function divide(int $a, int $b): int {
      return $a / $b;
    }

    /**
     * Modulo
     * 
     * Returns the remainder of two integers.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The remainder of $a and $b
     */
    public static function modulo(int $a, int $b): int {
      return $a % $b;
    }

    /**
     * Power
     * 
     * Raises one integer to the power of another.
     *
     * @param integer $a
     * @param integer $b
     * @return integer The result of $a raised to the power of $b
     */
    public static function power(int $a, int $b): int {
      return $a ** $b;
    }

    /**
     * Square
     * 
     * Raises an integer to the power of two.
     *
     * @param integer $a
     * @return integer The result of $a raised to the power of two
     */
    public static function square(int $a): int {
      return $a ** 2;
    }

    /**
     * Cube
     * 
     * Raises an integer to the power of three.
     *
     * @param integer $a
     * @return integer The result of $a raised to the power of three
     */
    public static function cube(int $a): int {
      return $a ** 3;
    }

    /**
     * Square Root
     * 
     * Returns the square root of an integer.
     *
     * @param integer $a
     * @return integer The square root of $a
     */
    public static function squareRoot(int $a): int {
      return sqrt($a);
    }

    /**
     * Factorial
     * 
     * Returns the factorial of an integer.
     * 
     * @param integer $a
     * @return integer The factorial of $a
     */
    public static function factorial(int $a): int {
      return $a < 2 ? 1 : $a * self::factorial($a - 1);
    }
  }
```

Lastly run the following commands to reinitialize the namespace, install dependencies, and start the server.

```bash
composer dump-autoload
composer install
composer start
```
