<?php

require __DIR__ . '/settings.php';

echo "Generating\n";

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
$rsvpsJSON = file_get_contents($rsvpURL, false, $context);
if ($rsvpsJSON === false) {
    die("Failed loading $rsvpsURL");
}

// Decode
$rsvps = json_decode($rsvpsJSON);
if ($rsvps === false) {
    var_dump($rsvps);
    die ("Failed decoding data.");
}

$attending = array();
$waitlist = array();

foreach($rsvps->results as $rsvp) {

    // Skip those with no photo
    if (!isset($rsvp->member_photo)) {
        continue;
    }

    $thumb = $rsvp->member_photo->thumb_link;
    $name = $rsvp->member->name;

    $html = <<<ENDHTML
    <img class="meetup-thumb" src="$thumb" alt="$name" title="$name">
ENDHTML;

    if ($rsvp->response === 'yes') {
        $attending[] = $html;
    } elseif ($rsvp->response === 'waitlist') {
        $waitlist[] = $html;
    }
}

shuffle($attending);
shuffle($waitlist);

$attendingShort = array_slice($attending,0,8);

$attending = implode("\n", $attending);
$attendingShort = implode("\n", $attendingShort);
$waitlist = implode("\n", $waitlist);

$pathAttending = __DIR__ . '/data/attending.html';
$pathAttendingShort = __DIR__ . '/data/attending-short.html';
$pathWaitlist = __DIR__ . '/data/waitlist.html';

$result1 = file_put_contents($pathAttending, $attending);
$result2 = file_put_contents($pathAttendingShort, $attendingShort);
$result3 = file_put_contents($pathWaitlist, $waitlist);

echo "Saved to $pathAttending: $result1\n";
echo "Saved to $pathAttendingShort: $result2\n";
echo "Saved to $pathWaitlist: $result3\n";
