<?php
    require_once("settings.php");
    $title = $connection->escape_string($_POST['title']);
    $text = $connection->escape_string($_POST['text']);
    $author = $_POST['author'];
    $summary = $connection->escape_string($_POST['summary']);
    $tag = $_POST['tag'];
    $id = $_POST['id'];

    $connection->query("UPDATE `posts` SET `title` = '$title', `text` = '$text', `tags` = '$tag', `author` = '$author', `visibility` = '0', `summary` = '$summary', `thumbnail` = '' WHERE `posts`.`id` = $id;");
    header( 'Location: ../admin/admin.php' ) ;