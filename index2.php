<?php

$conferenceStart = strtotime('2013-09-14 09:00:00');

$now = strtotime(date('Y-m-d H:i:s'));

$diff = $conferenceStart - $now;

if ($diff > 0) {
    $seconds = $diff % 60;
    $diff -= $seconds;
    $diff /= 60;
    $minutes = $diff % 60;
    $diff -= $minutes;
    $diff /= 60;
    $hours = $diff % 24;
    $diff -= $hours;
    $diff /= 24;
    $days = $diff;

    $timer = sprintf('%02d', $days) . ':' . sprintf('%02d', $hours) . ':' . sprintf('%02d', $minutes) . ':' . sprintf(
            '%02d',
            $seconds
        );
}
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8"/>

    <!-- Website Title & Description -->
    <title>ZgPHP meetup konferencija 2013</title>
    <meta name="description" content="Hexic - Fully Responsive HTML5 Coming Soon Page"/>

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-touch-fullscreen" content="yes"/>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
    <link rel="shortcut icon" href="favicon.ico"/>

    <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
    <script>(function (a, b, c) {
            if (c in b && b[c]) {
                var d, e = a.location, f = /^(a|html)$/i;
                a.addEventListener("click", function (a) {
                    d = a.target;
                    while (!f.test(d.nodeName))d = d.parentNode;
                    "href"in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
                }, !1)
            }
        })(document, window.navigator, "standalone")</script>

    <!-- Included CSS Files -->
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="stylesheets/foundation.css"/>
    <link rel="stylesheet" href="stylesheets/normalize.css"/>
    <link rel="stylesheet" href="fonts/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/jquery.vegas.css"/>

    <!-- slimbox2 -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/slimbox2.js"></script>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen"/>

    <!-- tooltip -->

    <script>
        $(document).ready(function () {

            $('[rel=tooltip]').bind('mouseover',function () {


                if ($(this).hasClass('ajax')) {
                    var ajax = $(this).attr('ajax');

                    $.get(ajax,
                        function (theMessage) {
                            $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('fast');
                        });


                } else {

                    var theMessage = $(this).attr('content');
                    $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('fast');
                }

                $(this).bind('mousemove', function (e) {
                    $('div.tooltip').css({
                        'top':  e.pageY - ($('div.tooltip').height() / 2) - 5,
                        'left': e.pageX + 15
                    });
                });
            }).bind('mouseout', function () {
                    $('div.tooltip').fadeOut('fast', function () {
                        $(this).remove();
                    });
                });
        });

    </script>

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'/>

    <!-- Included JS Files -->
    <script src="javascripts/modernizr.foundation.js"></script>

    <!-- gmaps	-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        var zagreb = new google.maps.LatLng(45.807195, 15.954418);

        var MY_MAPTYPE_ID = 'eurograf';


        function initialize() {

            var featureOpts = [
                { "stylers": [
                    { "invert_lightness": true },
                    { "hue": "#0077ff" }
                ] }
            ];

            var mapOptions = {
                zoom:                  13,
                center:                zagreb,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                },
                mapTypeId:             MY_MAPTYPE_ID,
                scrollwheel:           false,
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            var marker = new google.maps.Marker({
                position: zagreb,
                map:      map,
                title:    'Hello World!'
            });


            var styledMapOptions = {
                name: 'Custom Style'
            };

            var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

            map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
        }


        google.maps.event.addDomListener(window, 'load', initialize);


    </script>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<!-- Loader -->
<div id="loading">
    <img src="images/loader.gif" alt="Website Loader"/>
</div>

<div class="navigation hide-for-mobile">
    <a href="#homepage" class="nav"><span class="nav-text">Home</span></a>
    <a href="#predavaci" class="nav"><span class="nav-text">Predavači</span></a>
    <a href="#posjetitelji" class="nav"><span class="nav-text">Posjetitelji</span></a>
    <a href="#tkodolazi" class="nav"><span class="nav-text">Tko sve dolazi?</span></a>
    <a href="#lokacija" class="nav"><span class="nav-text">Lokacija</span></a>
    <a href="#sponzori" class="nav"><span class="nav-text">Sponzori</span></a>
</div>

<div id="homepage">
    <div class="homepage-content">
        <!--<div class="twelve columns logo">
            <img src="images/logo.png" alt="Hexic - Fully Responsive HTML5 Coming Soon Page" />
        </div>-->
        <div class="twelve columns">
            <h1 class="homepage-title"><br/><span>ZgPHP</span> meetup<br/>konferencija 2013</h1>
        </div>
        <div class="twelve columns hide-for-small">

            <?php if ($diff > 0) { ?>
                <div class="counter-container">
                    <div id="counter"></div>
                    <div class="desc">
                        <div>Days</div>
                        <div>Hours</div>
                        <div>Minutes</div>
                        <div>Seconds</div>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="twelve columns">
            <p class="homepage-text">Bliži se jubilarna druga godišnjica ZgPHP meetupa. Za proslavu smo odlučili umjesto
                uobičajenog meetupa organizirati jednodnevnu PHP konferenciju koja će se održati 14. rujna 2013.</p>
        </div>
        <div class="twelve columns scroll-down">
            <a href="#subscribe"><img src="images/scroll-down.png" alt="Scroll Down"/></a>
        </div>
    </div>
</div>


<div class="content-container">

<div id="predavaci">
    <div class="box">
        <div class="content-content">
            <div class="twelve columns">
                <h1 class="content-title">Zakon! Tko ce sve predavati?</h1>
            </div>
            <div class="twelve columns">
                <p class="content-text">Već imamo najavljeno nekoliko zanimljivih predavača iz Hrvatske i regije,
                    ali kapaciteti nam nisu do kraja popunjeni. Ukoliko ste zainteresirani za predavanje na
                    konferenciji, javite nam se najkasnije do 25. kolovoza 2013. s vašim kontakt podacima, kratkom
                    biografijom i sažetkom predavanja. Predavačima koji dolaze izvan Zagreba nudimo pomoć u
                    financiranju puta i smještaja.</p>
            </div>
            <div class="twelve columns">
                <h2 class="content-title">Confirmani predavaci:</h2>
            </div>
            <div class="twelve columns">

                <p class="content-text">


                    <a href="https://twitter.com/bilicmaja" target="_blank">Maja Bilić</a>
                    <br/>
                    Zgode i nezgode žena u IT industriji
                    <br/> <br/>

                    <a href="https://twitter.com/antonioperic" target="_blank">Antonio Perić</a>
                    <br/>
                    Sylius
                    <br/> <br/>

                    <a href="https://twitter.com/miodrag42" target="_blank">Miodrag Stefanović</a>
                    <br/>
                    Arhitektura high performance PHP aplikacije
                    <br/> <br/>

                    <a href="https://twitter.com/tihomiropacic" target="_blank">Tihomir Opačić</a>
                    <br/>
                    Laravel 4 Package Development & Publishing
                    <br/> <br/>

                    <a href="https://twitter.com/ihabunek" target="_blank">Ivan Habunek</a>
                    <br/>
                    Travis CI
                    <br/> <br/>

                    <a href="https://twitter.com/vranac" target="_blank">Srdjan Vranac</a>
                    <br/>
                    Vagrant i mi
                    <br/> <br/>


                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>

                    <br/>


                </p>


            </div>

        </div>
    </div>
</div>
<div id="posjetitelji">
    <div class="box">
        <div class="content-content">
            <div class="twelve columns">
                <h1 class="content-title">Nisam predavac, ni firma nego posjetitelj. Koliko ce me to kostati?</h1>
            </div>
            <div class="twelve columns">
                <p class="content-text">To je najbolja stvar! Konferencija je besplatna za sve posjetitelje. Ipak,
                    napomenuli bi da je broj mjesta je ograničen što znači dvije stvari:</p>
            </div>
            <div class="twelve columns">
                <p class="content-text" style="margin: 5% 0 1%;">
                    <a href="http://www.meetup.com/ZgPHP-meetup/events/132112512/" class="submit-button">prijavite
                        se sto prije</a></p>
            </div>
            <div class="twelve columns">
                <ul class="content-text">
                    <li>ukoliko se pokaže da ne možete doći, otkažite svoju prijavu na vrijeme i omogućite drugima
                        da prisustvuju
                    </li>
                </ul>
                <p class="content-text">Također, zamolili bi i za dvije minute vašeg vremena. Pošaljite ovaj link
                    svojim prijateljima, shareajte ga na Twitteru i Facebooku, javite ga predavačima koje bi željeli
                    poslušati i skrenite pažnju šefovima koji bi voljeli sponzorirati.</p>
            </div>
        </div>
    </div>
</div>

<div id="tkodolazi">
    <div class="box">
        <div class="content-content">
            <div class="twelve columns">
                <h1 class="content-title">Tko sve dolazi?</h1>
            </div>
            <div class="twelve columns">
                <div class="person">
                    <a href="#" alt="Text Tooltip" rel="tooltip" content="<span>Mišel Mešnjak</span><br/>2013-06-10 17:02"><img src="img/ljakse.jpeg"/></a>
                </div>
                <div class="person">
                    <a href="#" alt="Text Tooltip" rel="tooltip" content="<span>Mišel Mešnjak</span><br/>2013-06-10 17:02"><img src="img/ljakse.jpeg"/></a>
                </div>
                <div class="person">
                    <a href="#" alt="Text Tooltip" rel="tooltip" content="<span>Mišel Mešnjak</span><br/>2013-06-10 17:02"><img src="img/ljakse.jpeg"/></a>
                </div>
                <div class="person">
                    <a href="#" alt="Text Tooltip" rel="tooltip" content="<span>Mišel Mešnjak</span><br/>2013-06-10 17:02"><img src="img/ljakse.jpeg"/></a>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="lokacija" class="ptop">
    <div class="box" id="map-canvas">

    </div>
</div>
<div id="sponzori">
    <div class="box">
        <div class="content-content">
            <div class="twelve columns">
                <h1 class="content-title">Zvuci dobro, kako se moze pomoci?</h1>
            </div>
            <div class="twelve columns">
                <p class="content-text">Pripremili smo sponzorski paket, za firme koje žele financijski pomoći u
                    organizaciji konferencije. <a href="http://zgphp.org/2013/07/zgphp-meetup-konferencija-2013/">Sponzorstvom</a>
                    pomažete u pokrivanju troškova dolaska predavača i kupovine hrane i pića za posjetitelje.
                    Zauzvrat nudimo mogućnost promoviranja firme ispred stotinjak developera. Pogledajte detalje
                    sponzorskog paketa i iskoristite priliku uhvatiti najbolje programere Zagreba i okolice.</p>
            </div>
            <?php

            $arrSponsors = array(
                array(
                    "url"  => "http://www.orangehilldev.com/",
                    "logo" => "logos/orangehill.png"
                ),
                array(
                    "url"  => "http://www.netgenlabs.com/cro",
                    "logo" => "logos/netgen-logo.jpg"
                ),
                array(
                    "url"  => "http://www.trikoder.hr/",
                    "logo" => "http://www.trikoder.hr/static/images/trikoder-logo.png"
                ),
                array(
                    "url"  => "http://www.istudio.hr/",
                    "logo" => "logos/istudio-logo.jpg"
                ),
                array(
                    "url"  => "http://www.locastic.hr/",
                    "logo" => "http://www.mybusinesscard.hr/media/profile/thumbs/locastic-logo-hr_400x450.png"
                ),
                array(
                    "url"  => "https://github.com/",
                    "logo" => "logos/github-logo.png"
                ),
                array(
                    "url"  => "http://www.plus.hr",
                    "logo" => "http://zgphp.org/wp-content/uploads/2012/11/plus_logo.jpg"
                ),
                array(
                    "url"  => "http://www.njuskalo.hr/",
                    "logo" => "http://www.njuskalo.hr/static/party/index.php_files/njuskalo-oglasnik-hr-logo.gif"
                ),
                array(
                    "url"  => "",
                    "logo" => ""
                ),

            );
            shuffle($arrSponsors);

            ?>
            <div class="twelve columns logotypes">

                <?php foreach ($arrSponsors as $sponsor) { ?>
                    <a href="<?php echo $sponsor["url"] ?>"><img src="<?php echo $sponsor["logo"] ?>" style="max-height: 120px;max-width: 300px; padding:20px"></a>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js"></script>

<!-- Initialize JS Plugins -->
<script src="javascripts/app.js"></script>
<script type="text/javascript" src="javascripts/jquery.easing.1.3.js"></script>


<script type="text/javascript">
    $(function () {
        $('a.nav').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            /*
             if you don't want to use the easing effects:
             $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
             }, 1000);
             */
            event.preventDefault();
        });
        $('.scroll-down a').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            /*
             if you don't want to use the easing effects:
             $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
             }, 1000);
             */
            event.preventDefault();
        });
    });
</script>

<script type="text/javascript" src="javascripts/jquery.vegas.js"></script>
<script type="text/javascript">
    $(function () {
        $.vegas('slideshow', {
            backgrounds: [
                { src: 'images/backgrounds/1.jpg', fade: 1500 },
                { src: 'images/backgrounds/2.jpg', fade: 1500 },
                { src: 'images/backgrounds/3.jpg', fade: 1500 },
                { src: 'images/backgrounds/4.jpg', fade: 1500 },
                { src: 'images/backgrounds/5.jpg', fade: 1500 }
            ],
            loading:     false
        })('overlay', {
            src:     'images/overlays/05.png',
            opacity: '0.8'
        });
    });
</script>

<script type="text/javascript" src="javascripts/jquery.countdown.js"></script>


<?php if ($diff > 0) { ?>

    <script type="text/javascript">
        $(function () {
            $('#counter').countdown({
                image:     'images/digits.png',
                startTime: '<?php echo $timer ?>'
            });
        });
    </script>
<?php } ?>

<script type="text/javascript">
    $(document).ready(function () {
        function checkWidth() {
            var windowSize = $(window).width();

            if (windowSize >= 700) {
                $('#homepage').css("height", $(window).height());
                $('#predavaci').css("height", $(window).height());
                $('#posjetitelji').css("height", $(window).height());
                $('#tkodolazi').css("height", $(window).height());
                $('#lokacija').css("height", $(window).height());
                $('#sponzori').css("height", $(window).height());
            }
        }

        // Execute on load
        checkWidth();
        // Bind event listener
        $(window).resize(checkWidth);
    });
</script>

<!-- Hook up the Loader -->
<script type="text/javascript">
    $(window).load(function () {
        $("#loading").fadeOut("1000", function () {
            // Animation complete
            $('#loading img').css("display", "none");
            $('#loading').css("display", "none");
            $('#loading').css("background", "none");
            $('#loading').css("width", "0");
            $('#loading').css("height", "0");
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        // validate signup form on keyup and submit
        var validator = $(".subscription-form").validate({
            rules:    {
                email: {
                    required: true,
                    email:    true
                },
            },
            messages: {
                email: {
                    required:  "Please enter a valid email address",
                    minlength: "Please enter a valid email address"
                },
            },
            // set this class to error-labels to indicate valid fields
            success:  function (label) {
                label.addClass("checked");
            }
        });
    });
</script>


</body>
</html>
