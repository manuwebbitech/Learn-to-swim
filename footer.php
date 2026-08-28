<!-- Site-Wide Water Custom Cursor Elements -->
<div class="custom-cursor-dot" id="cursorDot"></div>
<div class="custom-cursor-ring" id="cursorRing"></div>

<footer class="minimal-water-footer" id="contact">
    <!-- Interactive Water Canvas Animation Background -->
    <canvas id="waterCanvas" class="water-canvas-bg"></canvas>

    <div class="container position-relative z-2">
        <!-- Minimal Hero Contact & Email Section -->
        <div class="minimal-contact-section">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <span class="minimal-subhead">
                        <span class="water-dot"></span> Get In Touch
                    </span>
                    <h2 class="minimal-headline">
                        Ready to swim with purpose & master life confidence?
                    </h2>
                    <div class="minimal-email-wrap">
                        <a href="mailto:isaac@leeminghan.com" class="minimal-email-link" id="emailLink">
                            <span class="email-text">isaac@leeminghan.com</span>
                            <span class="liquid-line"></span>
                        </a>
                        <button type="button" class="minimal-copy-btn" id="copyEmailBtn" data-email="isaac@leeminghan.com" title="Copy email address">
                            <i class="ri-file-copy-line" id="copyIcon"></i>
                            <span id="copyText">Copy</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <div class="minimal-status-pill">
                        <span class="status-indicator-dot"></span>
                        <span>Open for Coaching & Mentorship</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="minimal-divider-line"></div>

        <!-- Clean 3-Column Minimal Grid -->
        <div class="minimal-grid-section py-4">
            <div class="row g-4 g-lg-5">
                <!-- Col 1: Brand & Roles -->
                <div class="col-lg-5 col-md-6">
                    <a href="#" class="minimal-brand">
                        Lee Minghan <span class="accent-cyan">Isaac</span>
                    </a>
                    <p class="minimal-role">Swim Coach • Lifesaving Teacher • Mentor</p>
                    <p class="minimal-bio">
                        Translating water discipline and safety mastery into undeniable confidence, resilience, and personal growth.
                    </p>
                    <div class="minimal-tags">
                        <span class="m-tag">Certified Coach</span>
                        <span class="m-tag">Lifesaving Instructor</span>
                        <span class="m-tag">BNI Member</span>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div class="col-lg-3 col-md-6 col-6">
                    <h6 class="minimal-col-title">Navigation</h6>
                    <ul class="minimal-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About Isaac</a></li>
                        <li><a href="#accolades">Accolades</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#bni">BNI Network</a></li>
                    </ul>
                </div>

                <!-- Col 3: Programs & Connect -->
                <div class="col-lg-4 col-md-6 col-6">
                    <h6 class="minimal-col-title">Programs</h6>
                    <ul class="minimal-links">
                        <li><a href="#coaching">Swimming Coaching</a></li>
                        <li><a href="#lifesaving">Lifesaving Certification</a></li>
                        <li><a href="#water-safety">Water Safety & Survival</a></li>
                        <li><a href="#mentorship">Life Management Mentorship</a></li>
                    </ul>

                    <div class="minimal-socials mt-4">
                        <a href="tel:+6591234567" aria-label="Phone" class="m-social-icon" title="+65 9123 4567"><i class="ri-phone-line"></i></a>
                        <a href="mailto:isaac@leeminghan.com" aria-label="Email" class="m-social-icon" title="isaac@leeminghan.com"><i class="ri-mail-line"></i></a>
                        <a href="https://wa.me/6591234567?text=Hello%20Isaac" target="_blank" rel="noopener" aria-label="WhatsApp" class="m-social-icon" title="WhatsApp"><i class="ri-whatsapp-line"></i></a>
                        <a href="#" aria-label="LinkedIn" class="m-social-icon"><i class="ri-linkedin-line"></i></a>
                        <a href="#" aria-label="Instagram" class="m-social-icon"><i class="ri-instagram-line"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="minimal-divider-line"></div>

        <!-- Minimal Bottom Bar -->
        <div class="minimal-bottom-bar py-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <p class="minimal-copy-text">
                        &copy; <?php echo date('Y'); ?> <strong>Lee Minghan Isaac</strong>. All rights reserved. <span class="opacity-50 mx-1">|</span> Designed by <a href="https://webbitech.com" target="_blank" rel="noopener" class="text-cyan fw-bold text-decoration-none">Webbitech</a>
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end d-flex align-items-center justify-content-center justify-content-md-end gap-3">
                    <a href="privacy-policy.php" class="minimal-footer-link">Privacy Policy</a>
                    <span class="minimal-sep">•</span>
                    <a href="#" class="minimal-footer-link">Terms</a>
                    <button type="button" class="minimal-top-btn" id="backToTopBtn" aria-label="Back to top">
                        <i class="ri-arrow-up-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Interactive Water Canvas Animation & Copy Email Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Copy Email functionality
    const copyBtn = document.getElementById('copyEmailBtn');
    if (copyBtn) {
        copyBtn.addEventListener('click', function() {
            const email = this.getAttribute('data-email');
            navigator.clipboard.writeText(email).then(function() {
                const icon = document.getElementById('copyIcon');
                const text = document.getElementById('copyText');
                if (icon) icon.className = 'ri-check-line text-success';
                if (text) text.textContent = 'Copied!';
                setTimeout(function() {
                    if (icon) icon.className = 'ri-file-copy-line';
                    if (text) text.textContent = 'Copy';
                }, 2500);
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
            });
        });
    }

    // 2. Back to top
    const backToTop = document.getElementById('backToTopBtn');
    if (backToTop) {
        backToTop.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Viewport-Aware Interactive Water Canvas Waves Animation (Pauses offscreen)
    const canvas = document.getElementById('waterCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let width = 0, height = 0;
        let step = 0;
        let mouseX = 0, mouseY = 0;
        let ripples = [];
        let isFooterVisible = false;

        function resize() {
            const parent = canvas.parentElement;
            width = canvas.width = parent.offsetWidth;
            height = canvas.height = parent.offsetHeight;
        }

        window.addEventListener('resize', resize, { passive: true });
        resize();

        const footerObs = new IntersectionObserver(function(entries) {
            isFooterVisible = entries[0].isIntersecting;
            if (isFooterVisible) animate();
        }, { threshold: 0.05 });
        footerObs.observe(canvas);

        canvas.parentElement.addEventListener('mousemove', function(e) {
            if (!isFooterVisible) return;
            const rect = canvas.getBoundingClientRect();
            mouseX = e.clientX - rect.left;
            mouseY = e.clientY - rect.top;
            if (Math.random() < 0.15) {
                ripples.push({
                    x: mouseX,
                    y: mouseY,
                    radius: 2,
                    alpha: 0.6
                });
            }
        }, { passive: true });

        function animate() {
            if (!isFooterVisible) return;
            ctx.clearRect(0, 0, width, height);

            step += 0.025;

            // Wave 1
            ctx.fillStyle = 'rgba(0, 180, 216, 0.05)';
            ctx.beginPath();
            ctx.moveTo(0, height);
            for (let x = 0; x <= width; x += 30) {
                const y = Math.sin(x * 0.007 + step) * 18 + (height - 90);
                ctx.lineTo(x, y);
            }
            ctx.lineTo(width, height);
            ctx.closePath();
            ctx.fill();

            // Draw Interactive Mouse Ripples
            for (let i = ripples.length - 1; i >= 0; i--) {
                const r = ripples[i];
                ctx.beginPath();
                ctx.arc(r.x, r.y, r.radius, 0, Math.PI * 2);
                ctx.strokeStyle = `rgba(0, 180, 216, ${r.alpha})`;
                ctx.lineWidth = 1.2;
                ctx.stroke();

                r.radius += 1.3;
                r.alpha -= 0.02;

                if (r.alpha <= 0) {
                    ripples.splice(i, 1);
                }
            }

            requestAnimationFrame(animate);
        }
    }
});
</script>

<!-- ==============================================
       SCRIPTS
  =============================================== -->
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- GSAP Core -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom -->
<script src="asset/js/script.js"></script>