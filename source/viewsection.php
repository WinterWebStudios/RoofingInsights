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
    <meta name="theme-color" content="#00508d">

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
        <div class="section">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                    <?php
                    $result = $connection->query("SELECT * FROM posts WHERE tags=$postID"); //comment
                    while($row = $result->fetch_array())
                    {
                        if($result->num_rows == 1) {
                            header("location: viewpost.php?id=".$row['id']);
                        }
                        echo '<div class="col-lg-4 col-sm-12">';
                        if(!empty($row['iframe']))
                            echo '<div class="youtube-player" data-id="'.substr(strrchr($row['iframe'], '/'), 1 ).'"></div>';
                        else
                            echo '<img style="display: block" width="300px" height="200px" src="imgs/placeholder.png">';
                        echo '<a style="color: #000" href="viewpost.php?id='.$row['id'].'">';
                        echo '<b>'.$row['title'].'</b>';
                        echo '<h6>Posted '.date( "M d, Y",strtotime($row['date'])).'</h6>';
                        echo '<p>' . substr(strip_tags($row['summary']), 0, 50) . '...  <span style="color: #0055aa">Read More</span></p>';
                        echo '</a></div>';
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
    </div>

    <!-- SOCIAL MEDIA NAVBIT -->
    <?php include_once "template/socialMedia.php";?>
</main>

<!-- BLOG FOOTER -->
<?php include_once "template/footer.php"; ?>
</body>
</html>
