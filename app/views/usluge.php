<?php /** @var array $data */ ?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span>—</span><span class="cur">Usluge i cenovnik</span></div>
      <div <?= hc_reveal() ?>><?= hc_eyebrow('Usluge', false, 'margin-top:40px;display:block') ?></div>
      <h1 <?= hc_reveal(100, 'hc-title hc-title--xl') ?> style="margin-top:24px">Programi i<br><em>cenovnik.</em></h1>
      <p <?= hc_reveal(200) ?> style="margin-top:32px;font-size:17px;line-height:1.7;color:var(--hc-grey-700);max-width:720px">
        Pažljivo osmišljeni pilates programi koji kombinuju stručnost, individualni pristup i najviše standarde rada — prilagođeni različitim nivoima iskustva i potrebama vežbača.
      </p>
    </div>
  </section>

  <!-- SERVICE LIST -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <?= hc_eyebrow('Pregled usluga') ?>
      <h2 class="hc-title hc-title--md" style="margin-top:16px;margin-bottom:56px">Šta nudimo.</h2>
      <div>
        <?php foreach ($data['services'] as $i => $s): ?>
          <div class="service-row hc-fade" data-delay="<?= $i * 40 ?>">
            <span class="service-row__no"><?= sprintf('%02d', $i + 1) ?></span>
            <h3><?= hc_e($s['name']) ?></h3>
            <p><?= hc_e($s['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <div style="margin-bottom:56px">
        <?= hc_eyebrow('Cenovnik') ?>
        <h2 class="hc-title hc-title--md" style="margin-top:16px">Cene.</h2>
      </div>
      <div class="price-grid">
        <?php
          $tables = [
            ['Individualni i duo', 'Klasični i savremeni', $data['prices_individual']],
            ['Grupni i specijalizovani', 'Programi u malim grupama', $data['prices_group']],
          ];
          foreach ($tables as [$title, $sub, $rows]):
        ?>
          <div <?= hc_reveal() ?>>
            <div class="price-block__head"><small><?= hc_e($sub) ?></small><h3><?= hc_e($title) ?></h3></div>
            <table class="price-table">
              <thead><tr><th>Program</th><th class="dur" style="text-align:center;width:110px">Jedinica</th><th class="price" style="text-align:right;width:130px">Cena</th></tr></thead>
              <tbody>
                <?php foreach ($rows as [$prog, $dur, $price]): ?>
                  <tr><td><?= hc_e($prog) ?></td><td class="dur"><?= hc_e($dur) ?></td><td class="price"><?= hc_e($price) ?></td></tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endforeach; ?>
      </div>
      <p <?= hc_reveal(200) ?> style="margin-top:56px;font-size:13px;line-height:1.8;color:var(--hc-grey-500);text-align:center;max-width:760px;margin-inline:auto">
        Trio časovi — klasični pilates dostupni su na upit. Za sve programe i pakete kontaktirajte studio radi rasporeda i dostupnih termina.
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
