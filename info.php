<?php
$whitelist=array('navbar.php');
if(in_array('navbar.php', $whitelist))
    include_once("navbar.php")
?>
</div>
<div class="img-responsive under-menu-vzorec"></div>
<div class="container">
    <div class="container-fluid">
        <div class="row text-center">
            <h3 class="row-program-font">VSTOPNICE</h3><br/>
            <p class="font-normal-style">Nakup vstopnic bo možen eno uro pred začetkom dogotka ob vhodu v grajski atrij.
                V primeru predprodaje pa na info točki RIC Bela krajina.</p>
            <p class="font-normal-style">Prodaja vstopnic za koncert 19.8.2017 (Magnifica): sistem Eventim</p>
            <p class="font-normal-style"> V primeru dežja bomo nadomestno lokacijo sporočili na facebook strani in spletni strani festivala.</p>
            <h3 class="row-program-font">KONTAKT</h3><br/>
            <p class="font-normal-style">E-mail: <strong>info@klub-kbs.si</strong></p>
            <p class="font-normal-style">Jure Kuhar: <strong>040 136 457</strong></p>
            <p class="font-normal-style">Marko Simčič: <strong>040 753 405</strong></p>
            <h3 class="row-program-font">LOKACIJA</h3>
            <div class="responsive-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1396.4900221818716!2d15.1925028!3d45.5708399!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47645c7410a05aad%3A0x64d6f63a9f79f490!2sTrg+svobode+3%2C+8340+%C4%8Crnomelj!5e0!3m2!1ssl!2ssi!4v1500452825369"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <h3>ZEMLJEVID PRIZORIŠČA</h3>
            <img class="col-xs-12 col-sm-12 col-md-6 col-lg-6 " src="images/crnfest-prizorisce-2017-b1.png">
            <img class="col-xs-12 col-sm-12 col-md-6 col-lg-6" src="images/Crnfest-prizorisce-2017-a2.png">

        </div>
        <br/>
        <br/>
    </div>

</div>
<?php
$whitelist=array('footer.php');
if(in_array('footer.php', $whitelist))
    include_once("footer.php")
?>
