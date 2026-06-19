<?php
/**
 * Site-wide configuration. Contact details reflect the change requests:
 *  - phone 062 226622, mail kanjevac.dragana@gmail.com
 *  - Pon–Pet 08–22h, Subota i Nedelja 09–15h
 */

return [
    'name'        => 'HeartCore Studio',
    'tagline'     => 'Boutique pilates · Beograd',
    'description' => 'HeartCore je pilates studio u Beogradu posvećen očuvanju autentične pilates metode, klasični i savremeni pilates, individualni i grupni časovi na originalnoj opremi.',
    'locale'      => 'sr_RS',
    'lang'        => 'sr',

    // Set this to the production domain when deploying (used for canonical/OG URLs).
    'base_url'    => '',

    'contact' => [
        'phone_display' => '062 226622',
        'phone_href'    => '+38162226622',
        'email'         => 'kanjevac.dragana@gmail.com',
        'hours'         => [
            ['Ponedeljak - Petak', '08:00 - 22:00'],
            ['Subota i Nedelja',   '09:00 - 15:00'],
        ],
    ],

    'social' => [
        // Update with the real handles when available.
        ['name' => 'Instagram', 'url' => 'https://www.instagram.com/'],
    ],
];
