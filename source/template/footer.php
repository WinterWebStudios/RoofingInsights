<footer>
    <div class="footerNavBit">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <p>We expose the good, the bad and the ugly to endorse the roofing industry.</p>
                    <p>Roofing Insights was founded with a rebellious spirit and ambitious objective to become a leading reporter on the roofing industry, covering products, tools and installation practices as well as roofing news.</p>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!---->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6 col-xs-6">-->
<!--                    <ul>-->
<!--                        <li>Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                        <li>Sub Category Name</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
                <div class="col-6">
                    <div id="fb-root"></div>
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=152625181368';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <p><strong>Be friends with us!</strong></p>
                    <div class="socialButtons">
                        <div style="top:-6px;" class="fb-like" data-href="https://www.facebook.com/roofinginsights/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        <a href="https://twitter.com/roofinginsights" class="twitter-follow-button" data-show-count="true">Follow @RoofingInsights</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/116675746587935742736" data-rel="publisher"></div>
                    </div>
                </div>
                <div class="col-6 text-right align-text-bottom align-bottom">
                    <?php
                    $time = microtime();
                    $time = explode(' ', $time);
                    $time = $time[1] + $time[0];
                    $finish = $time;
                    $total_time = round(($finish - $start), 4);
                    echo 'Page generated in '.$total_time.' seconds.';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    Copyright Roofing Insights &copy; 2017-18, All rights reserved.
                </div>
                <div class="col-7 text-right">
                    <a href="contact.php">Contact Us</a> | <a href="viewpost.php?id=23">About Us</a>
                </div>
            </div>

        </div>
    </div>
</footer>