<?php
/**
 * Content for HeartCore - transcribed from the supplied content document and
 * the 19 change requests. Serbian (latinica). One source of truth for the views.
 */

return [

    /* ── Studios ─────────────────────────────────────────────
       Change requests #2 & #8: two studios - HeartCore Voždovac (live) and
       HeartCore Classical - Dedinje (not open yet → "USKORO"). */
    'studios' => [
        'vozdovac' => [
            'key'     => 'vozdovac',
            'open'    => true,
            'name'    => 'HeartCore',
            'place'   => 'Voždovac',
            'eyebrow' => 'Studio I · Voždovac',
            'tagline' => 'Matični studio.',
            'lead'    => 'Prvi studio u okviru HeartCore koncepta, osnovan 2020. godine. Mesto gde se pilates metoda primenjuje sistemski i dosledno, sa fokusom na zdrav pokret, preciznost i dugoročne rezultate. Ovde vežbate i savremeni i klasični pilates.',
            'body'    => 'Prostor osmišljen za fokus i povezivanje uma i tela. Neutralna paleta, prirodni materijali i dnevna svetlost, sve je tu da telo dobije punu pažnju, a um se umiri pre nego što praksa počne.',
            'addr'    => 'Vojvode Stepe 259, 11000 Beograd',
            'spec'    => [
                'Reformer', 'Mat', 'Cadillac', 'Wunda Chair', 'High Chair', 'Baby Chair',
                'Big Barrel', 'Spine Corrector', 'Small Barrel', 'Pedi Pole', 'Foot Corrector',
                'Neck Stretcher', 'Toe Stretcher', 'Push Up devices', 'Breath-a-sizer', 'Sand bag',
            ],
            'photos'  => ['studio-2', 'studio-1', 'studio-2', 'studio-4'],
            'hero'    => 'studio-vozdovac-wide',
        ],
        'dedinje' => [
            'key'     => 'dedinje',
            'open'    => false,
            'name'    => 'HeartCore Classical',
            'place'   => 'Dedinje',
            'eyebrow' => 'Studio II · Dedinje',
            'tagline' => 'Klasičan studio.',
            'lead'    => 'Najnovija etapa razvoja HeartCore koncepta, klasičan studio u srcu Dedinja, u blizini američke i izraelske ambasade. Mesto gde ćete, uz korišćenje svih pilates aparatusa, osetiti dubinu pilates metode i ojačati ne samo telo, već i um.',
            'body'    => 'Prostor gde se dugovečnost i zdravlje tretiraju kao najveći luksuz.',
            'addr'    => 'Dedinje, Beograd',
            'spec'    => [
                'Svi pilates aparatusi',
                'Isključivo klasični pilates',
                'Individualni rad i male grupe',
            ],
            'photos'  => ['studio-3', 'studio-1', 'studio-2', 'studio-4'],
            'hero'    => 'studio-vozdovac-wide',
        ],
    ],

    /* ── Home: three approaches (klasični / savremeni / specijalizovani) ── */
    'home_services' => [
        [
            'no' => '01', 'title' => 'Klasični pilates',
            'body' => 'Originalni metod Jozefa Pilatesa, jasno definisan redosled vežbi, precizna tehnika i rad na svim pilates aparatusima. Suština je u tačnosti i kvalitetu pokreta, ne u broju ponavljanja.',
            'tag' => 'Individualni · Mali grupni',
            'photo' => 'classical',
        ],
        [
            'no' => '02', 'title' => 'Savremeni pilates',
            'body' => 'Savremeni pristup metodi spojen sa fitnes principima, raznovrsne varijacije i rekviziti, vežbe prilagođene cilju treninga. Pristupačan širem krugu vežbača i većim grupama.',
            'tag' => 'Reformer · Grupni',
            'photo' => 'reformer',
        ],
        [
            'no' => '03', 'title' => 'Specijalizovani programi',
            'body' => 'Ciljani programi: Kifoza fix, Pilates legs, Teens pilates i Wall Unit. Pažljivo osmišljeni časovi za posturu, snagu i specifične potrebe različitih grupa vežbača.',
            'tag' => 'Grupe do 5',
            'photo' => 'group',
        ],
    ],

    /* ── Method (O Pilates metodi) ──────────────────────────── */
    'method' => [
        'intro' => 'Pilates je metoda koja traje čitav vek, jer ne zavisi od trendova nego se temelji na pravim vrednostima. Nije samo sistem vežbanja, već i filozofija o pokretu koja se bazira na dubokoj povezanosti uma i tela.',
        'intro2' => 'Razvija snagu, fleksibilnost, balans i koordinaciju kroz kontrolisane i precizne pokrete. Zasniva se na šest principa.',
        'principles' => ['Centriranje', 'Koncentracija', 'Kontrola', 'Preciznost', 'Disanje', 'Ritam & flow'],
        'joseph' => [
            'Jozef Pilates (1883–1967) bio je tvorac pilates metode, jedne od najuticajnijih metoda vežbanja 20. veka. Kao dete suočavao se sa ozbiljnim zdravstvenim izazovima, astmom, rahitisom i opštom telesnom slabošću. Upravo je to probudilo u njemu snažnu želju da razume telo i pronađe način da ga ojača i dovede u balans.',
            'Tokom godina intenzivno je proučavao različite sisteme pokreta. Bio je inspirisan istočnjačkim disciplinama poput joge i borilačkih veština, ali se sa podjednakom strašću bavio gimnastikom, boksom, mačevanjem i plivanjem. Iz tog bogatog znanja razvio je sopstveni metod, sistem koji telo ne posmatra kao skup pojedinačnih delova, već kao funkcionalnu i povezanu celinu.',
            'Tokom Prvog svetskog rata, dok je bio u zarobljeničkom kampu u Engleskoj, počeo je da razvija svoj metod, Matwork (vežbe na strunjači), kroz rad sa vojnicima. Nakon rata seli se u Sjedinjene Američke Države gde, zajedno sa suprugom Klarom, otvara svoj prvi studio u Njujorku.',
            'Svoj metod nazvao je „Contrology“, naglašavajući da je suština zdravog kretanja u svesnoj kontroli tela kroz um. Verovao je da fizičko zdravlje ne može postojati bez mentalne jasnoće, pravilnog disanja i uravnoteženog nervnog sistema. Smatrao je da kvalitet pokreta ima veću vrednost od količine, telo treba trenirati inteligentno, a ne iscrpljivati.',
        ],
        'classical' => [
            'title' => 'Klasični pilates',
            'desc'  => 'Originalni metod koji je razvio Jozef Pilates. Zasniva se na upotrebi svih pilates aparatusa, jasno definisanom redosledu vežbi, preciznoj tehnici i doslednosti u izvođenju. Svaka vežba ima tačno određenu formu, tempo i tranziciju, sa jasno definisanim nivoima od osnovnog do visoko naprednog, osnove se ne smeju preskakati.',
            'points' => [
                'Postoji jasan redosled vežbi',
                'Ista težina opruga',
                'Upotreba klasičnih mašina',
                'Usmeren na individualni rad i rad u malim grupama',
            ],
        ],
        'contemporary' => [
            'title' => 'Savremeni pilates',
            'desc'  => 'Nastao iz originalne metode, odstupanjem od jasnih pravila, redosleda i strukture kako bi bio pristupačan većem broju ljudi. Mnoge vežbe su modifikovane uz uvođenje novih pristupa, varijacija i fitnes principa. Upravo ta raznovrsnost čini ga zanimljivim i pristupačnijim širem krugu.',
            'points' => [
                'Instruktori određuju redosled vežbi',
                'Različite težine opruga',
                'Upotreba savremenih mašina',
                'Praktičniji za širu populaciju i veće grupe',
            ],
        ],
        'apparatus' => 'Reformer, Mat, Cadillac, Wunda Chair, High Chair, Baby Chair, Big Barrel, Spine Corrector, Small Barrel, Pedi Pole, Foot Corrector, Neck Stretcher, Toe Stretcher, Push Up devices, Breath-a-sizer, Sand bag i dr.',
        'quote' => 'U deset časova osetićete razliku, u dvadeset videti, a u trideset imati potpuno novo telo.',
    ],

    /* ── Dragana (owner) - change requests #14, #16, #17 ───── */
    'dragana' => [
        'role'  => 'Vlasnica studija · Master trener',
        'quote' => 'Pilates ne oblikuje samo naše telo, već i naš karakter!',
        'bio' => [
            'Dragana Kanjevac je prvi učitelj klasičnog pilatesa u Srbiji i osnivač HeartCore pilates studija. Njen profesionalni put obeležen je jasnim prelazom iz bankarskog okruženja u oblast pokreta, tela i zdravlja, vođenim dugogodišnjom ličnom strašću prema sportu.',
            'Nakon završenih studija ekonomije i višegodišnjeg rada u bankarskom sektoru, donosi odluku da se u potpunosti posveti oblasti pokreta. Prvi korak bila je edukacija za fitnes instruktora u okviru FISAF International sistema, nakon čega sledi usmeravanje ka savremenom pilatesu kroz školu Balanced Body za Mat i Reformer.',
            'Po završetku edukacije osniva svoj prvi pilates studio na Voždovcu, koji i danas predstavlja temelj njenog profesionalnog rada. Paralelno, kontinuirano nadograđuje znanje kroz brojne edukacije i seminare u inostranstvu.',
            'Prelomni trenutak nastaje kroz susret sa klasičnim pilatesom, nakon čega upisuje edukaciju u Rimu pod mentorstvom Sabine Formikele, jedne od najcenjenijih učitelja klasičnog pilatesa, dugogodišnje učenice Romane Krizanovske i naslednice Jozefa Pilatesa. Time Dragana spada u treću generaciju učitelja: Jozef Pilates → Romana Krizanovska → Sabina Formikela → Dragana Kanjevac.',
            'Posebno značajno iskustvo predstavlja njen rad na projektu „Pilates i pacijenti sa Parkinsonovom bolešću“, realizovan u okviru univerziteta Sapienza u Rimu, gde je bila jedna od četiri pilates učitelja koji su direktno radili sa pacijentima. Ovo iskustvo dodatno je potvrdilo terapijski potencijal pilates metode.',
        ],
        'lineage' => ['Jozef Pilates', 'Romana Krizanovska', 'Sabina Formikela', 'Dragana Kanjevac'],
        'references' => [
            ['2026', 'Pilates for Scoliosis Advanced Mentoring, Rome, Italy'],
            ['2025', 'True Pilates Continuing Professional Education, Verona'],
            ['2025', 'Pilates Anatomy Lab'],
            ['2025', 'True Pilates Continuing Professional Education, Rome'],
            ['2024', 'Workshop with Cristina Pintucci, Rome'],
            ['2024', 'Workshop with Rodrigo Nano, Rome'],
            ['2024', 'True Pilates Continuing Professional Education, Verona'],
            ['2022–2024', 'True Pilates Education - Comprehensive Classical Pilates Teacher, Rome, Italy'],
            ['2022', 'Elite Pilates Convention - Jean Claude Nelson, Katia Vasilenko, Athens'],
            ['2022', 'Pilates Convention - Gasperi, Nelson, Gravante, Pulidori, Chianciano Terme'],
            ['2018', 'Balanced Body - Reformer Instructor Education'],
            ['2018', 'Balanced Body - Mat Instructor Education'],
            ['2015', 'FISAF Fitness Instructor'],
        ],
    ],

    /* ── Instructors - change request #18: no "years of work" ── */
    'team' => [
        [
            'name' => 'Iva',
            'role' => 'Instruktor savremenog pilatesa',
            'photo' => 'jana-canva',
            'bio'  => 'Iva je ljubav prema pilatesu otkrila prvo kao dugogodišnji vežbač kod Dragane u studiju. Vodi grupne časove savremenog pilatesa koji donose prepoznatljivu energiju, pozitivnu atmosferu i motivaciju. Završila je osnovne studije psihologije i trenutno je na master studijama, što joj omogućava da duboko razume potrebe svojih klijenata i prilagodi svaki čas njihovim individualnim ciljevima. Iva se fokusira na to da vežbači, kroz svaki pokret, dožive puni potencijal svog tela, dok istovremeno razvijaju mentalnu snagu.',
        ],
        [
            'name' => 'Milena',
            'role' => 'Instruktor savremenog · učitelj klasičnog pilatesa u obuci',
            'photo' => 'team-milena',
            'bio'  => 'Milena je po struci advokat, a svoju profesionalnu preciznost i analitičnost uspešno prenosi u rad sa telom. Njeni časovi savremenog pilatesa odlikuju se jasnom strukturom, pažljivo vođenim sekvencama i snažnim fokusom na pravilnu tehniku. Trenutno je na edukaciji za klasični pilates, što njenim časovima daje dodatnu dubinu i doslednost originalnim principima metode. Smiren, ali autoritativan pristup, u kombinaciji sa jasnim instrukcijama, čini njene časove idealnim za one koji žele dublje razumevanje pilates metode i dugoročne rezultate.',
        ],
        [
            'name' => 'Jana',
            'role' => 'Instruktor savremenog pilatesa i učitelj klasičnog pilatesa u procesu obuke',
            'photo' => 'team-jana',
            'bio'  => 'Jana je instruktorka sa strašću za pilatesom, koja svojim pristupom inspiriše i motiviše svakog vežbača. Vodi grupne časove savremenog pilatesa, a njeni časovi donose prepoznatljivu energiju, pozitivnu atmosferu i motivaciju. Jana je trenutno na edukaciji za klasični pilates, što njenim časovima daje posebnu preciznost, fokus na to da vežbači pravilno izvode vežbe i razumeju svaki pokret. Kroz motivaciju i pažljiv pristup, njeni časovi ostavljaju vežbače sa snažnim osećajem postignuća, samopouzdanja i zadovoljstva nakon svakog treninga.',
        ],
    ],

    /* ── Mission & vision ───────────────────────────────────── */
    'mission' => [
        'Naša misija je očuvanje autentične pilates metode, pružanje tog iskustva vežbačima i širenje svesti o tome šta je pravi, autentični pilates.',
        'Kroz stručan i individualan pristup, težimo da vežbanje postane sastavni deo zdravog načina života, a ne kratkoročno rešenje. Cilj nam je sigurno i svesno vežbanje koje unapređuje snagu, stabilnost, fleksibilnost i posturu, uz razvijanje svesti o telu i njegovim potrebama.',
    ],
    'vision' => [
        'Vizija našeg rada usmerena je ka dugovečnosti i očuvanju funkcionalnosti tela kroz sve životne faze. Verujemo da pravilno vežbanje ima moć da unapredi kvalitet života, smanji rizik od povreda i podrži telo u procesu starenja.',
        'Kroz pilates metod promovišemo balans između tela i uma, gradeći temelje za dugoročno zdravlje i vitalnost.',
    ],

    /* ── Services & prices (RSD) - from the content document ── */
    // Unified services + prices table. Each row: group, name, desc, and one or
    // more [jedinica, cena] options. Rendered as a table (desktop) / cards (mobile).
    'pricing' => [
        ['group' => 'Individualni i duo', 'name' => 'Individualni - klasični pilates', 'desc' => 'Časovi prema individualnim potrebama klijenata, rad na svim pilates aparatusima.', 'options' => [['1 čas', '7.000 RSD'], ['8 časova', '57.000 RSD']]],
        ['group' => 'Individualni i duo', 'name' => 'Individualni - savremeni pilates', 'desc' => 'Časovi prema individualnim potrebama klijenata, rad na reformeru.', 'options' => [['1 čas', '4.800 RSD'], ['8 časova', '31.000 RSD']]],
        ['group' => 'Individualni i duo', 'name' => 'Duo - klasični pilates', 'desc' => 'Dve osobe približno sličnog nivoa, uz upotrebu svih pilates aparatusa.', 'options' => [['1 čas', '10.000 RSD'], ['8 časova', '79.000 RSD']]],
        ['group' => 'Individualni i duo', 'name' => 'Duo - savremeni pilates', 'desc' => 'Dve osobe približno sličnog nivoa, uz upotrebu reformera.', 'options' => [['1 čas', '7.000 RSD'], ['8 časova', '43.000 RSD']]],
        ['group' => 'Individualni i duo', 'name' => 'Trio - klasični pilates', 'desc' => 'Tri osobe približno sličnog nivoa, uz upotrebu svih pilates aparatusa.', 'options' => [['', 'Na upit']]],
        ['group' => 'Grupni i specijalizovani', 'name' => 'Grupni - savremeni pilates', 'desc' => 'Grupe do 5 vežbača, vežbanje na reformeru.', 'options' => [['8 časova', '12.000 RSD'], ['10 časova', '14.000 RSD'], ['12 časova', '16.000 RSD']]],
        ['group' => 'Grupni i specijalizovani', 'name' => 'Kifoza fix - specijalizovan program', 'desc' => 'Grupa do 5 vežbača; čas fokusiran na jačanje leđa, otvaranje grudi i poboljšanje cele posture.', 'options' => [['8 časova', '12.000 RSD']]],
        ['group' => 'Grupni i specijalizovani', 'name' => 'Pilates legs - specijalizovan program', 'desc' => 'Grupa do 5 vežbača; akcenat na jačanje donjeg dela tela i integraciju centra sa donjim delom tela.', 'options' => [['8 časova', '12.000 RSD']]],
        ['group' => 'Grupni i specijalizovani', 'name' => 'Teens pilates - specijalizovan program', 'desc' => 'Grupa do 5 tinejdžera (13–19 godina); čas usmeren na poboljšanje posture i jačanje celokupnog tela.', 'options' => [['8 časova', '12.000 RSD']]],
        ['group' => 'Grupni i specijalizovani', 'name' => 'Wall Unit - klasični pilates', 'desc' => 'Grupa do 4 vežbača; kombinacija Mat i Cadillac repertoara.', 'options' => [['prvi grupni čas', '1.500 RSD'], ['pojedinačni čas', '2.000 RSD']]],
        ['group' => 'Grupni i specijalizovani', 'name' => 'Vikend paket - savremeni pilates', 'desc' => 'Grupa do 5 vežbača; vežbanje ograničeno na vikend.', 'options' => [['8 časova', '8.000 RSD']]],
    ],

    /* ── Education ──────────────────────────────────────────── */
    'education' => [
        'edu-klasicni' => [
            'key' => 'edu-klasicni',
            'title' => 'Klasični pilates',
            'subtitle' => 'Edukacija za buduće učitelje',
            'intro' => 'Sveobuhvatan program edukacije iz klasičnog pilates sistema, verno čuvanje originalnog redosleda, anatomije pokreta i metodologije Jozefa Pilatesa, uz rad na svim pilates aparatusima.',
            'meta' => [
                ['Pristup', 'Klasični sistem'],
                ['Format', 'Moduli + asistiranje'],
                ['Lokacija', 'HeartCore - Voždovac'],
                ['Naknada', 'Na zahtev'],
            ],
            'modules' => [
                ['I', 'Anatomija i biomehanika', 'Funkcionalna anatomija, mišićni lanci, biomehanika kičme i karlice.'],
                ['II', 'Mat repertoar', 'Originalni redosled mat vežbi, sekvence i progresije.'],
                ['III', 'Reformer & Cadillac', 'Originalna sekvenca opreme, prelazi, tempo dahu.'],
                ['IV', 'Wunda Chair · Barrels', 'Mali aparati i barrel sekvenca, dopunski repertoar.'],
                ['V', 'Asistiranje i predavanje', 'Mentorisano asistiranje na časovima, komunikacija sa klijentima.'],
                ['VI', 'Završni ispit', 'Pisani, praktični i posmatrački deo. Sertifikacija.'],
            ],
        ],
        'edu-savremeni' => [
            'key' => 'edu-savremeni',
            'title' => 'Savremeni pilates i reformer',
            'subtitle' => 'Edukacija za instruktore',
            'intro' => 'Savremeni pristup pilates metodi spojen sa funkcionalnom anatomijom, kineziologijom i rehabilitacijom, za rad sa svim populacijama, uključujući povrede i postpartum.',
            'meta' => [
                ['Pristup', 'Savremeni sistem'],
                ['Format', 'Moduli + praktikum'],
                ['Lokacija', 'HeartCore - Voždovac'],
                ['Naknada', 'Na zahtev'],
            ],
            'modules' => [
                ['I', 'Funkcionalna anatomija', 'Mišićna integracija, fascijalni sistem, posturalni obrasci.'],
                ['II', 'Mat & ravni pokreta', 'Mat program kroz savremene principe, modifikacije, progresije.'],
                ['III', 'Reformer fundamentals', 'Osnovna i napredna sekvenca, spring rezistence, prelazi.'],
                ['IV', 'Tower · Chair · Barrel', 'Programi na svim aparatima i njihova integracija.'],
                ['V', 'Specijalne populacije', 'Trudnoća, postpartum, osteoporoza, povrede kičme.'],
                ['VI', 'Praktikum i ispit', 'Sati posmatranja, mentorisanje, finalna sertifikacija.'],
            ],
        ],
    ],
];
