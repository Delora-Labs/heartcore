<?php
/**
 * Contact form handler. Validates server-side, appends the message to a local
 * log (storage/contact-messages.log) and re-renders the contact page with the
 * success state — no live mail delivery required (works on WAMP out of the box).
 */

function hc_handle_contact(): void
{
    $req = Flight::request();
    $in  = $req->data;

    $values = [
        'ime'     => trim((string) $in->ime),
        'email'   => trim((string) $in->email),
        'telefon' => trim((string) $in->telefon),
        'studio'  => (string) ($in->studio ?: 'vozdovac'),
        'poruka'  => trim((string) $in->poruka),
    ];

    // Honeypot — bots fill hidden fields.
    $trap = trim((string) $in->website);

    $errors = [];
    if ($values['ime'] === '')   $errors['ime'] = 'Unesite ime';
    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Unesite ispravan e-mail';
    }
    if ($values['poruka'] === '') $errors['poruka'] = 'Unesite poruku';
    if (!in_array($values['studio'], ['vozdovac', 'dedinje', 'bilo-koji'], true)) {
        $values['studio'] = 'vozdovac';
    }

    $sent = false;
    if (!$errors && $trap === '') {
        $line = sprintf(
            "[%s] studio=%s ime=%s email=%s tel=%s :: %s\n",
            date('c'),
            $values['studio'],
            str_replace(["\r", "\n"], ' ', $values['ime']),
            $values['email'],
            str_replace(["\r", "\n"], ' ', $values['telefon']),
            str_replace(["\r", "\n"], ' ', $values['poruka'])
        );
        $dir = HC_ROOT . '/storage';
        if (!is_dir($dir)) @mkdir($dir, 0775, true);
        @file_put_contents($dir . '/contact-messages.log', $line, FILE_APPEND | LOCK_EX);
        $sent = true;
        $values = []; // clear the form on success
    }

    hc_render('kontakt', 'kontakt', [
        'title'  => 'Kontakt — Zakažite čas | HeartCore Studio Beograd',
        'robots' => 'noindex,follow',
    ], ['form' => ['values' => $values, 'errors' => $errors, 'sent' => $sent]]);
}
