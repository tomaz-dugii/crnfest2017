<?php
$whitelist = array('navbar.php');
if (in_array('navbar.php', $whitelist))
    include_once("navbar.php")
?>

</div>
<div class="img-responsive under-menu-vzorec"></div>
<div class="container">

    <div class="container-fluid">

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 </h3>
            <a href="index.php?page=fotocrnfest2017"><img
                        class="col-xs-6  col-xs-push-3 col-sm-6 col-sm-push-3 col-md-6  col-md-push-6col-lg-6"
                        src="images/crnfest2017/crnfest2017_banner.jpg"></a>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 PREPARTY</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017_preparty'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2016</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2016'); ?>
            </div>

        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2015</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2015'); ?>
            </div>

        </div>


        <br/>
    </div>

</div>
<?php
$whitelist = array('footer.php');
if (in_array('footer.php', $whitelist))
    include_once("footer.php")
?>
