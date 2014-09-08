<?php

// **********************************************
// *** Lecturers                              ***
// **********************************************

$arrLecturers = array(
    array(
        "name" => "Ross Tuck",
        "img" => "https://pbs.twimg.com/profile_images/655208872/ross2.jpg",
        "twitter"=> "rosstuck",
        "bio" => "Software developer, originally from the US and now living in the Netherlands for several years. Started coding in 2000 and now specializes in building web apps, primarily with PHP and Javascript.",
    ),
    array(
        "name" => "Tony Mrakovčić",
        "img" => "/images/predavaci/tony-mrakovicic.png",
        "twitter" => "jojothebandit",
        "bio" => "Experienced bug creator/solver. Currently the lead developer at Degordian, working in a faced paced, agile environment which requires a lot of focus on tedious details and end results. Enjoys simplifying things and coming up with practical solutions.",
    ),
    array(
        "name" => "Nikola Plejić",
        "img" => "https://dl.dropboxusercontent.com/u/817412/np.png",
        "twitter" => "nikolaplejic",
        "bio" => "Currently running a small development shop in Zagreb called Neutrino, I work on stuff that has an uncanny tendency to end up on the web. My weapons of choice include PHP, JavaScript, Clojure, Python, C#, and being aware that there's an entire world of other languages, technologies, and approaches to developing software out there.",
    ),
    array(
        "name" => "Robert Šorn",
        "img" => "http://house-sorn.com/robert/robert_sorn.png",
        "twitter" => "bigblacksteel",
        "bio" => "Dad, husband, hacker. Occasional philosopher. Strategist. The good guy.",
    ),
    array(
        "name" => "Ivo Lukač",
        "img" => "https://avatars1.githubusercontent.com/u/452964?v=2&s=400",
        "twitter" => "ilukac",
        "bio" => "International Business Development at Netgen, eZ Publish specialist, eZ Publish Innovation Board member, eZSummerCamp and PHPSummerCamp organizer",
    ),
    array(
        "name" => "Srđan Vranac",
        "img" => "https://pbs.twimg.com/profile_images/3558997016/190a3aee4cd047c6278ac424af1a99cc.jpeg",
        "twitter" => "vranac",
        "bio" => "I am a developer, consultant, mercenary (used to be known as freelancing). I lead a small team that works on various projects ranging from small family businesses to Fortune 500 companies. I write terrible code that performs exceptionally and currently I am wrangling elePHPants and Pythons.",
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
