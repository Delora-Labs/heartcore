<?php
/**
 * HeartCore Studio - front controller.
 * Flight microframework handles routing, SEO and page rendering.
 * Lives at the project root; the project root is the document root.
 */

declare(strict_types=1);

// When running under PHP's built-in server, let it serve existing static files.
if (PHP_SAPI === 'cli-server') {
    $file = __DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (is_file($file) && basename($file) !== 'index.php') {
        return false;
    }
}

require __DIR__ . '/vendor/autoload.php';

define('HC_ROOT', __DIR__);
$config = require HC_ROOT . '/app/config.php';
$data   = require HC_ROOT . '/app/data.php';

Flight::set('hc.config', $config);
Flight::set('hc.data', $data);

/* ── Rendering ───────────────────────────────────────────────
   Tiny output-buffer renderer: render a page view into $content, then wrap it
   in the layout. Keeps full control over <head> SEO without view-engine quirks. */
function hc_view(string $name, array $vars = []): string
{
    extract($vars, EXTR_SKIP);
    $config = Flight::get('hc.config');
    $data   = Flight::get('hc.data');
    ob_start();
    require HC_ROOT . '/app/views/' . $name . '.php';
    return ob_get_clean();
}

/**
 * Render a full page.
 * @param string $view   view file under app/views (without .php)
 * @param string $page   page key (drives nav active state)
 * @param array  $seo    title/description/og overrides
 * @param array  $vars   extra view variables
 */
function hc_render(string $view, string $page, array $seo = [], array $vars = []): void
{
    $config = Flight::get('hc.config');

    $req  = Flight::request();
    $host = $config['base_url'] !== '' ? rtrim($config['base_url'], '/')
          : (($req->scheme ?? 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost'));
    $path = $req->url ?? '/';
    $canonical = $host . ($path === '/' ? '/' : rtrim($path, '/'));

    $seo = array_merge([
        'title'       => $config['name'],
        'description' => $config['description'],
        'canonical'   => $canonical,
        'og_image'    => $host . '/assets/img/hero.jpg',
        'robots'      => 'index,follow',
    ], $seo);

    $content = hc_view($view, array_merge($vars, ['page' => $page]));
    echo hc_view('layout', [
        'seo'     => $seo,
        'content' => $content,
        'page'    => $page,
    ]);
}

/* ── Routes ──────────────────────────────────────────────── */

Flight::route('GET /', function () {
    hc_render('home', 'home', [
        'title'       => 'HeartCore Studio - Pilates Beograd | Klasični i savremeni pilates',
        'description' => 'HeartCore je boutique pilates studio u Beogradu. Klasični i savremeni pilates, individualni i grupni časovi na originalnoj opremi. Studio Voždovac, i uskoro drugi studio.',
    ]);
});

Flight::route('GET /studio/@key', function (string $key) {
    $data = Flight::get('hc.data');
    if (!isset($data['studios'][$key])) {
        Flight::notFound();
        return;
    }
    $s = $data['studios'][$key];
    hc_render('studio', $key, [
        'title'       => $s['name'] . ' - ' . $s['place'] . ' | HeartCore Studio',
        'description' => mb_substr($s['lead'], 0, 155),
        'robots'      => $s['open'] ? 'index,follow' : 'index,follow',
    ], ['studio' => $s]);
});

Flight::route('GET /o-pilates-metodi', function () {
    hc_render('metoda', 'metoda', [
        'title'       => 'O pilates metodi - Jozef Pilates i „Contrology“ | HeartCore',
        'description' => 'Šest principa pilatesa, priča o Jozefu Pilatesu i razlika između klasičnog i savremenog pilatesa.',
    ]);
});

Flight::route('GET /o-nama', function () {
    hc_render('about', 'about', [
        'title'       => 'O nama - Misija, vizija i naši instruktori | HeartCore',
        'description' => 'Naša misija je očuvanje autentične pilates metode. Upoznajte HeartCore studio i naše instruktore.',
    ]);
});

Flight::route('GET /dragana-kanjevac', function () {
    hc_render('dragana', 'dragana', [
        'title'       => 'Dragana Kanjevac - Vlasnica studija | HeartCore',
        'description' => 'Dragana Kanjevac, prvi učitelj klasičnog pilatesa u Srbiji i osnivač HeartCore studija, biografija i reference.',
    ]);
});

Flight::route('GET /usluge', function () {
    hc_render('usluge', 'usluge', [
        'title'       => 'Usluge i cenovnik - Pilates programi | HeartCore',
        'description' => 'Individualni, duo, trio i grupni pilates časovi, specijalizovani programi i cenovnik HeartCore studija.',
    ]);
});

Flight::route('GET /edukacija/@slug', function (string $slug) {
    $map = ['klasicni-pilates' => 'edu-klasicni', 'savremeni-pilates' => 'edu-savremeni'];
    $data = Flight::get('hc.data');
    if (!isset($map[$slug])) {
        Flight::notFound();
        return;
    }
    $key = $map[$slug];
    $edu = $data['education'][$key];
    hc_render('edukacija', $key, [
        'title'       => $edu['title'] . ' - Edukacija | HeartCore',
        'description' => mb_substr($edu['intro'], 0, 155),
    ], ['edu' => $edu]);
});

Flight::route('GET /kontakt', function () {
    hc_render('kontakt', 'kontakt', [
        'title'       => 'Kontakt - Zakažite čas | HeartCore Studio Beograd',
        'description' => 'Zakažite probni čas ili nam pišite. Telefon 062 226622, kanjevac.dragana@gmail.com. Studio Voždovac, Beograd.',
    ], ['form' => ['values' => [], 'errors' => [], 'sent' => false]]);
});

Flight::route('POST /kontakt', function () {
    require HC_ROOT . '/app/contact.php';
    hc_handle_contact();
});

/* SEO helpers */
Flight::route('GET /robots.txt', function () {
    $host = ($_SERVER['HTTP_HOST'] ?? 'localhost');
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    Flight::response()->header('Content-Type', 'text/plain; charset=utf-8');
    echo "User-agent: *\nAllow: /\n\nSitemap: $scheme://$host/sitemap.xml\n";
});

Flight::route('GET /sitemap.xml', function () {
    $host = ($_SERVER['HTTP_HOST'] ?? 'localhost');
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $base = "$scheme://$host";
    Flight::response()->header('Content-Type', 'application/xml; charset=utf-8');
    $urls = array_values(hc_routes());
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($urls as $u) {
        $loc = $base . ($u === '/' ? '/' : rtrim($u, '/'));
        $pri = $u === '/' ? '1.0' : '0.7';
        echo "  <url><loc>" . htmlspecialchars($loc) . "</loc><changefreq>monthly</changefreq><priority>$pri</priority></url>\n";
    }
    echo "</urlset>\n";
});

/* 404 */
Flight::map('notFound', function () {
    if (!headers_sent()) {
        http_response_code(404);
    }
    hc_render('notfound', '', [
        'title'  => 'Stranica nije pronađena | HeartCore',
        'robots' => 'noindex,follow',
    ]);
    exit;
});

Flight::start();
