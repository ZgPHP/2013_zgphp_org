<?php

require __DIR__ . '/settings.php';

// Read settings
$eventID = defined("EVENT_ID") ? EVENT_ID : null;
$apiKey = defined("API_KEY") ? API_KEY : null;
$gaAccount = defined("GA_ACCOUNT") ? GA_ACCOUNT : null;
$ignoreIDs = defined("IGNORE_MEMBERS") ? explode(',', IGNORE_MEMBERS) : array();
$ignoreIDs = array();

// Check settings
if (empty($eventID)) die("EVENT_ID not defined in settings.php.");
if (empty($apiKey)) die("API_KEY not defined in settings.php.");

// Create a stream to define character encoding
$opts = array('http' => array('header' => 'Accept-Charset: utf-8'));
$context = stream_context_create($opts);

// Build URLs
$baseURL = "http://api.meetup.com";
$eventURL = $baseURL . "/2/event/$eventID?key=$apiKey";
$rsvpURL = $baseURL . "/2/rsvps?event_id=$eventID&key=$apiKey&order=name";

// Fetch data
$eventJSON = file_get_contents($eventURL, false, $context);
$rsvpsJSON = file_get_contents($rsvpURL, false, $context);

// Decode (amazing, no error checking whatsoever!)
$event = json_decode($eventJSON);
$rsvps = json_decode($rsvpsJSON);

?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>List of attendees for <?= $event->name ?> | ZgPHP Meetup    </title>
    <meta property="fb:admins" content="500311732" />
    <meta property="fb:app_id" content="572203872790464"/>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Izvlačenje <?= $event->name ?> nagrada" />
    <meta property="og:url" content="http://zgphp.org/raffle/" />
    <meta property="og:description" content="<?= strip_tags($event->description) ?>" />
    <meta property="og:site_name" content="ZgPHP Meetup" />
    <meta property="og:image" content="http://zgphp.org/wp-content/uploads/2013/02/zgphp_meetup_header.png" />
    <link href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/superhero/bootstrap.min.css" rel="stylesheet">
    <link href="draw.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="draw.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=572203872790464";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	
		
<div class="wrapper">
    <div class="jumbotron">
        <h1><?= $event->name ?></h1>
        <p class="lead">Zagreb, September 14th</p>
    </div>
    
		<div class="social">
			Or at least tell everyone else about us! &nbsp;&nbsp;&nbsp;
			<div class="fb-like" data-href="http://2013.zgphp.org/visitors/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="false"></div>
			<div class="b">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="webcampzg">Tweet</a>
			</div>
		</div>
		

    <br/><br/><br/><br/>
	<a href="<?= $event->event_url ?>" class="button">Join us</a>
    <br/><br/><br/>
    <p class="lead">Who's coming?</p>
    <br/><br/>
    <div class="attendees">
    <?php foreach ($rsvps->results as $attendee) { ?>
        <?php
       //var_dump($attendee);
            // Filter out organisers
            if ($attendee->response !== 'yes') {
                continue;
            }
        ?>
        <div class="attendee">
            <div class="thumb">
            <img  src="<?= $attendee->member_photo->thumb_link ?>" />
            </div>
            <div class="name">
            <?= $attendee->member->name ?><br />
            </div>
            
            
        </div>
    <?php } ?>
    </div>
    <div class="clearboth"></div>
	<br/><br/><br/>
    <div class="jumbotron">
        <p class="lead">Waiting list</p>
    </div>    
    
    <div class="attendees">
    <?php foreach ($rsvps->results as $attendee) { ?>
        <?php
       //var_dump($attendee);
            // Filter out organisers
            if ($attendee->response !== 'waitlist') {
                continue;
            }
        ?>
        <div class="attendee">
            <div class="thumb">
            <img  src="<?= $attendee->member_photo->thumb_link ?>" />
            </div>
            <div class="name">
            <?= $attendee->member->name ?><br />
            </div>
            
            
        </div>
    <?php } ?>
    </div>
    <div class="clearboth"></div>
    
    <br/><br/><br/><br/>
	<a href="<?= $event->event_url ?>" class="button">Join us</a>

    <br/><br/><br/><br/>
    
		<div class="social">
			Or at least tell everyone else about us! &nbsp;&nbsp;&nbsp;
			<div class="fb-like" data-href="http://2013.zgphp.org/visitors/" data-width="450" data-layout="button_count" data-show-faces="true" data-send="false"></div>
			<div class="b">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="webcampzg">Tweet</a>
			</div>
		</div>

    <hr />
    
    		

</div>

<?php if (!empty($gaAccount)) { ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?= $gaAccount ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php } ?>

</body>
</html>
