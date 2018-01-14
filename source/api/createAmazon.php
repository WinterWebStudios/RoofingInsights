<?php
    require_once("settings.php");
    $image = $_POST['image'];
    $text = $_POST['text'];
    $connection->query("INSERT INTO `amazon` (`id`, `image`, `text`) VALUES (NULL, '$image', '$text')");
    header( 'Location: ../admin/admin.php' ) ;