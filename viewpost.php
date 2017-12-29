<?php
    $postID = isset($_GET['id']) ? $_GET['id'] : "";
?>

<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

require_once "api/settings.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roofing Insights | We expose the good, the bad and the ugly to endorse the roofing industry</title>
    <meta charset="UTF-8">
    <meta name="description" content="Description here">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#7db9e8">

    <link rel="icon" href="imgs/logo.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.min.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>

<!-- HEADER NAV -->
<?php include_once "template/header.php";?>
<main>
    <!-- HEADER -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php
                $result = $connection->query("SELECT * FROM posts WHERE id=$postID");
                while($row = $result->fetch_array())
                {
                    echo $row['iframe'];
                    echo '<h3>'.$row['title'].'</h3>';
                    echo '<p class="text-justify">'.$row['text'].'</p>';

                }
                ?>
            </div>
            <div class="col-sm-3">
                <?php include_once "template/recentPosts.php"; ?>
            </div>
        </div>
    </div>

    <!-- SOCIAL MEDIA NAVBIT -->
    <?php include_once "template/socialMedia.php";?>
</main>

<!-- BLOG FOOTER -->
<?php include_once "template/footer.php"; ?>
</body>
</html>
