<?php
    require_once("settings.php");
    $title = $connection->escape_string($_POST['title']);
    $text = $connection->escape_string($_POST['text']);
    $author = $_POST['author'];
    $summary = $connection->escape_string($_POST['summary']);
    $tag = $_POST['tag'];
    $iframe = $_POST['iframe'];

    $connection->query("INSERT INTO `posts` (`id`, `title`, `text`, `tags`, `date`, `author`, `visibility`, `iframe`, `summary`, `thumbnail`) VALUES (NULL, '$title', '$text', '$tag', CURRENT_TIMESTAMP, '$author', '0', '$iframe', '$summary', 'fdgd')");
    header( 'Location: ../admin/admin.php?view=manageposts' ) ;