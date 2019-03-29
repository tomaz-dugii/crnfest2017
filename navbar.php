<nav class="navbar navbar-inverse navbar-fixed-top  ">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-------LOGO----------->
        <a href="index.php" class="logo-a" >
            <img src="images/crnfest2017_logo_menu.png"  class="logo"  alt="ČRNFEST">
        </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav">
            <li class="<?php if ($_GET["page"] == "program") echo "active"; ?>"><a
                        href="index.php?page=program" class="row-navbar-font ">PROGRAM</a></li>
            <li class="<?php if ($_GET["page"] == "novice") echo "active"; ?>"><a href="index.php?page=novice" class="row-navbar-font">NOVICE</a>
            </li>
            <li class="<?php if ($_GET["page"] == "video") echo "active"; ?> "><a href="index.php?page=video" class="row-navbar-font">VIDEO</a>
            </li>
            <li class="<?php if ($_GET["page"] == "foto") echo "active"; ?>"><a href="index.php?page=foto" class="row-navbar-font">FOTO</a>
            </li>
            <li class="<?php if ($_GET["page"] == "info") echo "active"; ?>"><a href="index.php?page=info" class="row-navbar-font">INFO</a>
            </li>
            <li class="<?php if ($_GET["page"] == "pokrovitelji") echo "active"; ?>"><a href="index.php?page=pokrovitelji" class="row-navbar-font">POKROVITELJI</a>
            </li>
        </ul>
    </div>
</nav>
