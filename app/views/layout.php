<?php
/** @var array $seo @var string $content @var string $page @var array $config */
$solidNav = ($page !== 'home'); // home shows transparent nav over the hero
$host = ($config['base_url'] !== '') ? rtrim($config['base_url'], '/')
      : (((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost'));
?>
<!DOCTYPE html>
<html lang="<?= hc_e($config['lang']) ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= hc_e($seo['title']) ?></title>
  <meta name="description" content="<?= hc_e($seo['description']) ?>">
  <meta name="robots" content="<?= hc_e($seo['robots']) ?>">
  <link rel="canonical" href="<?= hc_e($seo['canonical']) ?>">

  <!-- Open Graph / Twitter -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= hc_e($config['name']) ?>">
  <meta property="og:locale" content="<?= hc_e($config['locale']) ?>">
  <meta property="og:title" content="<?= hc_e($seo['title']) ?>">
  <meta property="og:description" content="<?= hc_e($seo['description']) ?>">
  <meta property="og:url" content="<?= hc_e($seo['canonical']) ?>">
  <meta property="og:image" content="<?= hc_e($seo['og_image'] ?? ($host . '/assets/img/hero.jpg')) ?>">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= hc_e(hc_asset('css/site.css')) ?>">

  <script type="application/ld+json">
  <?= json_encode([
      '@context' => 'https://schema.org',
      '@type'    => 'HealthClub',
      'name'     => $config['name'],
      'description' => $config['description'],
      'url'      => $host . '/',
      'telephone' => $config['contact']['phone_display'],
      'email'    => $config['contact']['email'],
      'address'  => [
          '@type' => 'PostalAddress',
          'streetAddress' => 'Vojvode Stepe 259',
          'addressLocality' => 'Beograd',
          'postalCode' => '11000',
          'addressCountry' => 'RS',
      ],
      'openingHours' => ['Mo-Fr 08:00-22:00', 'Sa-Su 09:00-15:00'],
      'image' => $host . '/assets/img/hero.jpg',
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
  </script>
</head>
<body<?= $solidNav ? ' data-solid-nav' : '' ?>>
  <?php require HC_ROOT . '/app/views/partials/nav.php'; ?>
  <?= $content ?>
  <?php require HC_ROOT . '/app/views/partials/footer.php'; ?>
  <script src="<?= hc_e(hc_asset('js/site.js')) ?>" defer></script>
</body>
</html>
