<!DOCTYPE html>
<?php

ini_set('display_errors', 0);
require 'data.php';

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ZgPHP conference 2014</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Annual PHP conference in Zagreb, 2014 edition. Held in HGK, Nova cesta 7 on 2nd October 2014. Organized by nice people from ZgPHP user group."/>
    <meta name="keywords" content="php, zgphp, web development, conference"/>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css"/>
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

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <meta property="og:type" content="blog"/>
    <meta property="og:title" content="ZgPHP conference 2014"/>
    <meta property="og:description"
          content="Annual PHP conference in Zagreb, 2014 edition. Held in HGK, Nova cesta 7 on 2nd October 2014. Organized by nice people from ZgPHP user group."/>
    <meta property="og:url" content="http://2014.zgphp.org/"/>
    <meta property="og:site_name" content="ZgPHP conference 2014"/>
    <meta property="og:image" content="http://zgphp.org/wp-content/uploads/2013/02/zgphp_meetup_header.png"/>
</head>
<body>
<div class="container">
    <div class="demo-headline">
        <h1 class="demo-logo">
            <div class="logo"></div>
            ZgPHP conference 2014
            <small>October 2nd, 2014. @ HGK, Nova cesta 7</small>
        </h1>
        <h4>part of <a href="http://2014.webcampzg.org/">Week of WebCamp</a></h4>
        <h4>Three years ago, we started organizing Zagreb PHP user group meetings. <br>This is a way to say happy
            birthday and thanks to all members that have been a part of this awesome community.</h4>
    </div>

    <h2>We had a blast last year...</h2>

    <div class="row demo-tiles">
        <div class="span12">
            <p>The <a href="http://2013.zgphp.org/">2013</a> conference blew our expectations. We had it all: amazing
                speakers, generous sponsors, perfect venue, plenty of food and drinks and most importantly great bunch
                of developers and web aficionados. You can read about impressions from <a
                    href="http://phpsrbija.rs/utisci-sa-zgphp-meetup-konferencije-2013/">Tihomir</a>, <a
                    href="http://zlayer.net/blog/?p=307">Zlatko</a>, <a
                    href="http://www.mirosvrtan.me/blog/2013/10/zgphp-mini-conference-2013/">Miro</a>,
                <a href="http://robertbasic.com/blog/developer-conferences-in-croatia">Robert</a> and look at photos
                that were taken by <a
                    href="https://www.facebook.com/media/set/?set=a.593325934038614.1073741827.283755581662319&type=3">Neven</a>.
            </p>

            <p>Why not do it all again? Here is how you can become a part of this year's event.</p>
        </div>
    </div>

    <h2>Pick your role...</h2>

    <div class="row demo-tiles">
        <div class="span6">
            <div class="tile tile-extra">
                <img src="images/icons/Gift-Box@2x.png" alt="" class="tile-image">

                <h3 class="tile-title">Sponsor</h3>

                <p>Place roll up banner in the conference lobby, logo and links on conference
                    website and publications + mentions through social networks.</p>
                <a class="btn btn-danger btn-large btn-block" href="mailto:zgphpmeetup@gmail.com">Contact us for
                    details</a>
            </div>
        </div>
        <div class="span6">
            <div class="tile tile-extra">
                <img src="images/icons/Infinity-Loop@2x.png" alt="" class="tile-image">

                <h3 class="tile-title">Participate</h3>

                <p>Conference passes are free and are likely to go out fast. Subscribe to our mailing list and follow us
                    on twitter & facebook for updates.</p>

                <div>
                    <form
                        action="//zgphp.us6.list-manage.com/subscribe/post?u=3499d05fe9ad1751bcc52fad1&amp;id=3b184efa6e"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" novalidate>
                        <input type="email" value="" name="EMAIL" class="email form-controll" id="mce-EMAIL"
                               placeholder="email address" required style="margin-bottom: 0px">
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text"
                                                                               name="b_3499d05fe9ad1751bcc52fad1_3b184efa6e"
                                                                               tabindex="-1" value=""></div>
                        <input type="submit" value="Subscribe" name="subscribe" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h2 id="raspored">Schedule</h2>

    <div class="row">
        <?php foreach ($arrTalks as $talk) { ?>
            <div class="span9">
                <div class="talk-info">
                    <div class="talk-time"><?= $talk['time'] ?></div>
                    <div class="talk-title">
                        <?php if (!empty($talk['person'])) echo $talk['person'] . ": "; ?>
                        <strong><?= $talk['title'] ?></strong>
                    </div>
                </div>
                <div>
                    <p><?= $talk['abstract'] ?></p>
                    <?php if (isset($talk['slides'])) { ?>
                        <p><strong><a target="_blank" href="<?= $talk['slides'] ?>">Pogledaj prezentaciju</a></strong></p>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>


    <h2  style="margin-top: 50px;">Location/Venue</h2>

    <p>HGK - Hrvatska gospodarska komora, Nova cesta 7, 10000 Zageb</p>

    <p>Lecture hall is located at second floor, stairs and elevator access are right next to entry to Lidl grocery
        store.</p>

    <div id="mapdiv"></div>

    <h2 id="sponzori" style="margin-top: 50px;">Conference sponsors</h2>

    <p>This conference would not be possible without you. Thanks!</p>

    <div class="row demo-tiles">
        <?php foreach($arrSponsors as $sponsor){ ?>
            <div class="sponsor span4"><a target="_blank" href="<?php echo $sponsor['url'] ?>"><img src="<?php echo $sponsor['logo'] ?>" alt="<?php echo $sponsor['title'] ?>" /></a></div>
        <?php } ?>
    </div>

    <h2 id="organizatori">Organizers</h2>

    <p>If you see these faces, come up and say hi!</p>

    <div class="organizers row demo-tiles">
        <?php foreach ($arrOrganizers as $organizer) { ?>
            <div class="span2">
                <div class="tile">
                    <img src="<?= $organizer['img'] ?>" alt="<?= $organizer['name'] ?>" class="tile-image">

                    <h3 class="tile-title"><?= $organizer['name'] ?></h3>
                    <?php if (isset($organizer['twitter'])) { ?>
                        <div class="twitter">
                            <a target="_blank"
                               href="http://www.twitter.com/<?= $organizer['twitter'] ?>">@<?= $organizer['twitter'] ?></a>
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
                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F2014.zgphp.org">
                        <img src="images/share/facebook.png" title="Share on facebook" alt="Facebook"/>
                    </a>
                    <a target="_blank"
                       href="http://www.twitter.com/intent/tweet?url=http%3A%2F%2F2014.zgphp.org&text=Annual PHP conference in Zagreb, 2014 edition. Held in HGK, Nova cesta 7 on 2nd October 2014&hashtags=zgphp">
                        <img src="images/share/twitter.png" title="Share on twitter" alt="Twitter"/>
                    </a>
                </p>
            </div>

            <div class="span5">
                <div class="footer-banner">
                    <h3 class="footer-title">ZgPHP user group</h3>
                    <ul>
                        <li><a target="_blank" href="http://www.facebook.com/groups/109975399119270/">ZgPHP facebook
                                group</a></li>
                        <li><a target="_blank" href="http://twitter.com/zgphp">Follow us on Twitteru</a></li>
                        <li><a target="_blank" href="http://facebook.com/pages/ZgPHP-Meetups/283755581662319">Follow us
                                on Facebook</a></li>
                        <li><a target="_blank" href="http://zgphp.org/kalendar/">Calendar</a></li>
                        <li><a target="_blank" href="http://www.meetup.com/ZgPHP-meetup/">Never miss a meetup</a></li>
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
    $(document).ready(function () {
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
            .bindPopup("<strong>HGK - Hrvatska Gospodarska Komora</strong><br />Nova cesta 7, Zagreb<br>Venue entry from 2nd floor<br />Lift and stairs from Lidl entrance")
            .openPopup();
    });
</script>
</body>
</html>
