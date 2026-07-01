<?php /** @var array $data */ $d = $data['dragana']; ?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span> - </span><a href="<?= hc_e(hc_url('about')) ?>">O nama</a><span> - </span><span class="cur">Dragana Kanjevac</span></div>
    </div>
  </section>

  <section class="bg-white" style="padding-bottom:var(--hc-section-py)">
    <div class="hc-container">
      <div class="dragana-hero">
        <div class="dragana-hero__header">
          <div <?= hc_reveal() ?>><?= hc_eyebrow($d['role']) ?></div>
          <h1 <?= hc_reveal(100, 'hc-title hc-title--xl') ?> style="margin-top:20px">Dragana<br><em>Kanjevac.</em></h1>
        </div>

        <div class="dragana-hero__media" <?= hc_reveal() ?>>
          <?= hc_photo(['src' => 'dragana', 'ratio' => '4 / 5', 'eager' => true, 'alt' => 'Dragana Kanjevac, vlasnica HeartCore studija']) ?>

          <!-- Lineage -->
          <div style="margin-top:32px;padding-top:28px;border-top:1px solid var(--hc-line)">
            <?= hc_eyebrow('Treća generacija učitelja') ?>
            <ol class="lineage">
              <?php $n = count($d['lineage']); foreach ($d['lineage'] as $i => $name): $last = $i === $n - 1; ?>
                <li class="lineage__node hc-fade<?= $last ? ' is-current' : '' ?>" data-delay="<?= 150 + $i * 150 ?>">
                  <span class="lineage__no"><?= $i ?></span>
                  <span class="lineage__name hc-serif"><?= hc_e($name) ?></span>
                </li>
                <?php if (!$last): ?>
                  <li class="lineage__arrow" style="animation-delay:<?= $i * 0.3 ?>s" aria-hidden="true">↓</li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>

        <div class="dragana-hero__body">
          <p <?= hc_reveal(250) ?> class="hc-serif hc-italic" style="font-size:clamp(22px,2vw,30px);line-height:1.4;color:var(--hc-clay)">„<?= hc_e($d['quote']) ?>“</p>
          <?php foreach ($d['bio'] as $i => $para): ?>
            <p <?= hc_reveal(350 + $i * 90) ?> style="margin-top:<?= $i === 0 ? 32 : 20 ?>px;font-size:15px;line-height:1.85;color:var(--hc-grey-700)"><?= hc_e($para) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- REFERENCES - change request #17: bullets, but framed and as squares -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <div class="section-head" style="margin-bottom:48px">
        <div <?= hc_reveal() ?>>
          <?= hc_eyebrow('Reference') ?>
          <h2 class="hc-title hc-title--md" style="margin-top:16px">Edukacije i seminari.</h2>
        </div>
      </div>
      <div class="ref-pills" <?= hc_reveal(100) ?>>
        <?php foreach ($d['references'] as [$year, $text]): ?>
          <span class="ref-pill"><em><?= hc_e($year) ?></em> <?= hc_e($text) ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="bg-sand-soft" style="padding-block:var(--hc-section-py)">
    <div class="hc-container hc-container--narrow" style="text-align:center">
      <h2 class="hc-title hc-title--md">Vežbajte sa nama.</h2>
      <div style="margin-top:36px"><?= hc_btn('kontakt', 'Zakažite čas') ?></div>
    </div>
  </section>
</main>
