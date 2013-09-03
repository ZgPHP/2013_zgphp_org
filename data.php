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
        'person' => 'Antonio Perić - Mažar',
        'title' => 'Sylius',
        'abstract' => 'Predavanja na kojem će Antonio prezentirati mogućnosti Syliusa, trenutnog stanja projekta te neke buduće planove i očekivanja vezana za navedeno rješenje. Sylius je e-commerce rješenje izgrađeno na Symfony2 frameworku.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Tihomir Opačić',
        'title' => 'Laravel 4 Package Development &amp; Publishing',
        'abstract' => 'Uz Composer kao integralni dio Laravel 4 framework-a, konačno se pojavljuje forma u kojoj možemo kompleksne projekte razbiti na zasebne nezavisne cjeline (Laravel Packages) koje kasnije možemo vrlo lako upotrijebiti u bilo kojem projektu. Ovo podiže Code Reusability na potpuno novu razinu. Predavanje će se fokusirati na izradu jednog ovakvog paketa zaključno sa procesom objavljivanja paketa na github.com i packagist.org. Ukratko će opisati i Facades Laravel 4 feature, te kako kreairati Facade za novonastali package.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Milan Popović',
        'title' => 'Redis i PHP',
        'abstract' => 'Redis predstavlja vrlo moćno open source NoSQL rješenje. Predavanje će vas upoznati s osnovama Redisa kao i sa strukturama podataka koje podržava. Uz primjer jednostavne aplikacije, predstavit će se i paketi u PHP-u za rad sa Redisom.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Maja Bilić',
        'title' => 'Zgode i nezgode žena u IT industriji',
        'abstract' => 'Predavanje će pokušati dati pregled hrvatske i svjetske IT scene iz perspektive žene. Na primjerima iz vlastitog iskustva prikazat će na kakve lijepe i manje lijepe situacije može jedna žena naići u ovoj industriji, gdje je nam je mjesto u cijeloj priči te zašto smo ponekad bolja opcija od muškaraca.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Srđan Vranac',
        'title' => 'Vagrant i Puppet, što će mi sad to?',
        'abstract' => 'Prilikom rada na projektima svaki developer u timu može dodavati svoje librarye, ekstenzije i podesiti projekt kako mu paše. Problem nastaje kada je sve to potrebno ponoviti kod ostalih članova tima. Vagrant, jedan od mnogih alata za koje ste možda čuli ali niste imali prilike probati, služi pojednostavljanju podešavanja okruženja za razvoj i pružanje identičnog setupa svim članovim teama. U sklopu predavanja bit će objašnjeno zašto koristiti Vagrant te koje su mu prednosti i mane.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Ivan Habunek',
        'title' => 'Travis CI - testiranje open source projekata',
        'abstract' => 'Bez obzira na to da li ste zagovornik test-driven razvoja ili mrzitelj istog, većina se slaže da je testiranje koda korisan, ako ne i nužnan, dio razvojnog ciklusa. Ovo predavanje će pokazati kako koristiti Travis CI platformu kako bi testirali svoj PHP projekt pri svakom pushu na GitHub.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Miodrag Stefanović',
        'title' => 'Arhitektura high performance PHP aplikacije',
        'abstract' => 'Limundo i Kupindo dnevno poseti preko 300 000 posetilaca koji pregledaju 10 miliona stranica. U udarima je online i do 10 000 korisnika u sekundi uz vreme odziva reda veličine jedne sekunde. Na predavanju će biti opisana arhitektura Limundo/Kupindo sistema koja to omogućava i koja je potpuno izgrađena na PHP osnovi.',
        'time' => '--:--'
    ),
    array(
        'person' => 'Andrej Boboš',
        'title' => 'High scalability aplikacija',
        'abstract' => 'Arhitektura aplikacije koja omogućava lako skaliranje za startupe je obavezna. U početku, radi brze implementacije ideje, kvaliteta koda je bitna ali ne i presudna. S druge strane, arhitektura koja omogućava brze promjene i efektivno dodavanje novih servera je presudna. Na našem primjeru pokazat ćemo kako smo zaobišli dva specifična problema. Prvi je veliki load na pozadinske procese koji prosljeđuju veliki broj requestova na Facebook API, te njihova obrada (agregacija, analiza), a drugi je veliki broj podataka koje smo prikupljali i koji su imali promjenljivu strukturu zbog koje relacijske baze nisu dolazile u obzir.',
        'time' => '--:--'
    )
);

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
    array(
        'url' => 'http://www.limundo.com/',
        'logo' => 'images/sponzori/limundo-300x120.png',
        'title' => 'Limundo'
    ),
    array(
        'url' => 'http://www.seekandhit.com/',
        'logo' => 'images/sponzori/seekandhit-300x120.png',
        'title' => 'SeekandHit'
    ),
    array(
        'url' => 'http://www.njuskalo.hr/',
        'logo' => 'images/sponzori/njuskalo-300x120.png',
        'title' => 'Njuškalo'
    ),
    array(
        'url' => 'http://www.perpetuum.hr/',
        'logo' => 'images/sponzori/perpetuum-300x120.png',
        'title' => 'Perpetuum Mobile'
    ),
    array(
        'url' => 'http://www.jetbrains.com/',
        'logo' => 'images/sponzori/jetbrains-300x120.png',
        'title' => 'JetBrains'
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
    array(
        "name" => "Ana Bavčević",
        "img" => "images/organizatori/bavcevic.png",
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
