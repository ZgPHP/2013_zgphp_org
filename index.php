<!DOCTYPE html>
<?php

ini_set('display_errors', 0);
require 'data.php';

?><html lang="en">
<head>
    <meta charset="utf-8">
    <title>ZgPHP meetup konferencija 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Prva PHP konferencija u regiji, 14.9.2013 u Zagrebu" />
	<meta name="keywords" content="php, zgphp, konferencija, web development, conference" />

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
            <?php if (isset($lecturer['twitter'])) { ?>
            <div class="twitter">
                <a target="_blank" href="http://www.twitter.com/<?= $lecturer['twitter'] ?>">@<?= $lecturer['twitter'] ?></a>
            </div>
            <?php } ?>

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

        <?php include __DIR__ . '/gen/data/attending-short.html'; ?>

        <div class="demo-text-box prl">
            <br/><br/><br/><br/>
            <p><a href="visitors" class="btn btn-large btn-block btn-info">Pogledajte tko sve dolazi</a></p>
        </div>
    </div>

    <div class="span4">
        <div class="tile tile-extra tile-prijava">
            <h3 class="tile-title">Prijavi se</h3>

            <p>Nakon dogovora s novim <a href="#sponzori">sponzorima</a> možemo vam ponuditi i novi set ulaznica. Prijavite se dok ih ima.</p>
            <a class="btn btn-primary btn-large btn-block" href="http://www.meetup.com/ZgPHP-meetup/events/132112512/">Prijave</a>
        </div>
    </div>
</div>

<h2 id="raspored">Raspored predavanja</h2>

<div class="row demo-tiles">
    <?php foreach ($arrTalks as $talk) { ?>
    <div class="span9">
        <div class="talk-info">
            <div class="talk-time"><?= $talk['time'] ?></div>
            <div class="talk-title"><?= $talk['person'] ?>: <strong><?= $talk['title'] ?></strong></div>
        </div>
        <div>
            <p><?= $talk['abstract'] ?></p>
        </div>
    </div>
    <?php } ?>

    <div class="span9">
        <div class="talk-info">
            <div class="talk-time">--:--</div>
            <div class="talk-title">Ovdje može biti tvoje ime: <strong>i naziv predavanja</strong></div>
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

<h2 id="zahvale">Zahvale</h2>

<div class="row">
    <?php foreach($arrThanks as $thanks)  { ?>
    <div class="thanks span4">
        <a target="_blank" href="<?= $thanks['url'] ?>">
            <img src="<?= $thanks['logo'] ?>" alt="<?= $thanks['title'] ?>" title="<?= $thanks['title'] ?>" class="tile-image">
        </a>
        <p><?= $thanks['text'] ?></p>
    </div>
    <?php } ?>
</div>

<div style="clear:both;"></div>

<h2 id="organizatori">Organizatori</h2>

<p>Konferenciju organizira ZgPHP meetup tim.</p>

<p>Ako vidite usput ove njuške, navratite i recite bok!</p>

<div class="organizers row demo-tiles">
    <?php foreach ($arrOrganizers as $organizer) { ?>
    <div class="span2">
        <div class="tile">
            <img src="<?= $organizer['img'] ?>" alt="<?= $organizer['name'] ?>" class="tile-image">

            <h3 class="tile-title"><?= $organizer['name'] ?></h3>
            <?php if (isset($organizer['twitter'])) { ?>
            <div class="twitter">
                <a target="_blank" href="http://www.twitter.com/<?= $organizer['twitter'] ?>">@<?= $organizer['twitter'] ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>

</div>
<!-- /container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="span7">
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
