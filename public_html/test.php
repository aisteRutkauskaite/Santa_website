<?php
use App\App;
use Core\Cookies;

$cookie = new Cookies();

var_dump($cookie);


/**
 * Create a cookie with the name "myCookieName" and value "testing cookie value"
 */

//
//$cookie = new Cookies();
//// Set cookie name
//$cookie->setName('myCookieName');
//// Set cookie value
//$cookie->setValue("testing cookie value");
//// Set cookie expiration time
//$cookie->setTime("+1 hour");
//// Create the cookie
//$cookie->create();
//// Get the cookie value.
//print_r($cookie->get());
//// Delete the cookie.
////$cookie->delete();
//var_dump($cookie);