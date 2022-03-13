<?php

namespace Class\Heritage;

class CoffeeMachine
{
  protected int $cups = 5;

  public function select(string $selection)
  {
    $result = match ($selection) {
      'espresso' => $this->makeEspresso(),
      default => 'Machine non dispo'
    };
  }

  public function makeEspresso()
  {
    for ($i = 0; $i < $this->cups; $i++) {
      echo 'Café espresso n° ' . $i + 1 . " servi !\n";
    }
    echo "_______________\n";
  }
}