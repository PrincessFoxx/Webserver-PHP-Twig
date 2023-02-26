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

final class HomeAction {
  public function __construct(
    private Twig $view
  ){}

  public function __invoke(Request $request, Response $response): Response {
    return $this->view->render($response, 'home.twig');
  }
}
```

Lastly run the following commands to reinitialize the namespace, install dependencies, and start the server.

```bash
composer dump-autoload
composer install
composer start
```