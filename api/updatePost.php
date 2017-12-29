<?php
require_once "settings.php";
$action = $_GET['action'];
$id = $_GET['id'];
switch ($action) {
    case "delete":
        $connection->query("DELETE FROM posts WHERE id=$id");
        break;
    case "feature":
        $connection->query("UPDATE posts SET visibility=1 WHERE id=$id");
        break;

    case "show":
        $connection->query("UPDATE posts SET visibility=2 WHERE id=$id");
        break;
}

header( 'Location: ../admin/admin.php' ) ;