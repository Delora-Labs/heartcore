<?php /** @var array $data */ ?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span>—</span><span class="cur">O nama</span></div>
      <div <?= hc_reveal() ?>><?= hc_eyebrow('Naša priča', false, 'margin-top:40px;display:block') ?></div>
      <h1 <?= hc_reveal(100, 'hc-title hc-title--xl') ?> style="margin-top:24px">Studio koji čuva<br><em>autentičnu metodu.</em></h1>
    </div>
  </section>

  <!-- MISSION — change request #13 (real photo), #12 (no 01–04 block) -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:.85fr 1.15fr;gap:clamp(40px,7vw,100px);align-items:start">
        <div <?= hc_reveal() ?>>
          <?= hc_photo(['src' => 'dynamic-2', 'ratio' => '3 / 4', 'alt' => 'HeartCore studio — rad sa telom']) ?>
          <div style="margin-top:20px;font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:var(--hc-grey-500)">HeartCore Studio · Beograd</div>
        </div>
        <div>
          <div <?= hc_reveal() ?>><?= hc_eyebrow('Misija') ?></div>
          <h2 <?= hc_reveal(100) ?> class="hc-serif" style="margin-top:20px;font-size:clamp(34px,4vw,52px);font-weight:300;line-height:1.15">Očuvanje autentične pilates metode.</h2>
          <?php foreach ($data['mission'] as $i => $para): ?>
            <p <?= hc_reveal(250 + $i * 120) ?> style="margin-top:<?= $i === 0 ? 36 : 24 ?>px;font-size:16px;line-height:1.85;color:var(--hc-grey-700)"><?= hc_e($para) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- VISION -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1.15fr .85fr;gap:clamp(40px,7vw,100px);align-items:center">
        <div>
          <div <?= hc_reveal() ?>><?= hc_eyebrow('Vizija') ?></div>
          <h2 <?= hc_reveal(100) ?> class="hc-serif" style="margin-top:20px;font-size:clamp(34px,4vw,52px);font-weight:300;line-height:1.15">Dugovečnost i funkcionalnost <em>kroz sve faze života.</em></h2>
          <?php foreach ($data['vision'] as $i => $para): ?>
            <p <?= hc_reveal(250 + $i * 120) ?> style="margin-top:<?= $i === 0 ? 36 : 24 ?>px;font-size:16px;line-height:1.85;color:var(--hc-grey-700)"><?= hc_e($para) ?></p>
          <?php endforeach; ?>
        </div>
        <div <?= hc_reveal(150) ?>><?= hc_photo(['src' => 'pose-3', 'ratio' => '4 / 5', 'variant' => 'sand', 'alt' => 'Pilates — balans tela i uma']) ?></div>
      </div>
    </div>
  </section>

  <!-- FOUNDER teaser — no cert chips here (change request #15); link to dedicated page (#16) -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1fr 1.2fr;gap:clamp(40px,7vw,100px);align-items:center">
        <div <?= hc_reveal() ?>><?= hc_photo(['src' => 'dragana', 'ratio' => '4 / 5', 'alt' => 'Dragana Kanjevac']) ?></div>
        <div>
          <div <?= hc_reveal() ?>><?= hc_eyebrow('Vlasnica studija') ?></div>
          <h2 <?= hc_reveal(100, 'hc-title hc-title--md') ?> style="margin-top:20px">Dragana<br><em>Kanjevac.</em></h2>
          <p <?= hc_reveal(250) ?> class="hc-serif hc-italic" style="margin-top:32px;font-size:clamp(20px,1.8vw,26px);line-height:1.45;color:var(--hc-grey-700)">„<?= hc_e($data['dragana']['quote']) ?>“</p>
          <p <?= hc_reveal(400) ?> style="margin-top:28px;font-size:15px;line-height:1.85;color:var(--hc-grey-700);max-width:520px"><?= hc_e($data['dragana']['bio'][0]) ?></p>
          <div <?= hc_reveal(550) ?> style="margin-top:36px"><?= hc_link_arrow('dragana', 'Cela biografija i reference') ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM — change request #18: no years of work -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <div class="section-head">
        <div <?= hc_reveal() ?>>
          <?= hc_eyebrow('Tim') ?>
          <h2 class="hc-title hc-title--md" style="margin-top:16px">Naši instruktori.</h2>
        </div>
        <p <?= hc_reveal(150) ?> style="max-width:400px;font-size:14px;line-height:1.7;color:var(--hc-grey-700)">
          Instruktorke sa različitim putevima ka pilatesu, ujedinjene posvećenošću pravilnoj tehnici i autentičnoj metodi.
        </p>
      </div>

      <div class="team-grid">
        <?php foreach ($data['team'] as $i => $tm): ?>
          <article <?= hc_reveal($i * 80) ?>>
            <!-- Individual instructor portraits not supplied; brand monogram placeholder until provided. -->
            <div class="team-card__photo team-monogram"><span><?= hc_e(mb_substr($tm['name'], 0, 1)) ?></span></div>
            <div style="margin-top:20px">
              <h3 class="team-card__name"><?= hc_e($tm['name']) ?></h3>
              <div class="team-card__role"><?= hc_e($tm['role']) ?></div>
              <p style="margin-top:14px;font-size:14px;line-height:1.75;color:var(--hc-grey-700)"><?= hc_e($tm['bio']) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
