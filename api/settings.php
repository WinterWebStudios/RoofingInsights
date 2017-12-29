<?php
define("DEBUG",0);
define("LIVE",1);

$connection = new mysqli("localhost","root","","roofinginsights");
$version = DEBUG;

session_start();