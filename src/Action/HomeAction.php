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