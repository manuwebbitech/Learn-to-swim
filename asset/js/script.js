// ==============================================
// 1. DYNAMIC NAVBAR SCROLL EFFECT
// ==============================================
window.addEventListener(
  "scroll",
  () => {
    const nav = document.getElementById("mainNav");
    if (!nav) return;
    if (window.scrollY > 50) {
      nav.classList.add("scrolled");
    } else {
      nav.classList.remove("scrolled");
    }
  },
  { passive: true },
);

// ==============================================
// HELPER: SAFE RUN ON READY
// ==============================================
function runOnReady(fn) {
  if (document.readyState === "complete" || document.readyState === "interactive") {
    setTimeout(fn, 1);
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
}

// ==============================================
// 2. GSAP ENTRANCE ANIMATIONS
// ==============================================
runOnReady(() => {
  if (typeof gsap !== "undefined") {
    const heroTl = gsap.timeline({ defaults: { ease: "power4.out" } });
    heroTl.fromTo(
      ".gsap-reveal",
      { y: 40, opacity: 0 },
      { y: 0, opacity: 1, duration: 1, stagger: 0.12, delay: 0.1 },
    );

    if (typeof ScrollTrigger !== "undefined") {
      gsap.registerPlugin(ScrollTrigger);

      gsap.fromTo(
        ".reveal-bio-visual",
        { x: -40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".isaac-bio-wrapper", start: "top 80%" },
          x: 0,
          opacity: 1,
          duration: 1,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".reveal-bio-content",
        { x: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".isaac-bio-wrapper", start: "top 80%" },
          x: 0,
          opacity: 1,
          duration: 1,
          delay: 0.15,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".gsap-early-text",
        { y: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".early-redesigned-wrapper", start: "top 80%" },
          y: 0,
          opacity: 1,
          duration: 1,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".gsap-early-cards",
        { x: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".early-redesigned-wrapper", start: "top 80%" },
          x: 0,
          opacity: 1,
          duration: 1,
          delay: 0.15,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".gsap-tert-left",
        { y: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".tert-section-wrapper", start: "top 80%" },
          y: 0,
          opacity: 1,
          duration: 1,
          ease: "power3.out",
          onComplete: () => {
            gsap.set(".gsap-tert-left", { clearProps: "transform" });
          },
        },
      );

      gsap.fromTo(
        ".gsap-tert-card",
        { x: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".tert-timeline-container", start: "top 80%" },
          x: 0,
          opacity: 1,
          duration: 0.9,
          stagger: 0.15,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".gsap-acc-header",
        { y: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".isaac-magazine-acc", start: "top 80%" },
          y: 0,
          opacity: 1,
          duration: 0.9,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".gsap-acc-slider",
        { y: 40, opacity: 0 },
        {
          scrollTrigger: { trigger: ".isaac-magazine-acc", start: "top 80%" },
          y: 0,
          opacity: 1,
          duration: 0.9,
          delay: 0.15,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".minimal-contact-section",
        { y: 35, opacity: 0 },
        {
          scrollTrigger: { trigger: ".minimal-water-footer", start: "top 85%" },
          y: 0,
          opacity: 1,
          duration: 1,
          ease: "power3.out",
        },
      );

      gsap.fromTo(
        ".minimal-grid-section .col-lg-5, .minimal-grid-section .col-lg-3, .minimal-grid-section .col-lg-4",
        { y: 35, opacity: 0 },
        {
          scrollTrigger: { trigger: ".minimal-grid-section", start: "top 85%" },
          y: 0,
          opacity: 1,
          duration: 0.9,
          stagger: 0.12,
          ease: "power3.out",
        },
      );
    }
  }
});

// ==============================================
// 3. SWIPERS INITIALIZATION
// ==============================================
runOnReady(() => {
  if (typeof Swiper === "undefined") return;

  // 1. Accolades Swiper
  const magElement = document.querySelector(".mag-swiper-container");
  if (magElement) {
    try {
      const magSwiper = new Swiper(magElement, {
        slidesPerView: 1,
        spaceBetween: 25,
        grabCursor: true,
        loop: true,
        speed: 600,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        observer: true,
        observeParents: true,
        resizeObserver: true,
        breakpoints: {
          768: { slidesPerView: 2, spaceBetween: 30 },
          1200: { slidesPerView: 2.2, spaceBetween: 35 },
        },
        navigation: {
          nextEl: ".mag-btn-next",
          prevEl: ".mag-btn-prev",
        },
        pagination: {
          el: ".mag-progress-container .swiper-pagination",
          type: "progressbar",
        },
      });
      setTimeout(() => {
        if (magSwiper && magSwiper.update) magSwiper.update();
      }, 200);
    } catch (e) {
      console.warn("Accolades Swiper init warning: - script.js:216", e);
    }
  }

  // 2. Testimonials Swiper
  const tstElement = document.querySelector(".tst-swiper-container");
  if (tstElement) {
    try {
      const tstSwiper = new Swiper(tstElement, {
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        speed: 600,
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        observer: true,
        observeParents: true,
        resizeObserver: true,
        breakpoints: {
          768: { slidesPerView: 2, spaceBetween: 30 },
          1024: { slidesPerView: 3, spaceBetween: 30 },
        },
        navigation: {
          nextEl: ".tst-btn-next",
          prevEl: ".tst-btn-prev",
        },
        pagination: {
          el: ".tst-fraction-pagination",
          type: "fraction",
          renderFraction: function (currentClass, totalClass) {
            return `<span class="${currentClass}"></span> <span class="tst-fraction-divider">/</span> <span class="${totalClass}"></span>`;
          },
        },
      });
      setTimeout(() => {
        if (tstSwiper && tstSwiper.update) tstSwiper.update();
      }, 200);
    } catch (e) {
      console.warn("Testimonials Swiper init warning: - script.js:258", e);
    }
  }
});

// ==============================================
// 4. SITE-WIDE CUSTOM WATER CURSOR
// ==============================================
runOnReady(() => {
  const dot = document.getElementById("cursorDot");
  const ring = document.getElementById("cursorRing");

  if (!dot || !ring) return;

  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;
  let ringX = mouseX;
  let ringY = mouseY;
  let lastTrail = 0;

  window.addEventListener(
    "mousemove",
    (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      dot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;

      const now = Date.now();
      if (now - lastTrail > 60) {
        spawnTrail(mouseX, mouseY);
        lastTrail = now;
      }
    },
    { passive: true },
  );

  function renderCursor() {
    ringX += (mouseX - ringX) * 0.2;
    ringY += (mouseY - ringY) * 0.2;
    ring.style.transform = `translate3d(${ringX}px, ${ringY}px, 0) translate(-50%, -50%)`;
    requestAnimationFrame(renderCursor);
  }
  requestAnimationFrame(renderCursor);

  function spawnTrail(x, y) {
    const drop = document.createElement("div");
    drop.className = "water-trail-drop";
    drop.style.left = `${x}px`;
    drop.style.top = `${y}px`;
    document.body.appendChild(drop);
    setTimeout(() => drop.remove(), 400);
  }

  window.addEventListener("click", (e) => {
    const ripple = document.createElement("div");
    ripple.className = "water-click-ripple";
    ripple.style.left = `${e.clientX}px`;
    ripple.style.top = `${e.clientY}px`;
    document.body.appendChild(ripple);
    setTimeout(() => ripple.remove(), 550);
  });

  const interactiveQuery =
    'a, button, input, select, textarea, .btn, .nav-link, .tst-arrow-btn, .swiper-button-next, .swiper-button-prev, .card, [role="button"]';

  document.addEventListener(
    "mouseover",
    (e) => {
      if (e.target.closest(interactiveQuery)) {
        dot.classList.add("cursor-hover");
        ring.classList.add("cursor-hover");
      }
    },
    { passive: true },
  );

  document.addEventListener(
    "mouseout",
    (e) => {
      if (e.target.closest(interactiveQuery)) {
        dot.classList.remove("cursor-hover");
        ring.classList.remove("cursor-hover");
      }
    },
    { passive: true },
  );
});

// ==============================================
// 5. HERO WATER CANVAS & SWIMMER SPLASH EFFECT
// ==============================================
runOnReady(() => {
  const heroCanvas = document.getElementById("heroWaterCanvas");
  if (heroCanvas) {
    const ctx = heroCanvas.getContext("2d");
    let width = 0,
      height = 0,
      step = 0,
      ripples = [];
    let isVisible = false;

    function resizeHero() {
      const parent = heroCanvas.parentElement;
      if (!parent) return;
      width = heroCanvas.width = parent.offsetWidth;
      height = heroCanvas.height = parent.offsetHeight;
    }
    window.addEventListener("resize", resizeHero, { passive: true });
    resizeHero();

    const observer = new IntersectionObserver(
      ([entry]) => {
        isVisible = entry.isIntersecting;
        if (isVisible) renderHero();
      },
      { threshold: 0.1 },
    );
    observer.observe(heroCanvas);

    heroCanvas.parentElement.addEventListener(
      "mousemove",
      (e) => {
        if (!isVisible) return;
        const rect = heroCanvas.getBoundingClientRect();
        if (Math.random() < 0.15) {
          ripples.push({
            x: e.clientX - rect.left,
            y: e.clientY - rect.top,
            radius: 2,
            alpha: 0.5,
          });
        }
      },
      { passive: true },
    );

    function renderHero() {
      if (!isVisible) return;
      ctx.clearRect(0, 0, width, height);
      step += 0.025;

      ctx.fillStyle = "rgba(0, 180, 216, 0.07)";
      ctx.beginPath();
      ctx.moveTo(0, height);
      for (let x = 0; x <= width; x += 30) {
        const y = Math.sin(x * 0.008 + step) * 16 + (height - 90);
        ctx.lineTo(x, y);
      }
      ctx.lineTo(width, height);
      ctx.closePath();
      ctx.fill();

      for (let i = ripples.length - 1; i >= 0; i--) {
        const r = ripples[i];
        ctx.beginPath();
        ctx.arc(r.x, r.y, r.radius, 0, Math.PI * 2);
        ctx.strokeStyle = `rgba(0, 180, 216, ${r.alpha})`;
        ctx.lineWidth = 1.2;
        ctx.stroke();
        r.radius += 1.2;
        r.alpha -= 0.02;
        if (r.alpha <= 0) ripples.splice(i, 1);
      }

      requestAnimationFrame(renderHero);
    }
  }

  // Swimmer Water Splash Generator
  const swimmer = document.getElementById("heroSwimmer");
  if (swimmer) {
    const waveContainer = swimmer.parentElement;
    let isSwimmerVisible = false;

    if (waveContainer) {
      const swimmerObs = new IntersectionObserver(
        ([entry]) => {
          isSwimmerVisible = entry.isIntersecting;
        },
        { threshold: 0.1 },
      );
      swimmerObs.observe(waveContainer);

      setInterval(() => {
        if (!isSwimmerVisible || !waveContainer) return;
        const rect = swimmer.getBoundingClientRect();
        const parentRect = waveContainer.getBoundingClientRect();

        if (
          rect.right > parentRect.left + 50 &&
          rect.left < parentRect.right - 50
        ) {
          const splashX = rect.left - parentRect.left + 20;
          const splashY = rect.top - parentRect.top + rect.height * 0.55;

          for (let i = 0; i < 2; i++) {
            const particle = document.createElement("div");
            particle.className = "hero-splash-particle";
            particle.style.left = `${splashX + (Math.random() - 0.5) * 16}px`;
            particle.style.top = `${splashY + (Math.random() - 0.5) * 8}px`;

            const dx = (Math.random() - 0.7) * 30;
            const dy = (Math.random() - 0.8) * 20 - 8;
            particle.style.setProperty("--dx", `${dx}px`);
            particle.style.setProperty("--dy", `${dy}px`);

            waveContainer.appendChild(particle);
            setTimeout(() => particle.remove(), 550);
          }
        }
      }, 180);
    }
  }
});

// ==============================================
// 6. ACCOLADES PAGE STEP SWITCHING
// ==============================================
const recognitionData = [
  {
    step: "01 — CONTRIBUTION",
    title: "Outstanding Contribution Award",
    desc: "Recognised for continued contribution and involvement in developing people through sport and education. Demonstrating steadfast commitment to community growth and leadership excellence.",
    org: "MOE – SHHK · 2022",
    img: "asset/img/ncps-award.jpeg",
  },
  {
    step: "02 — COACHING",
    title: "Coaches Category Recognition",
    desc: "A milestone celebrating Isaac’s dedication to coaching and his significant contribution to the sporting community, inspiring athletes to achieve their fullest potential.",
    org: "Singapore Sports Council · 2010",
    img: "asset/img/posb-champion_orig.jpeg",
  },
  {
    step: "03 — INCLUSION",
    title: "Aquatic Teaching — Special Needs",
    desc: "A certification reflecting his commitment to making aquatic learning safer, more accessible and meaningful for every learner, regardless of physical or developmental background.",
    org: "STA Level 9 · Aquatic Teaching",
    img: "asset/img/aquatic-speical-needs.jpeg",
  },
  {
    step: "04 — SAFETY & LIFESAVING",
    title: "Safety Training & Lifesaving Awards",
    desc: "Advanced milestones and instruction credentials in professional lifesaving protocols, water safety training, and community leadership.",
    org: "SLSS · Lifesaving Teacher & Instructor",
    img: "asset/img/sun-xue-ling.jpeg",
  },
];

function switchRecognition(index) {
  const buttons = document.querySelectorAll(".acc-tab-btn");
  buttons.forEach((btn, idx) => {
    if (idx === index) {
      btn.classList.add("active");
    } else {
      btn.classList.remove("active");
    }
  });

  const data = recognitionData[index];
  const container = document.getElementById("accCardContainer");
  if (!container || !data) return;

  container.innerHTML = `
    <div class="row align-items-center">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <img src="${data.img}" alt="${data.title}" class="acc-dynamic-img">
      </div>
      <div class="col-lg-7 ps-lg-5">
        <span class="acc-step-counter">${data.step}</span>
        <h3 class="acc-dynamic-title">${data.title}</h3>
        <p class="acc-dynamic-desc">${data.desc}</p>
        <div class="acc-dynamic-org"><i class="ri-award-line me-2"></i>${data.org}</div>
        <div class="mt-4 text-muted small">
          <span>Navigation: </span>
          <strong>← 0${index + 1} / 04 →</strong> Click tabs above to explore more.
        </div>
      </div>
    </div>
  `;
}

runOnReady(() => {
  if (document.getElementById("accCardContainer")) {
    switchRecognition(0);
  }
});
