<?php

require __DIR__ . '/vendor/autoload.php';

echo '<a href="https://www.youtube.com/watch?v=4DkvZ3RTFm8">PHP-DI - сервіс контейнер</a>';

class A
{
  private $b;

  public function __construct(B $b)
  {
    $this->b = $b;
  }

}

class B
{

}