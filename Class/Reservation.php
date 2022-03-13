<?php

namespace Class;

use \Class\ReservationStatus;

class Reservation
{
  // NB: Par défaut, si l'on ne spécifie pas de portée, c'est public

  public ReservationStatus $status;

  public function __construct()
  {
    // La variable $status correspond à un état de ReservationStatus
    $this->status = ReservationStatus::APPROVAL_PENDING;
  }
}