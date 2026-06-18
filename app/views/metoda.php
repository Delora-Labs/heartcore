<?php /** @var array $data */ $m = $data['method']; ?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span>—</span><span class="cur">O Pilates metodi</span></div>
      <div <?= hc_reveal() ?>><?= hc_eyebrow('Metoda', false, 'margin-top:40px;display:block') ?></div>
      <h1 <?= hc_reveal(100, 'hc-title hc-title--xl') ?> style="margin-top:24px;max-width:1100px">Sto godina<br><em>jednog pokreta.</em></h1>
      <p <?= hc_reveal(250) ?> style="margin-top:36px;font-size:18px;line-height:1.7;color:var(--hc-grey-700);max-width:760px"><?= hc_e($m['intro']) ?></p>
      <p <?= hc_reveal(350) ?> style="margin-top:20px;font-size:16px;line-height:1.7;color:var(--hc-grey-700);max-width:760px"><?= hc_e($m['intro2']) ?></p>
    </div>
  </section>

  <!-- SIX PRINCIPLES + photos (change request #10) -->
  <section class="bg-cream" style="padding-block:clamp(48px,6vw,80px)">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1.3fr 1fr;gap:clamp(32px,5vw,72px);align-items:center">
        <div>
          <?= hc_eyebrow('Šest principa') ?>
          <div style="margin-top:28px;display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
            <?php foreach ($m['principles'] as $i => $p): ?>
              <div <?= hc_reveal($i * 70) ?> style="border-top:1px solid var(--hc-grey-300);padding-top:14px">
                <span class="hc-serif hc-italic" style="font-size:22px;color:var(--hc-clay)"><?= sprintf('%02d', $i + 1) ?></span>
                <div style="margin-top:6px;font-size:14px;letter-spacing:.04em;color:var(--hc-grey-700)"><?= hc_e($p) ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div <?= hc_reveal(150) ?>><?= hc_photo(['src' => 'dynamic-3', 'ratio' => '3 / 4', 'alt' => 'Pilates — kontrola i preciznost']) ?></div>
      </div>
    </div>
  </section>

  <!-- JOSEPH PILATES -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1fr 1.4fr;gap:clamp(40px,7vw,100px)">
        <div>
          <div <?= hc_reveal() ?>>
            <!-- No archival Joseph Pilates photo was supplied; labelled placeholder until one is provided (change request #11). -->
            <?= hc_photo(['src' => 'joseph', 'ratio' => '3 / 4', 'variant' => 'dark', 'alt' => 'Joseph H. Pilates']) ?>
          </div>
          <div <?= hc_reveal(150) ?> style="margin-top:20px;font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:var(--hc-grey-500)">Joseph H. Pilates · 1883 — 1967</div>
        </div>
        <div>
          <div <?= hc_reveal() ?>><?= hc_eyebrow('Tvorac metode') ?></div>
          <h2 <?= hc_reveal(100) ?> class="hc-serif" style="margin-top:20px;font-size:clamp(38px,4.6vw,64px);font-weight:300;line-height:1.05">Jozef Pilates i njegova<br><em>„Contrology“.</em></h2>
          <?php foreach ($m['joseph'] as $i => $para): ?>
            <p <?= hc_reveal(250 + $i * 100) ?> style="margin-top:<?= $i === 0 ? 32 : 20 ?>px;font-size:16px;line-height:1.8;color:var(--hc-grey-700)"><?= hc_e($para) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- CLASSICAL vs CONTEMPORARY -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <div <?= hc_reveal() ?>><?= hc_eyebrow('Dve škole') ?></div>
      <h2 <?= hc_reveal(100, 'hc-title hc-title--md') ?> style="margin-top:16px;margin-bottom:64px">Klasični i savremeni pilates.</h2>
      <div class="compare-grid">
        <?php foreach ([['01', $m['classical']], ['02', $m['contemporary']]] as [$no, $col]): ?>
          <div class="compare-card">
            <small>Pristup <?= $no ?></small>
            <h3><?= hc_e($col['title']) ?></h3>
            <p><?= hc_e($col['desc']) ?></p>
            <ul class="check-list">
              <?php foreach ($col['points'] as $pt): ?>
                <li style="font-size:13px"><?= hc_diamond(8, 'var(--hc-grey-500)') ?> <?= hc_e($pt) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>

      <div <?= hc_reveal(150) ?> class="notice" style="margin-top:48px">
        <div style="font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--hc-grey-700);margin-bottom:10px">Pilates aparatusi</div>
        <p style="font-size:14px;line-height:1.7;color:var(--hc-grey-700)"><?= hc_e($m['apparatus']) ?></p>
      </div>
    </div>
  </section>

  <!-- QUOTE -->
  <section class="bg-cream" style="padding-block:var(--hc-section-py)">
    <div class="hc-container">
      <div class="grid" style="grid-template-columns:auto 1fr auto;gap:clamp(32px,5vw,72px);align-items:center;max-width:1100px;margin:0 auto;padding-block:clamp(32px,5vw,64px);border-top:1px solid var(--hc-grey-300);border-bottom:1px solid var(--hc-grey-300)">
        <div class="hc-serif hc-italic" aria-hidden="true" style="font-size:clamp(80px,10vw,140px);line-height:.7;color:var(--hc-clay)">“</div>
        <div>
          <p class="hc-serif hc-italic" style="font-size:clamp(24px,3vw,38px);font-weight:300;line-height:1.35;color:var(--hc-black)"><?= hc_e($m['quote']) ?></p>
          <div style="margin-top:28px;display:flex;align-items:center;gap:14px;font-size:11px;letter-spacing:.22em;text-transform:uppercase;color:var(--hc-grey-700)">
            <span style="width:32px;height:1px;background:var(--hc-grey-500)"></span> Jozef Pilates <span style="color:var(--hc-grey-500)">· tvorac metode</span>
          </div>
        </div>
        <div style="width:120px;height:150px;overflow:hidden" class="hide-narrow"><?= hc_photo(['src' => 'pose-2', 'ratio' => '4 / 5', 'alt' => 'Pilates pokret']) ?></div>
      </div>
    </div>
  </section>
</main>
