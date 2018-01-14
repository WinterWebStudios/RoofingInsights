<?php
$query = isset($_GET['query']) ? $_GET['query'] : "";
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
    <title>Roofing Insights | Slogan Here</title>
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
    <script type="text/javascript" src="js/youtubeLoader.js"></script>
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
                <div class="search">
                <?php
                $result = $connection->query("SELECT * FROM posts WHERE text LIKE '%".$query."%' OR title LIKE '%".$query."%'");
                while($row = $result->fetch_array())
                {
                    echo "<div class='row'>";
                    echo "<div class='col-3'>";
                    echo '<div class="youtube-player" data-id="'.substr(strrchr($row['iframe'], '/'), 1 ).'"></div>';
                    echo "</div>";
                    echo "<div class='col-9'>";
                    echo '<a href="viewpost.php?id='.$row['id'].'"><h5>'.$row['title'].'</h5>';
                    echo '<p>'.$row['summary'].'</p></a>';
                    echo "</div>";
                    echo '</div>';
                }
                ?>
            </div>
            </div>
            <div class="col-sm-3">
                <?php
                include_once "template/recentPosts.php";
                ?>
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
