<?php

/**
 *
 */
class User
{
  public $username;

  public function __construct($username)
  {
    $this->username = $username;
  }

  public function run()
  {
    return $this->username;
  }
}
