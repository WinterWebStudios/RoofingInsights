<?php
require_once("settings.php");
$title = $_POST['title'];
$text = $_POST['text'];
$author = $_POST['author'];
$summary = $_POST['summary'];
$tag = $_POST['tag'];
$id = $_POST['id'];

$connection->query("UPDATE `posts` SET `title` = '$title', `text` = '$text', `tags` = '$tag', `author` = '$author', `visibility` = '0', `summary` = '$summary', `thumbnail` = '' WHERE `posts`.`id` = $id;");
header( 'Location: ../admin/admin.php' ) ;