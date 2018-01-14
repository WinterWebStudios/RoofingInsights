<?php
define("DEBUG",0);
define("LIVE",1);
if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
    $connection = new mysqli("localhost", "root", "", "roofinginsights");
}else{
    $connection = new mysqli("localhost", "root", "dimond23", "roofinginsights");
}
$version = DEBUG;

session_start();