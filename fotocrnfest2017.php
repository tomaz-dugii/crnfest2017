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
            <h3 class="row-program-font">ČRNFEST 2017 | STANDUP SAŠO HRIBAR</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/STANDUP_SASO HRIBAR'); ?>
            </div>
        </div>
        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | ZGODBE ZA ODRASLE</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/ZGODBE ZA ODRASLE'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | DOGAJANJE V STAREM MESTNEM JEDRU ČRNOMLJA</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/DOGAJANJE V STAREM MESTNEM JEDRU ČRNOMLJA'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | BRO, MAGNIFICO, PERO LOVŠIN</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/BRO_MAGNIFICO_PERO_LOVSIN'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | INDIE | 2B, JARDIER</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/INDIE_2B_JARDIER'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | GLEDALIŠKA PREDSTAVA | HIŠA</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/Gledaliska predstava Hisa'); ?>
            </div>
        </div>


        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | OTROŠKI PROGRAM | BRINA</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/brina'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | BORIS KOBAL STANDUP</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/boris_kobal'); ?>
            </div>

        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | Tomaž Humar mlajši, KBŠ STAREŠINE</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/kbs_staresine_tomaz_humar'); ?>
            </div>

        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | Arching</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/Arching'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | LET 3 in DEMOLITION GROUP</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/demoliton_group_let_3'); ?>
            </div>
        </div>

        <div class="row text-center">
            <h3 class="row-program-font">ČRNFEST 2017 | Košarka 3x3</h3>
            <div class="col-md-10 col-md-push-1"><?php include_once('resources/UberGallery/resources/UberGallery.php');
                $gallery = UberGallery::init()->createGallery('images/crnfest2017/Kosarka3x3'); ?>
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
