/* HeartCore - progressive enhancement. The site is fully server-rendered;
   this only adds the motion/interaction the original prototype had. */
(function () {
  "use strict";

  /* Sticky header: transparent over a hero, solid after scroll. Pages without
     a hero opt in via data-solid-nav on <body>. */
  var header = document.querySelector(".hc-header");
  var body = document.body;
  if (header) {
    var alwaysSolid = body.hasAttribute("data-solid-nav");
    var onScroll = function () {
      if (alwaysSolid || window.scrollY > 80) header.classList.add("is-solid");
      else header.classList.remove("is-solid");
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* Mobile menu */
  var burger = document.querySelector("[data-burger]");
  var overlay = document.querySelector("[data-mobile]");
  var closeBtn = document.querySelector("[data-mobile-close]");
  var open = function () { if (overlay) { overlay.classList.add("is-open"); body.style.overflow = "hidden"; } };
  var close = function () { if (overlay) { overlay.classList.remove("is-open"); body.style.overflow = ""; } };
  if (burger) burger.addEventListener("click", open);
  if (closeBtn) closeBtn.addEventListener("click", close);
  document.addEventListener("keydown", function (e) { if (e.key === "Escape") close(); });

  /* Reveal-on-scroll */
  var faders = document.querySelectorAll(".hc-fade");
  if ("IntersectionObserver" in window && faders.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting) {
          var d = parseInt(en.target.getAttribute("data-delay") || "0", 10);
          setTimeout(function () { en.target.classList.add("is-visible"); }, d);
          io.unobserve(en.target);
        }
      });
    }, { threshold: 0.12 });
    faders.forEach(function (f) { io.observe(f); });
  } else {
    faders.forEach(function (f) { f.classList.add("is-visible"); });
  }

  /* Contact form: studio segmented toggle (writes to hidden input) */
  var toggle = document.querySelector("[data-studio-toggle]");
  if (toggle) {
    var hidden = document.querySelector("[data-studio-input]");
    toggle.addEventListener("click", function (e) {
      var btn = e.target.closest("button[data-value]");
      if (!btn) return;
      e.preventDefault();
      toggle.querySelectorAll("button").forEach(function (b) { b.classList.remove("is-on"); });
      btn.classList.add("is-on");
      if (hidden) hidden.value = btn.getAttribute("data-value");
    });
  }
})();
