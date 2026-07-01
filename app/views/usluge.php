<?php /** @var array $data */ ?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span> - </span><span class="cur">Usluge i cenovnik</span></div>
      <div <?= hc_reveal() ?>><?= hc_eyebrow('Usluge', false, 'margin-top:40px;display:block') ?></div>
      <h1 <?= hc_reveal(100, 'hc-title hc-title--xl') ?> style="margin-top:24px">Programi i<br><em>cenovnik.</em></h1>
      <p <?= hc_reveal(200) ?> style="margin-top:32px;font-size:17px;line-height:1.7;color:var(--hc-grey-700);max-width:720px">
        Pažljivo osmišljeni pilates programi koji kombinuju stručnost, individualni pristup i najviše standarde rada, prilagođeni različitim nivoima iskustva i potrebama vežbača.
      </p>
    </div>
  </section>

  <!-- SERVICES + PRICES (one responsive table; cards on mobile) -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <div style="margin-bottom:48px">
        <?= hc_eyebrow('Pregled usluga i cene') ?>
        <h2 class="hc-title hc-title--md" style="margin-top:16px">Šta nudimo.</h2>
      </div>

      <table class="svc-table">
        <thead>
          <tr><th class="svc-table__c-name">Usluga</th><th class="svc-table__c-desc">Opis</th><th class="svc-table__c-price">Cena</th></tr>
        </thead>
        <tbody>
          <?php $prevGroup = null; foreach ($data['pricing'] as $i => $p): ?>
            <?php if ($p['group'] !== $prevGroup): $prevGroup = $p['group']; ?>
              <tr class="svc-table__group"><td colspan="3"><?= hc_e($p['group']) ?></td></tr>
            <?php endif; ?>
            <tr class="svc-row hc-fade" data-delay="<?= ($i % 6) * 40 ?>">
              <td data-label="Usluga" class="svc-row__name"><?= hc_e($p['name']) ?></td>
              <td data-label="Opis" class="svc-row__desc"><?= hc_e($p['desc']) ?></td>
              <td data-label="Cena" class="svc-row__price">
                <?php foreach ($p['options'] as [$unit, $price]): ?>
                  <span class="svc-price">
                    <?php if ($unit !== ''): ?><span class="svc-price__unit"><?= hc_e($unit) ?></span><?php endif; ?>
                    <span class="svc-price__amt"><?= hc_e($price) ?></span>
                  </span>
                <?php endforeach; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <p <?= hc_reveal(200) ?> style="margin-top:48px;font-size:13px;line-height:1.8;color:var(--hc-grey-500);max-width:760px">
        Za sve programe i pakete kontaktirajte studio radi rasporeda i dostupnih termina.
      </p>
    </div>
  </section>

  <section class="bg-sand-soft" style="padding-block:var(--hc-section-py)">
    <div class="hc-container hc-container--narrow" style="text-align:center">
      <h2 class="hc-title hc-title--md">Spremni da počnete?</h2>
      <div style="margin-top:36px"><?= hc_btn('kontakt', 'Zakažite čas') ?></div>
    </div>
  </section>
</main>
