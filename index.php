<!DOCTYPE html>
<html lang="en">
<head>
    <title>Črnfest</title>
    <meta charset="utf-8">
    <meta name="description" content="Festival dobre glasbe, gledališča, smeha in otroškega rajanja vsakoletno meseca avgusta gosti črnomaljski grajski atrij in staro mestno jedro Črnomlja. Na odru se znajdejo številni priznani gosti, ki na različne načine razvedrijo vaš vsak dan."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    if (!isset($_GET["page"])) {
        echo "<title>Črnfest</title>";
    } else if ($_GET["page"] == "program") {
        echo "<title>Črnfest|PROGRAM</title>";
    echo "<meta name='description' content='- Dobro za vse! -'/>";

    } else if ($_GET["page"] == "video") {
        echo "<title>Črnfest|VIDEO</title>";
        echo "<meta name='description' content='Uradni aftermovie festivala.'/>";
    } else if ($_GET["page"] == "foto") {
        echo "<title>Črnfest|FOTO</title>";
    } else if ($_GET["page"] == "fotocrnfest2017") {
        echo "<title>Črnfest|2017</title>";
    } else if ($_GET["page"] == "info") {
        echo "<title>Črnfest|INFO</title>";
    } else if ($_GET["page"] == "pokrovitelji") {
        echo "<title>Črnfest|POKROVITELJI</title>";
    } else if ($_GET["page"] == "detailprogram") {
        echo "<title>Črnfest|PODROBEN PROGRAM</title>";
    }
    ?>



    <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!---CUSTOM CSS CODE----->
    <?php if (!isset($_GET["page"])) {
        echo "<link rel='stylesheet' href='resources/css/homepagecss.css'>";
    } else
        echo "<link rel=\"stylesheet\" href=\"resources/css/mainstyle.css\">";
    ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="resources/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="resources/assets/js/jquery.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.js"></script>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://slideshow.triptracker.net/slide.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!---------FAVICON------->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon.ico//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon.ico//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon.ico//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon.ico//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon.ico//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon.ico//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon.ico//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon.ico//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon.ico//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico//favicon-16x16.png">
    <link rel="manifest" href="images/favicon.ico//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!---IMAGE FOR SOCIAL SHARING----->
    <meta property="og:site_name" content="ČRNFEST"/>
    <meta property="og:title" content="Črnfest 2017"/>
    <meta property="og:description" content="Črnfest dobro za vse!"/>
    <meta property="og:url" content="http://crnfest.si/">
    <meta property="og:image" content="http://crnfest.si/images/crnfest2017_logo_menu.png"/>


    <link rel="stylesheet" type="text/css" href="resources/UberGallery/resources/UberGallery.css" />
    <link rel="stylesheet" type="text/css" href="resources/UberGallery/resources/colorbox/3/colorbox.css" />
    <script type="text/javascript" src="://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/UberGallery/resources/colorbox/jquery.colorbox.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
        });
    </script>


</head>
<body>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-34090128-2', 'auto');
    ga('send', 'pageview');

</script>
<div class="container">

    <?php
    $whitelist=array('program','video','foto','info','novice','pokrovitelji','detailprogram','fotocrnfest2017');

    if (isset($_GET["page"]) && in_array($_GET["page"],$whitelist)) {
        include($_GET['page'] . '.php');
        include_once("footer.php");
    }else{
        include_once ("homepage.php");
    }
    /* else if ($_GET["page"] == "video") {
        include_once("video.php");
    } else if ($_GET["page"] == "foto") {
        include_once("foto.php");
    } else if ($_GET["page"] == "fotocrnfest2017") {
        include_once("fotocrnfest2017.php");
    } else if ($_GET["page"] == "info") {
        include_once("info.php");
    } else if ($_GET["page"] == "novice") {
        include_once("novice.php");
    } else if ($_GET["page"] == "pokrovitelji") {
        include_once("pokrovitelji.php");
    } else if ($_GET["page"] == "detailprogram") {
        include_once("detailprogram.php");
    }*/
    ?>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="resources/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>