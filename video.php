<?php
$whitelist=array('navbar.php');
if(in_array('navbar.php', $whitelist))
    include_once("navbar.php")
?>

</div>
<div class="img-responsive under-menu-vzorec"></div>
<div class="container">
    <div class=" container-fluid">
        <div class="row">
            <div class="responsive-video">
                <iframe src="https://www.youtube.com/embed/nQhxDXnK_44?rel=0"
                        frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>
<?php
$whitelist=array('footer.php');
if(in_array('footer.php', $whitelist))
    include_once("footer.php")
?>
