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