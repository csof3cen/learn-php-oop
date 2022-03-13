<?php

namespace Class;

enum ReservationStatus
{
  case APPROVAL_PENDING;
  case APPROVAL_APPROVED;
  case APPROVAL_REJECTED;
}