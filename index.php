<?php include 'header.php';?>




<!-- banner -->
<div class="banner">
<!--    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">-->
<!--    <div class="welcome-message">-->
<!--        <div class="wrap-info">-->
<!--            <div class="information">-->
<!--                <h1  class="animated fadeInDown">Best hotel in Dubai</h1>-->
<!--                <p class="animated fadeInUp">Most luxurious hotel of asia with the royal treatments and excellent customer service.</p>                -->
<!--            </div>-->
<!--            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>-->
<!--        </div>-->
<!--    </div>-->
    <div class="row">
        <div class="col-sm-12">
            <!-- RoomCarousel -->
            <div id="FoodCarousels" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#FoodCarousels" data-slide-to="0" class="active"></li>
                    <li data-target="#FoodCarousels" data-slide-to="1"></li>
                    <li data-target="#FoodCarousels" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousels" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousels" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->

<!-- reservation-information -->
<?php include "why-us.php" ?>
<?php include "value.php" ?>
<?php include "our-experts.php" ?>
<?php include "news.php" ?>
<?php include 'footer.php';?>
