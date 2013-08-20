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

?>
