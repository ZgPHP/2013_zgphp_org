<?php

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
        "twitter" => "komita1981",
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
        "twitter" => "bilicmaja",
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
    array(
        "name" => "Andrej Boboš",
        "img" => "images/predavaci/bobos.png",
        "twitter" => "andrejbobos",
        "bio" => "suosnivač startupa Socialbrando koji je poslije uspješne akvizicije integriran u Socialbakers; danas je SCRUM Master u SeekandHit zadužen za koordinaciju tima koji se bavi implementacijom oglasnih platformi na društvenim mrežama",
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
// *** Talks                                  ***
// **********************************************

$arrTalks = array(
    array(
        'title' => 'Registration and preconf social',
        'abstract' => 'Pickup your name tag and meet other attendees',
        'time' => '10:00'
    ),
    array(
        'title' => 'Opening',
        'abstract' => 'Hello from organizers',
        'time' => '11:00'
    ),
    array(
        'person' => 'Tony Mrakovčić',
        'title' => 'Ultra mega rapid development, a startup in 24 hours',
        'abstract' => 'Our experience from an attempt to develop a startup in 24 hours. The development advantages and disadvantages of this approach.',
        'time' => '11:15',
        'slides' => null,
    ),
    array(
        'person' => 'Nikola Plejić',
        'title' => 'HHVM and Hack: Might These Be The Droids We Are Looking For?',
        'abstract' => 'HHVM is a new implementation of PHP backed by a powerful interpreter and a JIT compiler. Hack is a new programming language targeting HHVM which augments PHP with a type system, proper closures, async capabilities, and many more. The talk will give a high-level overview of the features of both, outline the benefits of the alternative execution model brought by HHVM, and possible day-to-day benefits introduced by Hack.',
        'time' => '12:05',
    ),
    array(
        'person' => 'Robert Šorn',
        'title' => 'Lets do Events',
        'abstract' => 'Is your domain full of events that are happening as users are doing stuff? Why not have them in your system? You\'ll be describing the real world of your domain better and easier. And you can get surprising benefits. Come and see how.',
        'time' => '13:10',
        'slides' => null,
    ),
    array(
        'title' => 'Lunch break',
        'abstract' => '',
        'time' => '13:55'
    ),
    array(
        'person' => 'Ivo Lukač',
        'title' => 'The power of ESI and HTTP Cache for performant page delivery',
        'abstract' => 'For web sites with frequent content changes, like news portals, an optimal cache strategy is crucial for serving millions of page views. To just cache every page statically is usually not an option as editors want to see the changes immediately. With the new version of eZ Publish CMS, which  is based on Symfony PHP framework, content caching is based on HTTP Cache. This enables much tighter integration with reverse proxies like Varnish and better control of cached pages. Also, Symfony provides ESI capabilities for controlling reverse proxy cache even on block level so invalidating a whole page is not expensive.',
        'time' => '14:55'
    ),
    array(
        'person' => 'Srđan Vranac',
        'title' => 'Shifting gears with Gearman',
        'abstract' => 'Everyone starts with a simple one-machine setup, running PHP(or whatever else you fancy), MySQL/PostgreSql and Apache/Nginx. Sooner or later that will not be enough, and you will be faced with some important architecture decisions. This talk will show you how you can optimize and increase the performance of your application by distributing tasks in an simple and affordable way.',
        'time' => '15:30',
        'slides' => null
    ),
    array(
        'title' => 'TBD',
        'abstract' => '',
        'time' => '16:35',
        'slides' => null,
    ),
    array(
        'person' => 'Ross Tuck',
        'title' => 'HTTP & Your Angry Dog',
        'abstract' => 'What is an etag, exactly? What\'s all that stuff in the Accept header? And what the heck does a Vary header do anyways?! Web developers use HTTP everyday but most of us don\'t know how to get the most out of it. This talk goes past memorizing status codes (although we\'ll see those too) and teaches how to get the most out of every request and response.',
        'time' => '17:25',
        'slides' => null,
    ),
    array(
        'title' => 'Closing and giveaway',
        'abstract' => '',
        'time' => '18:15'
    ),
);

// **********************************************
// *** Sponsors                               ***
// **********************************************

$arrSponsors = array(
    array(
        'url' => 'http://www.degordian.hr/',
        'logo' => 'images/sponzori/degordian-300x120.png',
        'title' => 'Degordian'
    ),
    array(
        'url' => 'http://www.netgenlabs.com/',
        'logo' => 'images/sponzori/netgen-300x120.png',
        'title' => 'Netgen'
    ),
    array(
        'url' => 'http://www.code4hire.com/',
        'logo' => 'images/sponzori/code4hire-300x120.png',
        'title' => 'code4hire'
    ),
);

shuffle($arrSponsors);

// **********************************************
// *** Organizers                             ***
// **********************************************

$arrOrganizers = array(
    array(
        "name" => "Ivan Habunek",
        "img" => "images/organizatori/habunek.jpeg",
        "twitter"=> "ihabunek",
    ),
    array(
        "name" => "Miro Svrtan",
        "img" => "images/organizatori/svrtan.jpeg",
        "twitter"=> "msvrtan",
    ),
    array(
        "name" => "Luka Mužinić",
        "img" => "images/organizatori/muzinic.jpeg",
        "twitter"=> "lmuzinic",
    ),
);

shuffle($arrOrganizers);


// **********************************************
// *** Thanks                                 ***
// **********************************************

$arrThanks = array(
    array(
        'url' => 'http://www.hgk.hr/',
        'logo' => 'images/zahvale/hgk-300x120.png',
        'title' => 'Hrvatska gospodarska komora',
        'text' => 'Hvala Hrvatskoj gospodarskoj komori na ustupljenom prostoru u Novoj cesti 7. Bez njih ne bi bilo moguće organizirati besplatnu konferenciju.'
    ),
    array(
        'url' => 'http://www.open.hr/',
        'logo' => 'images/zahvale/hropen-300x120.png',
        'title' => 'HROpen',
        'text' => 'Hvala Hrvatskoj udruzi za otvorene sustave i Internet na podršci i ispomoći pri organizaciji konferencije.'
    ),
    array(
        'url' => 'http://www.plus.hr/',
        'logo' => 'images/zahvale/plushr-300x120.png',
        'title' => 'Plus HR',
        'text' => 'Hvala Plus hostingu na ustupljenom prostoru za <a target="_blank" href="http://zgphp.org">zgphp.org</a> na kojem se nalazi i stranica konferencije.'
    ),
);

shuffle($arrThanks);
