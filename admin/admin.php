<?php
    require_once("../api/settings.php");
    if(!isset($_SESSION['riUser'])) {
        header( 'Location: index.php' ) ;
    }
?>

<html>
    <head>
        <link rel="icon" href="../imgs/logo.png">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/admin.min.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
        <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_style.min.css' rel='stylesheet' type='text/css' />

        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/js/froala_editor.min.js'></script>
    </head>

    <body>
        <div class="container-fluid">
            <nav>
                <h3>Admin Panel</h3>
                <p>Welcome back, <?= $_SESSION['riUser'] ?> | <form method="post" action="../api/user.php"><input type="hidden" name="call" value="logout"><button>Logout</button></form></p>

                <ul>
                    <a href="?view=categories"><li>Categories</li></a>
                    <a href="?view=manageposts"><li>Manage Posts</li></a>
                    <a href="?view=createpost"><li>Create a post</li></a>
                    <a href="?view=manageusers"><li>Manage Users</li></a>
                    <a href="?view=manageamazon"><li>Manage Amazon</li></a>
                </ul>

                <footer>
                    Copyright &copy 2017. Winter Web Studios Inc.
                </footer>
            </nav>

            <main>
                <?php
                $id = isset($_GET["view"]) ? $_GET["view"] : "categories";
                include_once ("template/".$id.".php")
                ?>
            </main>
        </div>
    </body>
</html>
