<?php /** @var array $data @var array $config */ ?>
<main>
  <!-- HERO -->
  <section style="position:relative;min-height:100vh;color:var(--hc-white)">
    <div style="position:absolute;inset:0;overflow:hidden">
      <?= hc_photo(['src' => 'hero', 'ratio' => 'auto', 'variant' => 'dark', 'eager' => true, 'alt' => 'HeartCore pilates studio — Voždovac', 'style' => 'width:100%;height:100%']) ?>
      <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.5) 0%,rgba(0,0,0,.15) 30%,rgba(0,0,0,.55) 100%)"></div>
    </div>

    <div style="position:relative;min-height:100vh;display:flex;flex-direction:column;justify-content:flex-end;padding-bottom:clamp(80px,12vh,140px);padding-top:200px">
      <div class="hc-container">
        <div <?= hc_reveal(150) ?>><?= hc_eyebrow('Boutique pilates · Beograd', true) ?></div>
        <h1 <?= hc_reveal(300, 'hc-title hc-title--xl hc-title--light') ?> style="margin-top:28px;max-width:1100px">
          Pokret koji se<br><em>vraća sebi.</em>
        </h1>
        <p <?= hc_reveal(500) ?> style="margin-top:32px;max-width:560px;font-size:15px;line-height:1.7;color:rgba(250,250,250,.85)">
          Pilates kao praksa pažnje, snage i preciznosti — klasični i savremeni, na originalnoj opremi. Časovi u malim grupama i individualno, u studiju posvećenom autentičnoj metodi.
        </p>
        <div <?= hc_reveal(700) ?> style="margin-top:44px;display:flex;gap:16px;flex-wrap:wrap">
          <?= hc_btn('kontakt', 'Zakažite čas', 'invert') ?>
          <?= hc_btn('usluge', 'Pogledajte usluge', 'ghost-light') ?>
        </div>
      </div>

      <div class="hc-container" style="margin-top:clamp(60px,12vh,120px)">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;gap:32px;flex-wrap:wrap;padding-top:28px;border-top:1px solid rgba(250,250,250,.18)">
          <div style="display:flex;gap:56px;flex-wrap:wrap">
            <div>
              <div style="font-size:10px;letter-spacing:.22em;text-transform:uppercase;color:rgba(250,250,250,.5)">Studio I</div>
              <div class="hc-serif" style="font-size:22px;margin-top:6px">Voždovac</div>
            </div>
            <div>
              <div style="font-size:10px;letter-spacing:.22em;text-transform:uppercase;color:rgba(250,250,250,.5)">Studio II</div>
              <div class="hc-serif" style="font-size:22px;margin-top:6px">Dedinje · uskoro</div>
            </div>
            <div>
              <div style="font-size:10px;letter-spacing:.22em;text-transform:uppercase;color:rgba(250,250,250,.5)">Otvoreno</div>
              <div class="hc-serif" style="font-size:22px;margin-top:6px">Pon—Pet · 08—22h</div>
            </div>
          </div>
          <div style="font-size:10px;letter-spacing:.2em;text-transform:uppercase;color:rgba(250,250,250,.4)">Scroll ↓</div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:.85fr 1.15fr;gap:clamp(40px,6vw,88px);align-items:start">
        <div <?= hc_reveal() ?>>
          <?= hc_photo(['src' => 'dragana-teaching', 'ratio' => '4 / 5', 'alt' => 'Pilates čas u HeartCore studiju']) ?>
          <div style="margin-top:20px;display:flex;justify-content:space-between;align-items:center;gap:16px">
            <?= hc_eyebrow('Dobrodošli') ?>
            <span class="hc-serif hc-italic" style="font-size:18px;color:var(--hc-grey-500)">est. 2020 · Beograd</span>
          </div>
        </div>
        <div>
          <h2 <?= hc_reveal(100, 'hc-title hc-title--md') ?>>
            Studio posvećen <em>autentičnoj</em> pilates metodi.
          </h2>
          <div <?= hc_reveal(250) ?> class="grid two-col" style="margin-top:40px;grid-template-columns:1.4fr 1fr;gap:clamp(32px,4vw,56px);align-items:start">
            <p style="font-size:16px;line-height:1.85;color:var(--hc-grey-700)">
              HeartCore je nastao iz uverenja da pilates nije trend, već praksa — disciplinovana, elegantna i duboko lična. Kroz pažljivo vođene časove i rad na originalnoj opremi, vraćamo telu njegovu prirodnu inteligenciju.
            </p>
            <div class="notice">
              <div style="font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--hc-grey-700);margin-bottom:10px">Šest principa</div>
              <p class="hc-serif hc-italic" style="font-size:19px;line-height:1.4;color:var(--hc-grey-700)">
                <?= hc_e(implode(' · ', $data['method']['principles'])) ?>
              </p>
            </div>
          </div>
          <div <?= hc_reveal(400) ?> style="margin-top:40px"><?= hc_link_arrow('metoda', 'O Pilates metodi') ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="hc-section bg-paper">
    <div class="hc-container">
      <div class="section-head">
        <div <?= hc_reveal() ?>>
          <?= hc_eyebrow('Naše usluge') ?>
          <h2 class="hc-title hc-title--md" style="margin-top:16px;max-width:720px">Dva pristupa,<br><em>jedna metoda.</em></h2>
        </div>
        <div <?= hc_reveal(150) ?>><?= hc_link_arrow('usluge', 'Sve usluge i cene') ?></div>
      </div>

      <div class="service-grid">
        <?php foreach ($data['home_services'] as $s): ?>
          <article class="service-card hc-fade" data-delay="100">
            <div style="display:flex;justify-content:space-between;align-items:flex-start">
              <span class="service-card__no"><?= hc_e($s['no']) ?> / 03</span>
              <?= hc_diamond(8, 'var(--hc-grey-500)') ?>
            </div>
            <?= hc_photo(['src' => $s['photo'], 'ratio' => '3 / 2', 'variant' => 'sand', 'style' => 'margin-top:32px', 'alt' => $s['title']]) ?>
            <h3><?= hc_e($s['title']) ?></h3>
            <p><?= hc_e($s['body']) ?></p>
            <div class="service-card__tag"><?= hc_e($s['tag']) ?></div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FOUNDER TEASER -->
  <section class="hc-section bg-white">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1fr 1fr;gap:clamp(40px,7vw,100px);align-items:center">
        <div <?= hc_reveal() ?>><?= hc_photo(['src' => 'dragana', 'ratio' => '4 / 5', 'alt' => 'Dragana Kanjevac, vlasnica HeartCore studija']) ?></div>
        <div>
          <div <?= hc_reveal(100) ?>><?= hc_eyebrow('Vlasnica studija') ?></div>
          <h2 <?= hc_reveal(200, 'hc-title hc-title--md') ?> style="margin-top:20px">Dragana<br><em>Kanjevac.</em></h2>
          <p <?= hc_reveal(350) ?> class="hc-serif hc-italic" style="margin-top:32px;font-size:clamp(20px,1.8vw,26px);line-height:1.45;color:var(--hc-grey-700)">
            „<?= hc_e($data['dragana']['quote']) ?>“
          </p>
          <p <?= hc_reveal(500) ?> style="margin-top:28px;font-size:15px;line-height:1.75;color:var(--hc-grey-700);max-width:520px">
            Prvi učitelj klasičnog pilatesa u Srbiji i osnivač HeartCore studija. Treća generacija učitelja u direktnoj liniji od Jozefa Pilatesa.
          </p>
          <div <?= hc_reveal(650) ?> style="margin-top:36px"><?= hc_link_arrow('dragana', 'Pročitajte biografiju') ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- LOCATIONS -->
  <section class="bg-black" style="padding-block:var(--hc-section-py)">
    <div class="hc-container">
      <div class="grid two-col" style="grid-template-columns:1fr 1fr;gap:40px;align-items:end;margin-bottom:64px">
        <div <?= hc_reveal() ?>><?= hc_eyebrow('Naša mesta', true) ?></div>
        <h2 <?= hc_reveal(150, 'hc-title hc-title--md hc-title--light') ?>>Dva studija,<br><em>dva karaktera.</em></h2>
      </div>

      <div class="loc-grid">
        <?php foreach (['vozdovac', 'dedinje'] as $i => $key): $loc = $data['studios'][$key]; ?>
          <article class="loc-card hc-fade" data-delay="100">
            <a href="<?= hc_e(hc_url($key)) ?>" style="display:block">
              <?= hc_photo(['src' => $loc['photos'][0], 'ratio' => '4 / 3', 'variant' => 'dark', 'alt' => $loc['name'] . ' — ' . $loc['place']]) ?>
              <div class="loc-card__meta">
                <div>
                  <div class="loc-card__no"><?= $i === 0 ? 'I.' : 'II.' ?> <?= hc_e(mb_strtoupper($loc['place'])) ?></div>
                  <h3><?= hc_e($loc['name']) ?></h3>
                </div>
                <?php if (!$loc['open']): ?><span class="badge-soon">Uskoro</span><?php endif; ?>
              </div>
              <p><?= hc_e($loc['lead']) ?></p>
              <div class="loc-card__foot">
                <span style="font-size:12px;color:rgba(250,250,250,.6)"><?= hc_e($loc['addr']) ?></span>
                <span style="font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:var(--hc-white)">Saznajte više →</span>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-sand-soft" style="padding-block:var(--hc-section-py)">
    <div class="hc-container hc-container--narrow" style="text-align:center">
      <div <?= hc_reveal() ?>><?= hc_diamond(12, 'var(--hc-grey-700)') ?></div>
      <h2 <?= hc_reveal(150, 'hc-title hc-title--md') ?> style="margin-top:32px">Prvi čas je<br><em>uvod u praksu.</em></h2>
      <p <?= hc_reveal(300) ?> style="margin-top:28px;max-width:540px;margin-inline:auto;font-size:16px;line-height:1.75;color:var(--hc-grey-700)">
        Razgovor o vašem telu, ciljevima i ritmu — pre nego što počnemo. Javite nam se i preporučićemo program koji vam najviše odgovara.
      </p>
      <div <?= hc_reveal(450) ?> style="margin-top:44px;display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <?= hc_btn('kontakt', 'Zakažite čas') ?>
        <?= hc_btn('usluge', 'Cenovnik', 'ghost') ?>
      </div>
    </div>
  </section>
</main>
