<?php

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Factory\AppFactory;

return [
  'settings' => function () {
    return require __DIR__ . '/settings.php';
  },

  App::class => function (ContainerInterface $container) {
    AppFactory::setContainer($container);

    return AppFactory::create();
  },

  \Slim\Views\Twig::class => function (ContainerInterface $container) {
    $filesystemLoader = new \Twig\Loader\FilesystemLoader();
    $filesystemLoader->addPath(dirname(__DIR__) . '/templates');

    return new \Slim\Views\Twig($filesystemLoader);
  }
];