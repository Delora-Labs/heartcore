<?php /** @var array $form @var array $config */
$c = $config['contact'];
$v = $form['values'] ?? [];
$err = $form['errors'] ?? [];
$sent = !empty($form['sent']);
$studio = $v['studio'] ?? 'vozdovac';
$val = fn($k) => hc_e($v[$k] ?? '');
?>
<main style="padding-top:100px">
  <section class="hc-section bg-white" style="padding-top:60px">
    <div class="hc-container">
      <div class="hc-crumb"><a href="<?= hc_e(hc_url('home')) ?>">Početna</a><span> - </span><span class="cur">Kontakt</span></div>
      <div <?= hc_reveal() ?>><?= hc_eyebrow('Pišite nam', false, 'margin-top:40px;display:block') ?></div>
      <h1 <?= hc_reveal(100, 'hc-title hc-title--xl') ?> style="margin-top:24px">Razgovor pre<br><em>prvog časa.</em></h1>
      <p <?= hc_reveal(200) ?> style="margin-top:32px;font-size:17px;line-height:1.75;color:var(--hc-grey-700);max-width:640px">
        Pošaljite poruku, javljamo se u toku istog dana. Ostavite par redova o tome šta tražite i preporučićemo termin i program koji vam najviše odgovaraju.
      </p>
    </div>
  </section>

  <section class="hc-section bg-paper" style="padding-top:0">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1.2fr 1fr;gap:clamp(40px,6vw,80px)">

        <div <?= hc_reveal() ?>>
          <?php if ($sent): ?>
            <div style="background:var(--hc-white);padding:clamp(32px,4vw,56px);border:1px solid var(--hc-line);text-align:center">
              <div style="padding:48px 0">
                <?= hc_diamond(14, 'var(--hc-clay)') ?>
                <h3 class="hc-serif" style="margin-top:28px;font-size:32px;font-weight:400">Hvala vam.</h3>
                <p style="margin-top:16px;font-size:14px;color:var(--hc-grey-700)">Vaša poruka je poslata. Javljamo se u najkraćem roku.</p>
                <div style="margin-top:32px"><?= hc_btn('kontakt', 'Pošaljite još jednu', 'ghost') ?></div>
              </div>
            </div>
          <?php else: ?>
            <form method="post" action="<?= hc_e(hc_url('kontakt')) ?>" style="background:var(--hc-white);padding:clamp(32px,4vw,56px);border:1px solid var(--hc-line)" novalidate>
              <!-- honeypot -->
              <div style="position:absolute;left:-9999px" aria-hidden="true">
                <label>Website<input type="text" name="website" tabindex="-1" autocomplete="off"></label>
              </div>

              <div class="field<?= isset($err['ime']) ? ' field--error' : '' ?>">
                <label>Ime i prezime <span class="field__req">*</span></label>
                <input type="text" name="ime" value="<?= $val('ime') ?>" required>
                <?php if (isset($err['ime'])): ?><div class="field__err"><?= hc_e($err['ime']) ?></div><?php endif; ?>
              </div>

              <div class="grid form-row" style="grid-template-columns:1fr 1fr;gap:24px">
                <div class="field<?= isset($err['email']) ? ' field--error' : '' ?>">
                  <label>E-mail <span class="field__req">*</span></label>
                  <input type="email" name="email" value="<?= $val('email') ?>" required>
                  <?php if (isset($err['email'])): ?><div class="field__err"><?= hc_e($err['email']) ?></div><?php endif; ?>
                </div>
                <div class="field">
                  <label>Telefon</label>
                  <input type="tel" name="telefon" value="<?= $val('telefon') ?>">
                </div>
              </div>

              <div class="field">
                <label>Studio</label>
                <div class="studio-toggle" data-studio-toggle>
                  <?php foreach ([['vozdovac', 'Voždovac'], ['dedinje', 'Dedinje'], ['bilo-koji', 'Bilo koji']] as [$k, $l]): ?>
                    <button type="button" data-value="<?= $k ?>" class="<?= $studio === $k ? 'is-on' : '' ?>"><?= hc_e($l) ?></button>
                  <?php endforeach; ?>
                </div>
                <input type="hidden" name="studio" data-studio-input value="<?= hc_e($studio) ?>">
              </div>

              <div class="field<?= isset($err['poruka']) ? ' field--error' : '' ?>">
                <label>Poruka <span class="field__req">*</span></label>
                <textarea name="poruka" rows="5" required><?= $val('poruka') ?></textarea>
                <?php if (isset($err['poruka'])): ?><div class="field__err"><?= hc_e($err['poruka']) ?></div><?php endif; ?>
              </div>

              <div style="margin-top:32px">
                <button type="submit" class="hc-btn"><span>Pošaljite poruku</span>
                  <svg viewBox="0 0 18 6" fill="none" aria-hidden="true"><path d="M0 3H17M17 3L14 1M17 3L14 5" stroke="currentColor" stroke-width="1"/></svg>
                </button>
              </div>
            </form>
          <?php endif; ?>
        </div>

        <div <?= hc_reveal(150) ?>>
          <?= hc_eyebrow('Kontakt informacije') ?>
          <div style="margin-top:32px;display:flex;flex-direction:column;gap:36px">
            <div class="contact-block">
              <h3>HeartCore - Voždovac</h3>
              <div style="margin-top:16px;display:flex;flex-direction:column;gap:10px">
                <div class="row"><span>Adresa</span><span>Vojvode Stepe 259, Beograd</span></div>
                <div class="row"><span>Telefon</span><span><a href="tel:<?= hc_e($c['phone_href']) ?>"><?= hc_e($c['phone_display']) ?></a></span></div>
                <div class="row"><span>E-mail</span><span><a href="mailto:<?= hc_e($c['email']) ?>"><?= hc_e($c['email']) ?></a></span></div>
                <?php foreach ($c['hours'] as [$day, $time]): ?>
                  <div class="row"><span><?= hc_e($day) ?></span><span><?= hc_e($time) ?></span></div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="contact-block">
              <h3>HeartCore Classical - Dedinje</h3>
              <div style="margin-top:16px;display:flex;flex-direction:column;gap:10px">
                <div class="row"><span>Adresa</span><span>Dedinje, Beograd</span></div>
                <div class="row"><span>Status</span><span>Uskoro otvaramo</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-black">
    <iframe title="HeartCore - Voždovac, Beograd" width="100%" height="460" style="border:0;display:block;filter:grayscale(1) contrast(.9) sepia(.15)" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
      src="https://maps.google.com/maps?q=<?= rawurlencode('Vojvode Stepe 259, Beograd') ?>&output=embed"></iframe>
  </section>
</main>
