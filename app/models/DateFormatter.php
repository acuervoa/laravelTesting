<?php

class DateFormatter {
  protected $stamp;

  public function __construct(DateTime $stamp)
  {
    $this->stamp = $stamp;
  }

  public function getStamp()
  {
    return $this->stamp;
  }
}
