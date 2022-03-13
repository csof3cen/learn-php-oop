<?php

class Cart
{
  // private int $quantity;
  // private float $totalPrice;

  // public function __construct(int $quantity, float $totalPrice)
  // {
  //   $this->quantity = $quantity;
  //   $this->totalPrice = $totalPrice;
  // }

  //  Avec PHP8.0, il est possible de créer les proriétes directement dans le constructeur

  public function __construct(
    private int $quantity,
    private float $totalPrice
  ) {
  }

  public function discount(int $percentage): void
  {
    $this->totalPrice -= ($this->totalPrice * $percentage) / 100;
  }

  // GETTERS & SETTERS

  public function getTotalPrice(): float
  {
    return $this->totalPrice;
  }

  public function getQuantity(): float
  {
    return $this->quantity;
  }

  public function setTotalPrice(float $totalPrice): void
  {
    $this->totalPrice = $totalPrice;
  }

  public function setQuantity(float $quantity): void
  {
    $this->quantity = $quantity;
  }
}