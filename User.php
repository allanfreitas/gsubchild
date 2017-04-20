<?php

/**
 *
 */
class User
{
  public $username;
  public $email;
  public $tld;

  public function __construct($username)
  {
    $this->username = $username;
    $this->email = $username.'@somemail.com';
    $this->tld = 'com';
  }

  public function run()
  {
    return $this->username;
  }
}
