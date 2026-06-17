<?php
/** @var string $page */
$logoSvg = '<svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">'
    . '<path d="M14 24C14 24 4 17.5 4 10.5C4 7.46243 6.46243 5 9.5 5C11.4 5 13.1 6 14 7.5C14.9 6 16.6 5 18.5 5C21.5376 5 24 7.46243 24 10.5C24 17.5 14 24 14 24Z" stroke="#1A1A1A" stroke-width="1" fill="none"/>'
    . '<circle cx="14" cy="13" r="1.5" fill="#1A1A1A"/></svg>';

$logo = '<span class="hc-logo">' . $logoSvg
    . '<span><span class="hc-logo__name">HeartCore</span><br><span class="hc-logo__sub">Studio · Beograd</span></span></span>';

$studioChildren = ['vozdovac', 'dedinje'];
$eduChildren = ['edu-klasicni', 'edu-savremeni'];
?>
<header class="hc-header">
  <div class="hc-header__inner">
    <a href="<?= hc_e(hc_url('home')) ?>" aria-label="HeartCore — početna"><?= $logo ?></a>

    <nav class="hc-nav" aria-label="Glavna navigacija">
      <div class="hc-nav__item">
        <a href="<?= hc_e(hc_url('vozdovac')) ?>" class="hc-nav__link<?= hc_is_active($page, 'studiji', $studioChildren) ? ' is-active' : '' ?>">
          Studiji
          <svg class="hc-nav__caret" width="8" height="6" viewBox="0 0 8 6" aria-hidden="true"><path d="M1 1L4 4L7 1" stroke="currentColor" stroke-width="1" fill="none"/></svg>
        </a>
        <div class="hc-nav__dropdown"><div class="hc-nav__dropdown-inner">
          <a href="<?= hc_e(hc_url('vozdovac')) ?>">HeartCore — Voždovac</a>
          <a href="<?= hc_e(hc_url('dedinje')) ?>">HeartCore Classical — Dedinje <small>· uskoro</small></a>
        </div></div>
      </div>

      <a href="<?= hc_e(hc_url('metoda')) ?>" class="hc-nav__link<?= $page === 'metoda' ? ' is-active' : '' ?>">O Pilates metodi</a>
      <a href="<?= hc_e(hc_url('about')) ?>" class="hc-nav__link<?= $page === 'about' ? ' is-active' : '' ?>">O nama</a>
      <a href="<?= hc_e(hc_url('dragana')) ?>" class="hc-nav__link<?= $page === 'dragana' ? ' is-active' : '' ?>">Dragana Kanjevac</a>
      <a href="<?= hc_e(hc_url('usluge')) ?>" class="hc-nav__link<?= $page === 'usluge' ? ' is-active' : '' ?>">Usluge</a>

      <div class="hc-nav__item">
        <a href="<?= hc_e(hc_url('edu-klasicni')) ?>" class="hc-nav__link<?= hc_is_active($page, 'edukacija', $eduChildren) ? ' is-active' : '' ?>">
          Edukacija
          <svg class="hc-nav__caret" width="8" height="6" viewBox="0 0 8 6" aria-hidden="true"><path d="M1 1L4 4L7 1" stroke="currentColor" stroke-width="1" fill="none"/></svg>
        </a>
        <div class="hc-nav__dropdown"><div class="hc-nav__dropdown-inner">
          <a href="<?= hc_e(hc_url('edu-klasicni')) ?>">Klasični pilates</a>
          <a href="<?= hc_e(hc_url('edu-savremeni')) ?>">Savremeni pilates i reformer</a>
        </div></div>
      </div>

      <a href="<?= hc_e(hc_url('kontakt')) ?>" class="hc-nav__cta">Zakažite čas</a>
    </nav>

    <button class="hc-burger" data-burger aria-label="Otvori meni">
      <svg width="26" height="14" viewBox="0 0 26 14" fill="none" aria-hidden="true">
        <line x1="0" y1="1" x2="26" y2="1" stroke="currentColor" stroke-width="1.2"/>
        <line x1="0" y1="13" x2="26" y2="13" stroke="currentColor" stroke-width="1.2"/>
      </svg>
    </button>
  </div>
</header>

<div class="hc-mobile" data-mobile>
  <div class="hc-mobile__head">
    <?= $logo ?>
    <button data-mobile-close aria-label="Zatvori meni" style="background:transparent;border:0;color:#fff;cursor:pointer;padding:8px">
      <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><line x1="2" y1="2" x2="20" y2="20" stroke="currentColor" stroke-width="1.2"/><line x1="20" y1="2" x2="2" y2="20" stroke="currentColor" stroke-width="1.2"/></svg>
    </button>
  </div>
  <nav class="hc-mobile__nav" aria-label="Mobilna navigacija">
    <div>
      <div class="hc-mobile__group-label">Studiji</div>
      <a class="lvl2" href="<?= hc_e(hc_url('vozdovac')) ?>">HeartCore — Voždovac</a>
      <a class="lvl2" href="<?= hc_e(hc_url('dedinje')) ?>">HeartCore Classical — Dedinje · uskoro</a>
    </div>
    <div><a class="lvl1" href="<?= hc_e(hc_url('metoda')) ?>">O Pilates metodi</a></div>
    <div><a class="lvl1" href="<?= hc_e(hc_url('about')) ?>">O nama</a></div>
    <div><a class="lvl1" href="<?= hc_e(hc_url('dragana')) ?>">Dragana Kanjevac</a></div>
    <div><a class="lvl1" href="<?= hc_e(hc_url('usluge')) ?>">Usluge</a></div>
    <div>
      <div class="hc-mobile__group-label">Edukacija</div>
      <a class="lvl2" href="<?= hc_e(hc_url('edu-klasicni')) ?>">Klasični pilates</a>
      <a class="lvl2" href="<?= hc_e(hc_url('edu-savremeni')) ?>">Savremeni pilates i reformer</a>
    </div>
    <div style="border-bottom:0;margin-top:32px"><?= hc_btn('kontakt', 'Zakažite čas', 'invert') ?></div>
  </nav>
</div>
