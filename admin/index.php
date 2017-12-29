<?php
session_start();
if(isset($_SESSION['riUser'])) {
    header( 'Location: admin.php' ) ;
}
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/adminLogin.css">
    </head>

    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="../api/user.php">
                    <input type="text" name="username" placeholder="username"/>
                    <input type="password" name="password" placeholder="password"/>
                    <input type="hidden" name="call" value="login">
                    <button>login</button>
                </form>
            </div>
        </div>
    </body>
</html>