<?php

require 'logic.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ZgPHP meetup konferencija 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.ico">

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
<meta property="og:title" content="Mini ZgPHP konferencija 2013 posjetitelji" />
<meta property="og:description" content="Druženja PHP developera iz regije" />
<meta property="og:url" content="http://2013.zgphp.org/visitors/" />
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
        <h4>Bliži se jubilarna druga godišnjica ZgPHP meetupa.<br>Za proslavu, organiziramo jednodnevnu PHP
            konferenciju.</h4>
    </div>

    <h2>Tko sve dolazi?</h2>

    <div class="row demo-tiles">
        <div class="span8">
            <?php foreach ($rsvps->results as $attendee) : ?>
                <?php
                    if ($attendee->response !== 'yes') continue;
                    if (!isset($attendee->member_photo)) continue;
                ?>
                <img style="height: 50px; border: 1px solid #273747; float: left; margin: 0 3px 3px 0;"
                     src="<?php echo $attendee->member_photo->thumb_link ?>"
                     alt="<?php echo $attendee->member->name ?>"
                     title="<?php echo $attendee->member->name ?>">
            <?php endforeach ?>
        </div>

        <div class="span4">
            <div class="tile tile-extra">
                <img src="../images/icons/Book@2x.png" alt="" class="tile-image">

                <h3 class="tile-title">Prijavi se na listu čekanja</h3>

                <p>Nažalost, 80 besplatnih ulaznica je planulo u rekordnom roku. Trenutno pregovaramo sa novim
                    sponzorima kako bi pokrili troškove za sve zainteresirane.</p>
                <a class="btn btn-primary btn-large btn-block"
                   href="http://www.meetup.com/ZgPHP-meetup/events/132112512/">Prijave</a>
            </div>

        </div>
    </div>

    <div class="row demo-tiles">
        <div class="span4">
            <div class="tile tile-extra tile-prijava">
                <h3 class="tile-title">Javite sponzorima!</h3>

                <p>Više sponzora omogućit će više ulaznica kako bi mogli ugostiti sve naše prijatelje. Pomozite nam predstaviti konferenciju sponzorima. Pošaljite im link.</p>
                <a class="btn btn-warning btn-large btn-block"
                   href="http://zgphp.org/2013/07/zgphp-meetup-konferencija-2013/">Link za sponzore</a>
            </div>

        </div>

        <div class="span8">
            <h2>Lista čekanja :(</h2>
            <?php foreach ($rsvps->results as $attendee) : ?>
                <?php
                    if ($attendee->response !== 'waitlist') continue;
                    if (!isset($attendee->member_photo)) continue;
                ?>
                <img style="height: 50px; border: 1px solid #273747; float: left; margin: 0 5px 5px 0;"
                     src="<?php echo $attendee->member_photo->thumb_link ?>"
                     alt="<?php echo $attendee->member->name ?>"
                     title="<?php echo $attendee->member->name ?>">
            <?php endforeach ?>
        </div>

    </div>

</div>
<!-- /container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="span7">
                <p>
                    <iframe
                        src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2Fpages%2FZgPHP-Meetups%2F283755581662319&amp;width=498&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=114094372002228"
                        scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:498px; height:258px;"
                        allowTransparency="true"></iframe>
                </p>

            </div>
            <!-- /span8 -->

            <div class="span5">
                <div class="footer-banner">
                    <h3 class="footer-title">ZgPHP meetup</h3>
                    <ul>
                        <li><a href="http://www.facebook.com/groups/109975399119270/">Facebook grupa ZgPHP meetup</a>
                        </li>
                        <li><a href="http://twitter.com/zgphp">Pratite ZgPHP na Twitteru</a></li>
                        <li><a href="http://facebook.com/pages/ZgPHP-Meetups/283755581662319">Pratite ZgPHP na
                                Facebooku</a></li>
                        <li><a href="http://zgphp.org/kalendar/">Kalendar događanja</a></li>
                        <li><a href="http://www.meetup.com/ZgPHP-meetup/">Ne propustite niti jedan meetup</a></li>
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
</body>
</html>
