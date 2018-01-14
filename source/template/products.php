<div class="container">
    <h2 class="display-4">Our product picks</h2>
    <div class="row">
<!--        <div class="col-sm-1 hidden-xs">-->
<!--            <img class="sliderArrow reverse" src="imgs/white-arrow.png">-->
<!--        </div>-->

        <?php
        $resultAmazon = $connection->query("SELECT * FROM amazon ORDER BY RAND() LIMIT 5");
        while($rowAmazon = $resultAmazon->fetch_array())
        {
            echo '<div class="col-sm-2">';
            echo '<div class="amazonProduct">';
            echo $rowAmazon['image'];
            echo $rowAmazon['text'];
            echo '</div>';
            echo '</div>';
        }

        ?>

<!--        <div class="col-sm-1">-->
<!--            <img class="sliderArrow" src="imgs/white-arrow.png">-->
<!--        </div>-->
    </div>
</div>