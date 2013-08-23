<?php

// Required for fetching data from meetup.com
require 'visitors/logic.php';

// **********************************************
// *** Lecturers                              ***
// **********************************************

$arrLecturers = array(
    array(
        "name" => "Antonio Perić - Mažar",
        "img" => "images/predavaci/peric.png",
        "twitter"=> "antonioperic",
        "bio" => "web developer koji se specijalizirao za projektiranje i razvoj web aplikacija po mjeri korisnika. Zadnjih nekoliko godina za razvoj web aplikacija koristi uglavnom Symfony2 framework.",
    ),
    array(
        "name" => "Tihomir Opačić",
        "img" => "images/predavaci/opacic.png",
        "twitter" => "tihomiropacic",
        "bio" => "bavi se PHP-om duže od 10 godina. Veliki je poklonik nove renesanse PHP-a, prvenstveno kroz Laravel framework i community, kao modernog i lijepog programskog jezika.",
    ),
    array(
        "name" => "Milan Popović",
        "img" => "images/predavaci/popovic.png",
        "bio" => "zainteresiran je za objektno orjentirano programiranje, primjenu patterna u programiranju, a aktivno proučava SQL i NoSQL baze podataka. Jedan je od osnivača udruženja PHP Srbija.",
    ),
    array(
        "name" => "Srđan Vranac",
        "img" => "images/predavaci/vranac.png",
        "twitter" => "vranac",
        "bio" => "ili kako ga svi zovu Vranac, je navodno iskusan developer, konzultant i poduzetnik (iako kruže priče da je mađioničar te piše recenzije restorana). Team koji vodi radi na raznolikim projektima od obrta do Fortune 500 kompanija.",
    ),
    array(
        "name" => "Maja Bilić",
        "img" => "images/predavaci/bilic.png",
        "bio" => "sasvim slučajno došla u IT vode i bezglavo se zaljubila. Ima završen fakultet s krive strane Vukovarske pa već 10 godina aktivno uči i radi u developmentu, a zadnje 3 godine kao voditeljica razvoja u firmi iSTUDIO.",
    ),
    array(
        "name" => "Ivan Habunek",
        "img" => "images/predavaci/habunek.png",
        "twitter" => "ihabunek",
        "bio" => "dugogodišnji PHP developer sa bogatim iskustvom u implementaciji backend sustava te član open source zajednica za koji nikad nema dosta vremena.",
    ),
    array(
        "name" => "Miodrag Stefanović",
        "img" => "images/predavaci/stefanovic.png",
        "twitter" => "miodrag42",
        "bio" => "bavi se programiranjem preko 20 godina, vodio je i realizovao preko 200 softverskih projekata, većinom u PHP-u. Interesuje ga veštačka inteligencija. Sada je rukovodilac IT-a u Limundo kompaniji.",
    ),
);

// Populate with placeholder image if none set
foreach($arrLecturers as &$lecturer) {
    if (empty($lecturer['img'])) {
        $lecturer['img'] = 'images/icons/Pensils@2x.png';
    }
}
unset($lecturer);

shuffle($arrLecturers);

// **********************************************
// *** Sponsors                               ***
// **********************************************

$arrSponsors = array(
    array(
        'url' => 'http://www.aduro.hr/',
        'logo' => 'images/sponzori/aduro-300x120.png',
        'title' => 'Aduro Idea'
    ),
    array(
        'url' => 'http://www.istudio.hr/',
        'logo' => 'images/sponzori/istudio-300x120.png',
        'title' => 'iStudio'
    ),
    array(
        'url' => 'http://www.locastic.com/',
        'logo' => 'images/sponzori/locastic-300x120.png',
        'title' => 'Locastic'
    ),
    array(
        'url' => 'http://www.orangehilldev.com/',
        'logo' => 'images/sponzori/orangehill-300x120.png',
        'title' => 'Orange Hill'
    ),
    array(
        'url' => 'http://www.netgenlabs.com/',
        'logo' => 'images/sponzori/netgen-300x120.png',
        'title' => 'Netgen'
    ),
    array(
        'url' => 'http://www.github.com/',
        'logo' => 'images/sponzori/github-300x120.png',
        'title' => 'Github'
    ),
    array(
        'url' => 'http://www.code4hire.com/',
        'logo' => 'images/sponzori/code4hire-300x120.png',
        'title' => 'code4hire'
    ),
    array(
        'url' => 'http://www.trikoder.hr/',
        'logo' => 'images/sponzori/trikoder-300x120.png',
        'title' => 'Trikoder'
    ),
    array(
        'url' => 'https://dsl-platform.com/',
        'logo' => 'images/sponzori/dslplatform-300x120.png',
        'title' => 'DSL Platform'
    ),
    array(
        'url' => 'http://neutrinodev.com/',
        'logo' => 'images/sponzori/neutrino-300x120.png',
        'title' => 'Neutrino'
    ),
);

shuffle($arrSponsors);

// **********************************************
// *** Visitors (10 of them)                  ***
// **********************************************

$arr10visitors = array();
foreach($rsvps->results as $item)
{
    if( $item->response ==='yes' && isset( $item->member_photo))
    {
        $arr10visitors [] = $item;
    }
}
$arr10visitors = array_slice($arr10visitors,0,8);
shuffle($arr10visitors);
