<!DOCTYPE html>
<?php

ini_set('display_errors', 0);
require 'data.php';

?><html lang="en">
<head>
    <meta charset="utf-8">
    <title>ZgPHP meetup konferencija 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

     <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
     <!--[if lte IE 8]>
         <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
     <![endif]-->

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Google analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-34545747-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <meta property="og:type" content="blog" />
    <meta property="og:title" content="Mini ZgPHP konferencija 2013" />
    <meta property="og:description" content="Druženja PHP developera iz regije" />
    <meta property="og:url" content="http://2013.zgphp.org/" />
    <meta property="og:site_name" content="ZgPHP Meetup" />
    <meta property="og:image" content="http://zgphp.org/wp-content/uploads/2013/02/zgphp_meetup_header.png" />
</head>
<body>
<div class="container">
<div class="demo-headline">
    <h1 class="demo-logo">
        <div class="logo"></div>
        ZgPHP meetup konferencija 2013
        <small>14. rujna 2013 @ HGK, Nova cesta 7</small>
    </h1>
    <h4>Bliži se jubilarna druga godišnjica ZgPHP meetupa.<br>Za proslavu, organiziramo jednodnevnu PHP konferenciju.</h4>
</div>

<h2>Lokacija</h2>

<div id="mapdiv"></div>

<h2 id="predavaci">Potvrđeni predavači</h2>

<div class="row demo-tiles">
<?php foreach ($arrLecturers as $lecturer) { ?>
    <div class="span4">
        <div class="tile">
            <img src="<?= $lecturer['img'] ?>" alt="<?= $lecturer['name'] ?>" class="tile-image">

            <h3 class="tile-title"><?= $lecturer['name'] ?></h3>

            <p><?= $lecturer['bio'] ?></p>
        </div>
    </div>
<?php } ?>

    <div class="span4">
        <div class="tile tile-extra">
            <img src="images/icons/Infinity-Loop@2x.png" alt="" class="tile-image">

            <h3 class="tile-title">Postani predavač na ZgPHP-u</h3>

            <p>Call for paper za konferenciju je otvoren do 28. kolovoza 2013. godine, a za redovita mjesečna okupljanja nema deadlinea!</p>
            <a class="btn btn-danger btn-large btn-block" href="mailto:zgphpmeetup@gmail.com">Prijavi predavanje</a>
        </div>

    </div>
</div>

<div class="row demo-tiles">
    <div class="span8">
        <h2>Sudionici i prijave</h2>

        <div class="demo-text-box prl">
            <p>Konferencija je besplatna za sve posjetitelje. Ipak, napomenuli bi da je broj mjesta je ograničen što znači da su prijave nužne. Ukoliko se pokaže da ne možete doći, otkažite svoju prijavu na vrijeme i omogućite drugima da prisustvuju.</p>
        </div>

        <?php foreach ($arr10visitors as $attendee) : ?>
            <img style="height: 50px; border: 1px solid #273747; float: left; margin: 0 3px 3px 0;"
                 src="<?php echo $attendee->member_photo->thumb_link ?>"
                 alt="<?php echo $attendee->member->name ?>"
                 title="<?php echo $attendee->member->name ?>">
        <?php endforeach ?>

        <div class="demo-text-box prl">
            <br/><br/><br/><br/>
            <p><a href="visitors" class="btn btn-large btn-block btn-info">Pogledajte tko sve dolazi</a></p>
        </div>
    </div>

    <div class="span4">
        <div class="tile tile-extra tile-prijava">
            <h3 class="tile-title">Prijavi se na listu čekanja</h3>

            <p>Nažalost, 80 besplatnih ulaznica je planulo u rekordnom roku. Trenutno pregovaramo sa novim sponzorima kako bi pokrili troškove za sve zainteresirane.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://www.meetup.com/ZgPHP-meetup/events/132112512/">Prijave</a>
        </div>

    </div>
</div>

<h2 id="raspored">Raspored predavanja</h2>
<div class="row demo-tiles">
    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Antonio Perić - Mažar: <strong>Sylius</strong></a>
            </div>
        </div>
        <div>
            <p>Predavanja na kojem će Antonio prezentirati mogućnosti Syliusa, trenutnog stanja projekta te neke buduće planove i očekivanja vezana za navedeno rješenje. Sylius je e-commerce rješenje izgrađeno na Symfony2 frameworku.</p>
        </div>
    </div>
    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Tihomir Opačić: <strong>Laravel 4 Package Development &amp; Publishing</strong></a>
            </div>
        </div>
        <div>
            <p>Uz <a href="http://getcomposer.org/">Composer</a> kao integralni dio Laravel 4 framework-a, konačno se pojavljuje forma u kojoj možemo kompleksne projekte razbiti na zasebne nezavisne cjeline (Laravel Packages) koje kasnije možemo vrlo lako upotrijebiti u bilo kojem projektu. Ovo podiže Code Reusability na potpuno novu razinu. Predavanje će se fokusirati na izradu jednog ovakvog paketa zaključno sa procesom objavljivanja paketa na github.com i packagist.org. Ukratko će opisati i Facades Laravel 4 feature, te kako kreairati Facade za novonastali package.</p>
        </div>
    </div>

    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Milan Popović: <strong>Redis i PHP</strong></a>
            </div>
        </div>
        <div>
            <p>Redis predstavlja vrlo moćno open source NoSQL rješenje. Predavanje će vas upoznati s osnovama Redisa kao i sa strukturama podataka koje podržava. Uz primjer jednostavne aplikacije, predstavit će se i paketi u PHP-u za rad sa Redisom.</p>
        </div>
    </div>

    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Maja Bilić: <strong>Zgode i nezgode žena u IT industriji</strong></a>
            </div>
        </div>
        <div>
            <p>Predavanje će pokušati dati pregled hrvatske i svjetske IT scene iz perspektive žene. Na primjerima iz vlastitog iskustva prikazat će na kakve lijepe i manje lijepe situacije može jedna žena naići u ovoj industriji, gdje je nam je mjesto u cijeloj priči te zašto smo ponekad bolja opcija od muškaraca.</p>
        </div>
    </div>

    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Srđan Vranac: <strong>Vagrant i Puppet, što će mi sad to?</strong></a>
            </div>
        </div>
        <div>
            <p>Prilikom rada na projektima svaki developer u timu može dodavati svoje librarye, ekstenzije i podesiti projekt kako mu paše. Problem nastaje kada je sve to potrebno ponoviti kod ostalih članova tima.
               Vagrant, jedan od mnogih alata za koje ste možda čuli ali niste imali prilike probati, služi pojednostavljanju podešavanja okruženja za razvoj i pružanje identičnog setupa svim članovim teama.
               U sklopu predavanja bit će objašnjeno zašto koristiti Vagrant te koje su mu prednosti i mane.</p>
        </div>
    </div>

    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Ivan Habunek: <strong>Travis CI - testiranje open source projekata</strong></a>
            </div>
        </div>
        <div>
            <p>Bez obzira na to da li ste zagovornik test-driven razvoja ili mrzitelj istog, većina se slaže da je testiranje koda korisan, ako ne i nužnan, dio razvojnog ciklusa. Ovo predavanje će pokazati kako koristiti Travis CI platformu kako bi testirali svoj PHP projekt pri svakom pushu na GitHub.</p>
        </div>
    </div>

    <div class="span9">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a class="btn btn-primary">--:--</a>
                <a class="btn btn-white">Ovdje može biti tvoje ime: <strong>i naziv predavanja</strong></a>
            </div>
        </div>
        <div>
            <p>Postani predavač na ZgPHP meetup konferenciji ili mjesečnim druženjima. Pošalji svoju prijavu na <code>zgphpmeetup (at) gmail (dot) com</code></a></p>
        </div>
    </div>

</div>

<h2 id="sponzori">Sponzori konferencije</h2>

<p>Hvala vam!</p>

<div class="row demo-tiles">
	<?php foreach($arrSponsors as $sponsor){ ?>
		<div class="sponsor span4"><a target="_blank" href="<?php echo $sponsor['url'] ?>"><img src="<?php echo $sponsor['logo'] ?>" alt="<?php echo $sponsor['title'] ?>" /></a></div>
	<?php } ?>
</div>

<div class="row demo-tiles">
    <div class="span4">
        <div class="tile tile-extra tile-sponzor">
            <img src="images/icons/Gift-Box@2x.png" alt="" class="tile-image">

            <h3 class="tile-title">Kako možemo pomoći?</h3>

            <p>Pripremili smo sponzorski paket, za firme koje žele financijski pomoći u organizaciji konferencije. Sponzorstvom pomažete u pokrivanju troškova dolaska predavača i kupovine hrane i pića za posjetitelje. Zauzvrat nudimo mogućnost promoviranja firme ispred stotinjak developera. Pogledajte detalje sponzorskog paketa i iskoristite priliku uhvatiti najbolje programere Zagreba i okolice.</p>
            <a class="btn btn-warning btn-large btn-block" href="http://zgphp.org/2013/07/zgphp-meetup-konferencija-2013/">Postani sponzor</a>
        </div>

    </div>
</div>

</div>
<!-- /container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="span7">
                <!-- Hoće li se Luka ljutiti ako ovu grozotu maknem iz footera? -->
                <!-- <p>
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2Fpages%2FZgPHP-Meetups%2F283755581662319&amp;width=498&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=114094372002228" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:498px; height:258px;" allowTransparency="true"></iframe>
                </p>-->
                <h2>Share</h2>
                <p>
                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F2013.zgphp.org">
                        <img src="images/share/facebook.png" title="Share on facebook" alt="Facebook" />
                    </a>
                    <a target="_blank" href="http://www.twitter.com/intent/tweet?url=http%3A%2F%2F2013.zgphp.org&text=Prva hrvatska PHP konferencija&hashtags=zgphp">
                        <img src="images/share/twitter.png" title="Share on twitter" alt="Twitter" />
                    </a>
                </p>
            </div>

            <div class="span5">
                <div class="footer-banner">
                    <h3 class="footer-title">ZgPHP meetup</h3>
                    <ul>
                        <li><a target="_blank" href="http://www.facebook.com/groups/109975399119270/">Facebook grupa ZgPHP meetup</a></li>
                        <li><a target="_blank" href="http://twitter.com/zgphp">Pratite ZgPHP na Twitteru</a></li>
                        <li><a target="_blank" href="http://facebook.com/pages/ZgPHP-Meetups/283755581662319">Pratite ZgPHP na Facebooku</a></li>
                        <li><a target="_blank" href="http://zgphp.org/kalendar/">Kalendar događanja</a></li>
                        <li><a target="_blank" href="http://www.meetup.com/ZgPHP-meetup/">Ne propustite niti jedan meetup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/flatui-checkbox.js"></script>
<script src="js/flatui-radio.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.stacktable.js"></script>
<script src="http://vjs.zencdn.net/c/video.js"></script>
<script src="js/application.js"></script>

<!-- The Map -->
<script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
<script>
    $(document).ready(function() {
        var lat = 45.80780295766612
        var lon = 15.954294204711914;
        var zoom = 17;

        var map = L.map('mapdiv', {
            center: [lat, lon],
            zoom: zoom,
            scrollWheelZoom: false
        })

        // Use Open Street Map
        var url = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var attrib = 'Map data © OpenStreetMap contributors';

        L.tileLayer(url, {
            maxZoom: 18,
            attribution: attrib
        }).addTo(map);

        L.marker([lat, lon])
          .addTo(map)
          .bindPopup("<strong>Hrvatska Gospodarska Komora</strong><br />Nova cesta 7 / drugi kat<br />(iznad Lidla)")
          .openPopup();
    });
</script>
</body>
</html>
