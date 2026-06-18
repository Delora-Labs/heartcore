<?php /** @var array $studio @var array $config @var array $data */
$s = $studio;
$c = $config['contact'];

if (!$s['open']):
  /* Dedinje — change request #8: not open yet, show only "USKORO". */
?>
<main style="padding-top:0">
  <section class="soon-hero">
    <div class="soon-hero__bg"><?= hc_photo(['src' => $s['hero'], 'ratio' => 'auto', 'variant' => 'dark', 'eager' => true, 'alt' => $s['name'] . ' — Dedinje', 'style' => 'width:100%;height:100%']) ?></div>
    <div class="soon-hero__inner hc-container hc-container--narrow">
      <span class="badge-soon" style="background:var(--hc-white)">Uskoro</span>
      <h1 class="hc-title hc-title--xl hc-title--light" style="margin-top:28px"><?= hc_e($s['name']) ?><br><em><?= hc_e($s['place']) ?>.</em></h1>
      <p style="margin-top:32px;max-width:620px;margin-inline:auto;font-size:16px;line-height:1.75;color:rgba(250,250,250,.85)">
        <?= hc_e($s['lead']) ?>
      </p>
      <div style="margin-top:40px;display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <?= hc_btn('vozdovac', 'Posetite Voždovac', 'invert') ?>
        <?= hc_btn('kontakt', 'Pišite nam', 'ghost-light') ?>
      </div>
    </div>
  </section>

  <section class="hc-section bg-white">
    <div class="hc-container hc-container--tight" style="text-align:center">
      <?= hc_eyebrow($s['eyebrow']) ?>
      <h2 class="hc-title hc-title--sm" style="margin-top:20px">Klasičan studio<br><em>u srcu Dedinja.</em></h2>
      <p style="margin-top:28px;font-size:16px;line-height:1.85;color:var(--hc-grey-700)"><?= hc_e($s['body']) ?></p>
      <ul class="check-list" style="margin-top:36px;display:inline-flex;text-align:left">
        <?php foreach ($s['spec'] as $item): ?>
          <li><?= hc_diamond(8, 'var(--hc-grey-500)') ?> <?= hc_e($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</main>
<?php
  return;
endif;

/* Voždovac — full studio page */
?>
<main style="padding-top:0">
  <section style="position:relative;min-height:80vh;color:var(--hc-white)">
    <div style="position:absolute;inset:0;overflow:hidden">
      <?= hc_photo(['src' => $s['hero'], 'ratio' => 'auto', 'variant' => 'dark', 'eager' => true, 'alt' => $s['name'] . ' — ' . $s['place'], 'style' => 'width:100%;height:100%']) ?>
      <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.5) 0%,rgba(0,0,0,.15) 30%,rgba(0,0,0,.55) 100%)"></div>
    </div>
    <div style="position:relative;min-height:80vh;display:flex;flex-direction:column;justify-content:flex-end;padding-bottom:clamp(60px,10vh,120px);padding-top:200px">
      <div class="hc-container">
        <div class="hc-crumb hc-crumb--light" style="margin-bottom:32px">
          <a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span>—</span><span>Studiji</span><span>—</span><span class="cur"><?= hc_e($s['place']) ?></span>
        </div>
        <div <?= hc_reveal(150) ?>><?= hc_eyebrow($s['tagline'], true) ?></div>
        <h1 <?= hc_reveal(300, 'hc-title hc-title--xl hc-title--light') ?> style="margin-top:28px"><?= hc_e($s['name']) ?><br><em><?= hc_e($s['place']) ?>.</em></h1>
        <p <?= hc_reveal(500) ?> style="margin-top:32px;max-width:680px;font-size:17px;line-height:1.7;color:rgba(250,250,250,.85)"><?= hc_e($s['lead']) ?></p>
      </div>
    </div>
  </section>

  <section class="hc-section bg-white">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1fr 1.4fr;gap:clamp(40px,8vw,120px)">
        <div>
          <div <?= hc_reveal() ?>><?= hc_eyebrow($s['tagline']) ?></div>
          <h2 <?= hc_reveal(100) ?> class="hc-serif" style="margin-top:20px;font-size:clamp(36px,4vw,52px);font-weight:300;line-height:1.05">Prostor osmišljen za <em>tišinu i fokus.</em></h2>
        </div>
        <div>
          <p <?= hc_reveal(150) ?> style="font-size:15px;line-height:1.85;color:var(--hc-grey-700)"><?= hc_e($s['body']) ?> Neutralna paleta, prirodni materijali i dnevna svetlost — sve je tu da telo dobije punu pažnju.</p>
          <ul <?= hc_reveal(250) ?> class="spec-list">
            <?php foreach ($s['spec'] as $item): ?>
              <li><?= hc_diamond(8, 'var(--hc-grey-500)') ?> <?= hc_e($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY — change request #4: 2-3 photos of the studio -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <?= hc_eyebrow('Galerija') ?>
      <h2 class="hc-title hc-title--md" style="margin-top:16px;margin-bottom:56px">Profesionalni prostor sa potpunom opremom.</h2>
      <div class="grid" style="grid-template-columns:1.4fr 1fr;gap:16px" data-gallery>
        <?= hc_photo(['src' => $s['photos'][1], 'ratio' => '3 / 4', 'alt' => $s['place'] . ' — studio']) ?>
        <div class="grid" style="grid-template-rows:1fr 1fr;gap:16px">
          <?= hc_photo(['src' => $s['photos'][2], 'ratio' => 'auto', 'variant' => 'sand', 'style' => 'height:100%', 'alt' => $s['place'] . ' — oprema']) ?>
          <?= hc_photo(['src' => $s['photos'][3], 'ratio' => 'auto', 'style' => 'height:100%', 'alt' => $s['place'] . ' — detalj']) ?>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO -->
  <section class="hc-section bg-black">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1fr 1fr;gap:clamp(40px,6vw,80px)">
        <div>
          <?= hc_eyebrow('Lokacija i kontakt', true) ?>
          <h2 class="hc-serif hc-title--light" style="margin-top:20px;font-size:clamp(36px,4vw,56px);font-weight:300;line-height:1.05">Posetite nas.</h2>
          <div style="margin-top:40px;display:flex;flex-direction:column;gap:24px;font-size:14px">
            <?php foreach ([['Adresa', $s['addr']], ['Telefon', $c['phone_display']], ['E-mail', $c['email']]] as [$k, $v]): ?>
              <div style="display:flex;gap:24px">
                <span style="width:100px;flex:0 0 100px;font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:rgba(250,250,250,.5);padding-top:4px"><?= hc_e($k) ?></span>
                <span style="font-size:15px;color:var(--hc-white)"><?= hc_e($v) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
          <div style="margin-top:40px;padding-top:32px;border-top:1px solid rgba(250,250,250,.15)">
            <?= hc_eyebrow('Radno vreme', true) ?>
            <div style="margin-top:20px;display:flex;flex-direction:column;gap:14px">
              <?php foreach ($c['hours'] as [$day, $time]): ?>
                <div style="display:flex;justify-content:space-between;padding-bottom:14px;border-bottom:1px solid rgba(250,250,250,.08);font-size:14px">
                  <span style="color:rgba(250,250,250,.7)"><?= hc_e($day) ?></span>
                  <span class="hc-serif" style="font-size:18px"><?= hc_e($time) ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div style="margin-top:40px"><?= hc_btn('kontakt', 'Zakažite čas', 'invert') ?></div>
        </div>
        <div>
          <iframe title="Mapa — <?= hc_e($s['place']) ?>" width="100%" height="100%" style="border:0;min-height:420px;filter:grayscale(1) contrast(.9) sepia(.15)" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            src="https://maps.google.com/maps?q=<?= rawurlencode($s['addr']) ?>&output=embed"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- OTHER STUDIO -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <?= hc_eyebrow('Drugi studio') ?>
      <?php $other = $data['studios']['dedinje']; ?>
      <a href="<?= hc_e(hc_url($other['key'])) ?>" style="display:block;margin-top:24px">
        <div class="grid" style="grid-template-columns:1fr 1.6fr;gap:32px;align-items:center;padding:32px 0;border-top:1px solid var(--hc-line);border-bottom:1px solid var(--hc-line)">
          <?= hc_photo(['src' => $other['photos'][0], 'ratio' => '3 / 2', 'alt' => $other['name']]) ?>
          <div style="display:flex;justify-content:space-between;align-items:center;gap:24px">
            <div>
              <span style="font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--hc-grey-500)"><?= hc_e($other['place']) ?> · uskoro</span>
              <h3 class="hc-serif" style="margin-top:8px;font-size:clamp(32px,4vw,60px);font-weight:300"><?= hc_e($other['name']) ?></h3>
            </div>
            <span style="font-size:12px;letter-spacing:.2em;text-transform:uppercase">Pogledajte →</span>
          </div>
        </div>
      </a>
    </div>
  </section>
</main>
