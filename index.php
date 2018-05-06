<?php include 'header.php';?>
<!-- banner -->
<div class="banner">
            <div id="BannerCarousels" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#BannerCarousels" data-slide-to="0" class="active"></li>
                    <li data-target="#BannerCarousels" data-slide-to="1"></li>
                    <li data-target="#BannerCarousels" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/banner1.jpg" class="img-responsive" alt="slide">
                        <div class="banner-content">
                            <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, veniam!</p>
                            <p class="animated fadeInUp"><a href="">Read more</a></p>
                        </div>
                    </div>
                    <div class="item  height-full"><img src="assets/img/banner2.jpg"  class="img-responsive" alt="slide">
                        <div class="banner-content">
                            <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, veniam!</p>
                            <p class="animated fadeInUp"><a href="">Read more</a></p>
                        </div>
                    </div>
                    <div class="item  height-full"><img src="assets/img/banner1.jpg"  class="img-responsive" alt="slide">
                        <div class="banner-content">
                            <p class="animated fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, veniam!</p>
                            <p class="animated fadeInUp"><a href="">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#BannerCarousels" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#BannerCarousels" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<?php include "projects.php"?>
<!-- reservation-information -->
<?php include "why-us.php" ?>
<?php include "value.php" ?>
<?php include "our-experts.php" ?>
<?php include "news.php" ?>
<?php include 'footer.php';?>
