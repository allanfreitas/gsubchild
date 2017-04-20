<?php

/**
 * User class
 */
class User
{
  public $username;
  public $email;
  public $tld;
  public $password;

  public function __construct($username)
  {
    $this->username = $username;
    $this->email = $username.'@somemail.com';
    $this->tld = 'com';
    $this->password = 'none-of-your-bussiness';
  }

  public function run()
  {
    return $this->username;
  }
}
