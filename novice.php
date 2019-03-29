<?php
$whitelist=array('navbar.php');
if(in_array('navbar.php', $whitelist))
    include_once("navbar.php");
?>

    </div>
    <div class="img-responsive under-menu-vzorec"></div>
    <div class="container">
    <div class="container-fluid">
<?php
if ($_GET["page"] == "novice" and !isset($_GET["novica"])) {
    ?>
    <div class="row text-center">
        <h2>NOVICE</h2>
    </div>
    <div class="row">
        <ul class="list-group col-xs-push-1 col-xs-10 col-sm-push-2 col-sm-8 col-md-push-2 col-md-8 col-lg-push-2 col-lg-8">
            <a class="link list-group-item row-program-font" href="index.php?page=novice&novica=3">Jubilejni Črnfest v
                polnem zagonu</a></li>
            <a class="link list-group-item row-program-font" href="index.php?page=novice&novica=2">[OBVESTILO] StandUp
                Boris Kobal</a></li>
            <a class="link list-group-item row-program-font" href="index.php?page=novice&novica=1">ČRNFEST
                OŽIVEL ČRNOMALJSKI GRAJSKI ATRIJ</a></li>

        </ul>
    </div>

    </div>

    </div>
    <?php
} else if ($_GET["novica"] == "1") {
    ?>
    <div class="row text-center">
        <h2>ČRNFEST OŽIVEL ČRNOMALJSKI GRAJSKI ATRIJ</h2>
    </div>
    <div class="row">
        <div class=" col-md-push-1 col-md-10 col-lg-push-1 col-lg-10">
            <p class="font-normal-style">
                Staro mestno jedro Črnomlja je včeraj zvečer oživelo ob zvokih skupin <strong>LET3 in Demolition Group,
                    ki sta
                    festival tudi odprli</strong> in obiskovalce zopet navdušili. Težko pričakovani Črnfest se je sicer
                pričel že čez
                dan, ko se je odvijal turnir ulične košarke. Večerni spektakel, ki je sledil turnirju, pa predstavlja
                zgolj
                <strong>začetek dvotedenskega rajanja, ki upravičeno nosi slogan »dobro za vse«.</strong>
            </p>
            <p class="font-normal-style">
                Festival dobre glasbe, gledališča, smeha in otroškega rajanja nam bo do <strong>26. avgusta ponujal
                    raznolik nabor
                    dejavnosti.</strong> Od številnih športnih aktivnosti, predstav in delavnic za otroke, stand-up
                nastopov, predavanj,
                kulinaričnega večera, KBŠ gledališke predstave do razstav. Organizatorji – Klub belokranjskih študentov,
                Mladinski center BIT in Mladinski kulturni klub Bele krajine – letos pričakujejo okoli 7000 obiskovalcev
                in
                prepričani so, da bo letošnji Črnfest – 10. po vrsti – najboljši do sedaj.
            </p>
            <p class="font-normal-style">
                V sklopu večernih dogodkov nas ta teden v ponedeljek čaka večer organiziran za KBŠ starešine, in sicer
                bo
                Tomaž Humar mlajši predstavil svojo pot s kolesom po svetu. V torek nas bo v kulturnem domu nasmejal
                Boris
                Kobal, v sredo pa se bodo zabavali otroci in starši. V atriju bo namreč glasbeno-lutkovna predstava
                Brina,
                ki je ustvarjena po stari ljudski koroški pripovedki O miški, ki si je trebušček raztrgala. Težko
                pričakovano avtorsko stvaritev belokranjske ustvarjalke Nastasje Schweiger Hiša bo Gledališka skupina
                KBŠ
                uprizorila v četrtek, 17. avgusta, v Kulturnem domu Črnomelj. V petek pa nas bo pred glavnim dogodkom
                Črnfesta, ki bo v soboto, 19. avgusta, v grajskem atriju ogrela indie glasba, in sicer domačini 2B ter
                skupina Jardier. <strong>Ne spreglejte, po glavnem dogodku nas čaka še pester teden dogajanj</strong>.
            </p>
            <p class="font-normal-style">Vabljeni</p>
        </div>
    </div>

    </div>

    </div>

    <?php
} else if ($_GET["novica"] == "2") {
    ?>
    <div class="row text-center">
        <h2>[OBVESTILO] StandUp Boris Kobal</h2>
    </div>
    <div class="row">
        <div class=" col-md-push-1 col-md-10 col-lg-push-1 col-lg-10">
            <p class="font-normal-style">
                Opazili smo, da je bila preko Radia 1 današnja predstava oglaševana z manjšo napako.
                ❕❗Obveščamo vas, da bo Boris Kobal v kulturnem domu danes nastopil ob 20. uri❗❕
                Prodaja vstopnic za stand-up pa se začne ob 18.30
            </p>

            <p class="font-normal-style">Vabljeni</p>
        </div>
    </div>

    </div>

    </div>

    <?php
} else if ($_GET["novica"] == "3") {
    ?>
    <div class="row text-center">
        <h2>Jubilejni Črnfest v
            polnem zagonu</h2>
    </div>
    <div class="row">
        <div class=" col-md-push-1 col-md-10 col-lg-push-1 col-lg-10">
            <p class="font-normal-style">
                Festival glasbe, smeha, športa, gledališča in otroškega rajanja je v polnem zagonu. Po spektakularnem
                začetku s skupinama Demolition Group in LET3 se je Črnfest <strong>nadaljeval v stilu svojega slogana – »Dobro
                    za vse«.</strong>
            </p>
            <p class="font-normal-style">
                V ponedeljek je v grajskem atriju svoje kolesarsko popotovanje po svetu predstavil Tomaž Humar mlajši,
                sledil pa je kviz o Črnfestu za starešine Kluba belokranjskih študentov. V torek je obiskovalce nasmejal
                stand-up komik Boris Kobal, na odru pa sta se mu pridružila tudi Matic Kokošar in Dušan Tomić. Črnfest
                ni niti najmlajših obiskovalcev pustil ravnodušnih. V sredo so si namreč lahko ogledali glasbeno
                lutkovno predstavo po stari ljudski koroški pripovedki O miški, ki si je trebušček raztrgala. Otroci so
                tako miški pomagali najti vse sestavine, da si je zakrpala trebušček. Včeraj pa je obiskovalce navdušila
                dolgo pričakovana predstava Gledališke skupine KBŠ, ki je zaigrala avtorsko igro Hiša, nastalo pod
                peresom nadobudne pisateljice Nastasje Schweiger.
            </p>
            <p class="font-normal-style">
                Po tednu pestrega dogajanja vas vabimo v še bolj pestro nadaljevanje. <strong>Že danes bo v grajskem atriju
                    ogrevanje za glavni dogodek v soboto.</strong> Zvečer bo namreč koncert <strong>domačinov 2B in odličnih Jardier.</strong> V
                soboto pa bo zaradi pestrega celodnevnega dogajanja <strong>zaprto staro mestno jedro.</strong> Po športnih aktivnostih
                skozi dan in barvitih dogodivščin za otroke bo sledil glavni dogodek Črnfesta – <strong>koncert skupin BRO,
                Magnifica ter Pera Lovšina s Španskimi borci. Ne bo nas zmotila niti napoved dežja, saj nas bo skrbno
                    varoval šotor.</strong>
            </p>
            <p class="font-normal-style">
                Ne zamudite današnjega večera z indie glasbo in jutrišnjega dogajanja v starem mestnem jedru. <strong>Dobra
                    zabava je zagotovljena za vse!</strong>
            </p>
        </div>
    </div>

    </div>

    </div>

    <?php
}
?>


<?php
$whitelist=array('footer.php');
if(in_array('footer.php', $whitelist))
    include_once("footer.php")
?>