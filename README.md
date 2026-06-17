# HeartCore Studio — website

Server-rendered marketing site for HeartCore pilates studio (Beograd), built on
the [Flight](https://docs.flightphp.com/en/v3/) PHP microframework. Flight handles
routing, SEO-friendly URLs and per-page `<head>` metadata; pages are plain PHP views.

The design is ported from the original single-page prototype (`index.html`, kept
as a reference). Content comes from the supplied content document and the 19
change requests.

## Requirements

- PHP 8.1+ (with the `gd` extension for the image pipeline)
- Composer (a local `composer.phar` is bundled; install with it)

## Setup

```bash
php composer.phar install
```

## Run (local)

The **document root is `public/`**. With PHP's built-in server:

```bash
php -S localhost:8000 public/index.php
```

Then open <http://localhost:8000>. On Apache/WAMP, point the vhost docroot at
`public/` — `public/.htaccess` rewrites all requests to the front controller.

## Structure

```
app/
  config.php          site config — contact details, social
  data.php            all page content (Serbian) — single source of truth
  helpers.php         view helpers (URLs, photo/eyebrow/diamond atoms)
  contact.php         contact form handler (validate + log + success)
  views/              layout, nav/footer partials, one file per page
public/
  index.php           front controller + Flight routes + SEO + sitemap/robots
  assets/css|js|img   compiled styles, progressive-enhancement JS, graded photos
tools/
  process-images.php  re-runnable image build pipeline (resize + warm grade)
storage/
  contact-messages.log  submitted contact messages (created on first submit)
data/                 original source photos + supplied documents (not served)
```

## Pages / routes

| URL | Page |
| --- | --- |
| `/` | Početna |
| `/studio/vozdovac` | HeartCore — Voždovac |
| `/studio/dedinje` | HeartCore Classical — Dedinje *(USKORO)* |
| `/o-pilates-metodi` | O Pilates metodi |
| `/o-nama` | O nama (misija, vizija, instruktori) |
| `/dragana-kanjevac` | Dragana Kanjevac (vlasnica) |
| `/usluge` | Usluge i cenovnik |
| `/edukacija/klasicni-pilates` · `/edukacija/savremeni-pilates` | Edukacija |
| `/kontakt` | Kontakt (forma) |
| `/sitemap.xml` · `/robots.txt` | SEO |

## Images

`tools/process-images.php` reads the originals from `data/images`, resizes them
and bakes in the brand "soft warm desaturated" look, writing to
`public/assets/img`. Re-run after adding/replacing source photos:

```bash
php -d memory_limit=1024M tools/process-images.php
```

## Notes / pending assets

- **Joseph Pilates archival photo** (change request #11) and **individual
  instructor portraits** (Iva, Milena, Jana) were not supplied — those slots use
  labelled brand placeholders. Drop the files in `data/images`, map them in
  `tools/process-images.php`, re-run, and reference them in the views.
- The contact form logs to `storage/contact-messages.log`. To send real e-mail,
  swap the file write in `app/contact.php` for `mail()` / an SMTP library.
- Set `base_url` in `app/config.php` to the production domain so canonical/OG
  URLs are absolute in production.
