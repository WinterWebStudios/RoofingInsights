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
    <script type="text/javascript" src="js/youtubeLoader.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

<!-- HEADER NAV -->
<?php include_once "template/header.php";?>
<main>
    <!-- HEADER -->
    <div class="container">

        <div class="row">
            <div class="col-sm-9">
                <h1 class="display-4">Contact Us</h1>
                <form method="post" action="sendEmail.php">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <input type="email" name="tEmail" class="form-control" id="exampleFormControlInput1" placeholder="YourEmail@example.com">
                            </div>
                            <div class="col">
                                <input type="text" name="tName" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="tMessage" id="exampleFormControlTextarea1" rows="8" placeholder="Your message..."></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lf8hkAUAAAAAOFo_Nqzx8Jv9HSPCzQirSwDQVu4"></div>
                    <button type="submit" id="contactButton" class="btn btn-primary">Submit Message</button>
                </form>
                <hr>
                <h1 class="display-4">Other ways to get in touch</h1>
                <div class="row">
                    <div class="col">
                        Come Visit our office:<br>
                        <a href="https://www.google.com/maps/dir/45.0061094,-93.279416/2400+N+2nd+St+%23202,+Minneapolis,+MN+55411/@45.0050126,-93.28093,18z/am=t/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x52b3326953e168fb:0xb3aa08cbf326b2f7!2m2!1d-93.2794156!2d45.00393">2400 N 2nd St Suite #202,<br>Minneapolis, MN 55411</a>
                    </div>
                    <div class="col">
                        Call us: <a href="tel:6125584881">612-558-4881</a>
                    </div>
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
