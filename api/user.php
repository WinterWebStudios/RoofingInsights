<?php
require_once("settings.php");

$call = isset($_POST['call']) ? $_POST['call'] : "";

switch ($call) {
    case "login":
        $username = isset($_POST['username']) ? stripslashes($_POST['username']) : "";
        $password = isset($_POST['password']) ? stripslashes($_POST['password']) : "";
        $query = $connection->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
        if ($query->num_rows > 0) {
            $_SESSION['riUser'] = $username;
            header( 'Location: ../admin/admin.php' ) ;
        }
    break;

    case "logout":
        session_destroy();
    break;
}


