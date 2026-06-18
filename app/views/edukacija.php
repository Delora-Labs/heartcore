<?php /** @var array $edu @var array $data */ $e = $edu;
$otherKey = $e['key'] === 'edu-klasicni' ? 'edu-savremeni' : 'edu-klasicni';
$other = $data['education'][$otherKey];
?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span>—</span><span>Edukacija</span><span>—</span><span class="cur"><?= hc_e($e['title']) ?></span></div>
      <div <?= hc_reveal() ?>><?= hc_eyebrow($e['subtitle'], false, 'margin-top:40px;display:block') ?></div>
      <h1 <?= hc_reveal(100, 'hc-title hc-title--lg') ?> style="margin-top:24px;max-width:1200px"><?= hc_e($e['title']) ?>.</h1>
      <p <?= hc_reveal(200) ?> style="margin-top:32px;font-size:17px;line-height:1.75;color:var(--hc-grey-700);max-width:740px"><?= hc_e($e['intro']) ?></p>

      <div <?= hc_reveal(350) ?> class="edu-meta" style="margin-top:64px">
        <?php foreach ($e['meta'] as [$k, $v]): ?>
          <div><small><?= hc_e($k) ?></small> <b><?= hc_e($v) ?></b></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="hc-section bg-paper">
    <div class="hc-container">
      <?= hc_eyebrow('Program') ?>
      <h2 class="hc-title hc-title--md" style="margin-top:16px;margin-bottom:56px;margin-left:-3px">Šest modula.</h2>
      <div class="edu-modules">
        <?php foreach ($e['modules'] as $i => [$no, $title, $body]): ?>
          <div class="edu-module hc-fade" data-delay="<?= $i * 70 ?>">
            <div style="display:flex;align-items:baseline;gap:16px">
              <span class="edu-module__no"><?= hc_e($no) ?>.</span>
              <h3><?= hc_e($title) ?></h3>
            </div>
            <p><?= hc_e($body) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="hc-section bg-white">
    <div class="hc-container">
      <?= hc_eyebrow('Drugi program') ?>
      <a href="<?= hc_e(hc_url($otherKey)) ?>" style="display:block;margin-top:24px">
        <div style="padding:32px 0;border-top:1px solid var(--hc-line);border-bottom:1px solid var(--hc-line);display:flex;justify-content:space-between;align-items:center;gap:24px;flex-wrap:wrap">
          <h3 class="hc-serif" style="font-size:clamp(28px,3vw,44px);font-weight:300"><?= hc_e($other['title']) ?></h3>
          <span style="font-size:12px;letter-spacing:.2em;text-transform:uppercase">Pogledajte →</span>
        </div>
      </a>
    </div>
  </section>

  <section class="bg-sand-soft" style="padding-block:var(--hc-section-py)">
    <div class="hc-container hc-container--narrow" style="text-align:center">
      <h2 class="hc-title hc-title--md">Zainteresovani za edukaciju?</h2>
      <p style="margin-top:24px;max-width:520px;margin-inline:auto;font-size:15px;line-height:1.7;color:var(--hc-grey-700)">Javite nam se za detalje o programu, terminima i naknadi.</p>
      <div style="margin-top:36px"><?= hc_btn('kontakt', 'Pišite nam') ?></div>
    </div>
  </section>
</main>
