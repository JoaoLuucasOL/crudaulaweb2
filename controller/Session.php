<?php
class Session
{
  public function __construct()
  {
    session_start();
  }
  public static function setValue($key, $value)
  {
    $_SESSION[$key] = $value;
  }
  public function getValue($key)
  {
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }
  }
  public static function freeSession()
  {
    $_SESSION = array();
    session_destroy();
  }
}
