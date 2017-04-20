<?php

/**
 *
 */
class User
{
  public $username;
  public $email;

  public function __construct($username)
  {
    $this->username = $username;
    $this->email = $username.'@somemail.com';
  }

  public function run()
  {
    return $this->username;
  }
}
