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
		<meta name="description" content="Roofing Insights was founded with a rebellious spirit and ambitious objective to become a leading reporter on the roofing industry, covering products, tools and installation practices as well as roofing news.">
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
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        $result = $connection->query("SELECT * FROM posts ORDER BY id DESC LIMIT 1");
                        while($row = $result->fetch_array())
                        {
                            echo '<div class="youtube-player" data-id="'.substr(strrchr($row['iframe'], '/'), 1 ).'"></div>';
                            echo '<h3>'.$row['title'].'<small class="float-right text-muted">'.explode(' ',$row['date'])[0].'</small></h3>';
                            echo '<p class="text-justify">'.substr(strip_tags($row['text']), 0, 1000).'...<a href="viewpost.php?id='.$row['id'].'" style="float: right">Read more...</a></p>';

                        }
                        ?>
                    </div>
                    <div class="col-sm-3">
                        <?php require_once "template/recentPosts.php"; ?>
                    </div>
                </div>
            </div>

            <!-- SOCIAL MEDIA NAVBIT -->
            <?php include_once "template/socialMedia.php";?>

            <!-- FEATURED ARTICLES -->
            <div class="container" id="featuredArticles">
                <h2 class="display-4">Featured Articles</h2>
                <div class="row">
                    <?php
                    $result = $connection->query("SELECT * FROM posts WHERE visibility=1 ORDER BY RAND() LIMIT 3");
                    while($row = $result->fetch_array())
                    {
                        echo '<div class="col-sm-4">';
                        echo '<div class="youtube-player" data-id="'.substr(strrchr($row['iframe'], '/'), 1 ).'"></div>';
                        echo '<h5><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'</a></h5>';
                        echo '<h6>UPDATED '.date( "M d, Y",strtotime($row['date'])).'</h6>';
                        echo '<p><strong>by ' . $row['author'] . '</strong></p>';
                        echo '<p>' . strip_tags($row['summary']) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- FEATURED PRODUCTS -->
            <div id="featuredProducts">
                <?php include_once "template/products.php"; ?>
            </div>

            <!-- BLOG CATEGORIES -->
            <div class="container" id="blogCategories">
                <?php
                    $result = $connection->query("SELECT * FROM categories WHERE parent=0");
                    $counter = 0;
                    while($row = $result->fetch_array())
                    {
                        $cats = [$row['id']];
                        $resultLinks = $connection->query("SELECT * FROM categories WHERE parent=" . $row['id']);
                        while($rowLinks = $resultLinks->fetch_array())
                        {
                            array_push($cats, $rowLinks['id']);
                        }
                        $resultPosts = $connection->query("SELECT * FROM posts WHERE tags IN (".implode(",",$cats).") LIMIT 3");
                        if($resultPosts->num_rows > 0) {
                            $resultLinks->data_seek(0);
                            echo '<h2 class="display-4"><a href="viewsection.php?id='.$row['id'].'">' . $row['name'] . '</a></h2>';
                            echo '<p id="categoryLink">';
                            while($rowLinks = $resultLinks->fetch_array())
                            {
                                echo' <a href="">'.$rowLinks['name'].',</a>';
                            }

                            echo '</p>';

                            echo '<div class="row">';

                            $counterPosts = 0;
                            while ($rowPosts = $resultPosts->fetch_array()) {
                                if ($counter % 2 == 0) {
                                    echo '<div class="col-sm-4">';
                                    echo '<div class="youtube-player" data-id="'.substr(strrchr($rowPosts['iframe'], '/'), 1 ).'"></div>';
                                    echo '<h5><a href="viewpost.php?id='.$rowPosts['id'].'">' . $rowPosts['title'] . '</a></h5>';
                                    echo '<h6>UPDATED '.date( "M d, Y",strtotime($rowPosts['date'])).'</h6>';
                                    echo '<p><strong>by ' . $rowPosts['author'] . '</strong></p>';
                                    echo '<p>' . strip_tags($rowPosts['summary']) . '</p>';
                                    echo '</div>';
                                } else {
                                    if ($counterPosts == 0) {
                                        echo '<div class="col-sm-6">';
                                        echo '<div class="youtube-player" data-id="'.substr(strrchr($rowPosts['iframe'], '/'), 1 ).'"></div>';
                                        echo '<h5><a href="viewpost.php?id='.$rowPosts['id'].'">' . $rowPosts['title'] . '</a></h5>';
                                        echo '<h6>UPDATED '.date( "M d, Y",strtotime($rowPosts['date'])).'</h6>';
                                        echo '<p><strong>by ' . $rowPosts['author'] . '</strong></p>';
                                        echo '<p>' . strip_tags($rowPosts['summary']) . '</p>';
                                        echo '</div>';
                                        echo '<div class="col-sm-6">';
                                    } else {

                                        echo '<div class="subArticle">';
                                        echo '<div class="float-left image">';
                                        echo '<div class="youtube-player" data-id="'.substr(strrchr($rowPosts['iframe'], '/'), 1 ).'"></div>';
                                        echo '</div>';
                                        echo '<div class="float-right text">';
                                        echo '<h5><a href="viewpost.php?id='.$rowPosts['id'].'">' . $rowPosts['title'] . '</a></h5>';
                                        echo '<h6>UPDATED '.date( "M d, Y",strtotime($rowPosts['date'])).'</h6>';
                                        echo '<p>' . strip_tags($rowPosts['summary']) . '</p>';
                                        echo '</div>';
                                        echo '</div>';


                                    }
                                    if ($counterPosts == $resultPosts->num_rows - 1) {
                                        echo '</div>';
                                    }
                                    $counterPosts++;
                                }

                            }
                            echo '</div>';
                            if($counter < $result->num_rows - 1)
                                echo '<hr>';
                            $counter++;
                        }
                    }
                ?>

            </div>
        </main>

        <!-- BLOG FOOTER -->
        <?php include_once "template/footer.php"; ?>
    </body>
</html>