<?php
    require_once("settings.php");
    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $summary = $_POST['summary'];
    $tag = $_POST['tag'];
    $iframe = $_POST['iframe'];

    $connection->query("INSERT INTO `posts` (`id`, `title`, `text`, `tags`, `date`, `author`, `visibility`, `iframe`, `summary`, `thumbnail`) VALUES (NULL, '$title', '$text', '$tag', CURRENT_TIMESTAMP, '$author', '0', '$iframe', '$summary', 'fdgd')");
    header( 'Location: ../admin/admin.php' ) ;