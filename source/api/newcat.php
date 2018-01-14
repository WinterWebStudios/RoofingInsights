<?php
require_once "settings.php";

$name = $_POST['name'];
$parent = $_POST['parent'];

$connection->query("INSERT INTO `categories` (`id`, `name`, `parent`) VALUES (NULL, '$name', '$parent')");
header( 'Location: ../admin/admin.php' ) ;