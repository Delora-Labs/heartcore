<?php
/** @var array $config */
$c = $config['contact'];
$icons = [
    'Instagram' => '<path d="M12 2.5c2.6 0 2.9 0 3.9.05 1 .05 1.6.2 2.1.4.6.2 1.1.5 1.6 1s.8 1 1 1.6c.2.5.4 1.1.4 2.1.05 1 .05 1.3.05 3.9s0 2.9-.05 3.9c-.05 1-.2 1.6-.4 2.1-.2.6-.5 1.1-1 1.6s-1 .8-1.6 1c-.5.2-1.1.4-2.1.4-1 .05-1.3.05-3.9.05s-2.9 0-3.9-.05c-1-.05-1.6-.2-2.1-.4-.6-.2-1.1-.5-1.6-1s-.8-1-1-1.6c-.2-.5-.4-1.1-.4-2.1C2.5 14.9 2.5 14.6 2.5 12s0-2.9.05-3.9c.05-1 .2-1.6.4-2.1.2-.6.5-1.1 1-1.6s1-.8 1.6-1c.5-.2 1.1-.4 2.1-.4 1-.05 1.3-.05 3.9-.05Zm0 1.6c-2.5 0-2.8 0-3.8.05-.9.05-1.4.2-1.7.3-.4.2-.7.4-1 .7s-.5.6-.7 1c-.1.3-.3.8-.3 1.7-.05 1-.05 1.3-.05 3.8s0 2.8.05 3.8c.05.9.2 1.4.3 1.7.2.4.4.7.7 1s.6.5 1 .7c.3.1.8.3 1.7.3 1 .05 1.3.05 3.8.05s2.8 0 3.8-.05c.9-.05 1.4-.2 1.7-.3.4-.2.7-.4 1-.7s.5-.6.7-1c.1-.3.3-.8.3-1.7.05-1 .05-1.3.05-3.8s0-2.8-.05-3.8c-.05-.9-.2-1.4-.3-1.7-.2-.4-.4-.7-.7-1s-.6-.5-1-.7c-.3-.1-.8-.3-1.7-.3-1-.05-1.3-.05-3.8-.05Zm0 2.7a5.2 5.2 0 1 1 0 10.4 5.2 5.2 0 0 1 0-10.4Zm0 1.6a3.6 3.6 0 1 0 0 7.2 3.6 3.6 0 0 0 0-7.2Zm5.4-2.9a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4Z"/>',
];
?>
<footer class="hc-footer">
  <div class="hc-container" style="padding: var(--hc-section-py) var(--hc-px) 40px">
    <div class="hc-footer__grid">

      <div>
        <span class="hc-logo">
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" aria-hidden="true">
            <path d="M14 24C14 24 4 17.5 4 10.5C4 7.46243 6.46243 5 9.5 5C11.4 5 13.1 6 14 7.5C14.9 6 16.6 5 18.5 5C21.5376 5 24 7.46243 24 10.5C24 17.5 14 24 14 24Z" stroke="#FAFAFA" stroke-width="1" fill="none"/>
            <circle cx="14" cy="13" r="1.5" fill="#FAFAFA"/>
          </svg>
          <span><span class="hc-logo__name" style="color:var(--hc-white)">HeartCore</span><br><span class="hc-logo__sub" style="color:rgba(250,250,250,.55)">Studio · Beograd</span></span>
        </span>
        <p class="hc-footer__brand-quote">Pokret koji se vraća sebi. Boutique pilates studio u srcu Beograda.</p>
        <div class="hc-footer__socials">
          <?php foreach ($config['social'] as $s): ?>
            <a href="<?= hc_e($s['url']) ?>" target="_blank" rel="noopener" aria-label="<?= hc_e($s['name']) ?>">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><?= $icons[$s['name']] ?? '' ?></svg>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <div>
        <?= hc_eyebrow('Studiji', true) ?>
        <div class="hc-footer__loc">
          <div>
            <div class="hc-footer__loc-name">HeartCore - Voždovac</div>
            <p class="hc-footer__small">Vojvode Stepe 259<br>11000 Beograd</p>
          </div>
          <div>
            <div class="hc-footer__loc-name">HeartCore Classical</div>
            <p class="hc-footer__small"><em>Uskoro</em></p>
          </div>
        </div>
      </div>

      <div>
        <?= hc_eyebrow('Kontakt', true) ?>
        <div class="hc-footer__contact">
          <a href="mailto:<?= hc_e($c['email']) ?>"><?= hc_e($c['email']) ?></a>
          <a href="tel:<?= hc_e($c['phone_href']) ?>"><?= hc_e($c['phone_display']) ?></a>
          <span>Pon - Pet · 08 - 22h · Sub i Ned · 09 - 15h</span>
        </div>
        <div style="margin-top:36px">
          <?= hc_eyebrow('Stranice', true) ?>
          <div class="hc-footer__links">
            <a href="<?= hc_e(hc_url('about')) ?>">O nama</a>
            <a href="<?= hc_e(hc_url('dragana')) ?>">Dragana Kanjevac</a>
            <a href="<?= hc_e(hc_url('usluge')) ?>">Usluge i cenovnik</a>
            <a href="<?= hc_e(hc_url('metoda')) ?>">O Pilates metodi</a>
            <a href="<?= hc_e(hc_url('edu-savremeni')) ?>">Edukacija</a>
          </div>
        </div>
      </div>
    </div>

    <hr class="hc-rule hc-rule--dark" style="margin:60px 0 28px">
    <div class="hc-footer__bottom">
      <span>© <?= date('Y') ?> HeartCore Studio · Sva prava zadržana</span>
      <span>Beograd</span>
    </div>
  </div>
</footer>
