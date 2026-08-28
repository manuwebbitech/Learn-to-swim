<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
</head>

<body class="bg-navy-dark text-white">
    <?php include 'navbar.php'; ?>

    <!-- ==============================================
       01 — EDITORIAL BANNER SECTION
  =============================================== -->
    <section class="banner-300-wrapper">
        <div class="container d-flex justify-content-center">
            <div class="banner-300-container text-center">
                <span class="banner-300-tag">05 — Volunteer Experience</span>
                <h1 class="banner-300-title mb-2">Service That Makes a Difference</h1>
                <!-- <p class="text-white-50 fs-5 mb-4 font-syne">Lifesaving, safety, sports management, and community leadership.</p> -->
                <nav class="banner-300-breadcrumb justify-content-center" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                    <span class="current">Volunteer Experience</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- ==============================================
       02 — CINEMATIC INTRO & FLOATING QUOTE BENTO
  =============================================== -->
    <section class="py-5 bg-navy-dark position-relative">
        <div class="container px-lg-5 py-4">
            <div class="row align-items-center g-5">

                <!-- Left Column: Narrative -->
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-cyan-glow border border-info mb-3">
                        <i class="ri-heart-pulse-fill text-cyan"></i>
                        <span class="small font-syne fw-bold text-cyan text-uppercase">The Gift of Service</span>
                    </div>
                    <h2 class="display-5 font-syne fw-extrabold text-white mb-4 leading-tight">
                        Passion for Lifesaving & <span class="bg-qte-highlight">Community Service</span>
                    </h2>
                    <p class="fs-5 text-slate-light leading-relaxed font-jakarta mb-4 opacity-90">
                        Isaac’s volunteer journey reflects a lifelong dedication to water safety, emergency medical instruction, and sports management. Through leadership and education, he continues to empower individuals and protect lives across Singapore.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="vol-glass-pill">
                            <i class="ri-shield-check-fill text-cyan"></i>
                            <span>Lifesaving Executive</span>
                        </div>
                        <div class="vol-glass-pill">
                            <i class="ri-first-aid-kit-fill text-cyan"></i>
                            <span>First Aid Assessor</span>
                        </div>
                        <div class="vol-glass-pill">
                            <i class="ri-group-fill text-cyan"></i>
                            <span>Community Leader</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Glass Quote Box -->
                <div class="col-lg-6">
                    <div class="vol-quote-card p-4 p-md-5 rounded-5 border border-cyan-subtle shadow-lg position-relative overflow-hidden">
                        <div class="quote-water-mark"><i class="ri-double-quotes-l"></i></div>
                        <span class="text-cyan small fw-bold text-uppercase tracking-wider font-syne mb-2 d-block">Foundational Spirit</span>
                        <h3 class="fs-3 font-syne fw-bold text-white mb-3 leading-snug">“The gift of service leads to a life of love.”</h3>
                        <p class="text-info font-syne fw-semibold mb-4">— Mary White</p>
                        <div class="vol-motto-badge">
                            <i class="ri-sparkling-fill text-cyan me-2"></i> SERVE. LEAD. INSPIRE.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
       03 — LUXURY BENTO GRID FOR LEADERSHIP POSITIONS
  =============================================== -->
    <section class="py-5 bg-navy-dark position-relative">
        <div class="container px-lg-5 py-4">

            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <span class="mag-badge mb-3">Key Leadership Positions</span>
                    <h2 class="mag-heading mb-3">Service & Impact Overview</h2>
                    <p class="mag-body-text mx-auto">
                        Explore Isaac’s active contributions across national lifesaving societies, first aid academies, and constituency sports clubs.
                    </p>
                </div>
            </div>

            <!-- Bento Grid (4 Unique Glass Cards) -->
            <div class="row g-4">

                <!-- 01. Singapore Life Guard Corps -->
                <div class="col-lg-6">
                    <div class="vol-bento-card p-4 p-md-5 rounded-5 border position-relative h-100 d-flex flex-column justify-content-between">
                        <div class="vol-bento-header d-flex justify-content-between align-items-start mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="vol-glow-icon"><i class="ri-lifebuoy-fill"></i></div>
                                <div>
                                    <span class="text-cyan small fw-bold font-syne text-uppercase">Lifesaving Body</span>
                                    <h3 class="fs-4 font-syne fw-bold text-white mb-0">Singapore Life Guard Corps</h3>
                                </div>
                            </div>
                            <span class="vol-bento-number">01</span>
                        </div>

                        <div class="vol-bento-img-container mb-4 rounded-4 overflow-hidden position-relative" onclick="openVolLightbox(0)">
                            <img src="asset/img/with-rlss.jpeg" alt="Singapore Life Guard Corps" class="img-fluid w-100 vol-bento-img">
                            <div class="vol-bento-overlay d-flex align-items-center justify-content-center">
                                <span class="btn-vol-glow">
                                    <i class="ri-zoom-in-line me-2"></i> Explore Photo
                                </span>
                            </div>
                        </div>

                        <div class="vol-bento-footer">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ri-award-fill text-cyan fs-5"></i>
                                <span class="fs-5 font-syne fw-bold text-white">Elected Vice President</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-slate-light small ms-4">
                                <i class="ri-checkbox-circle-fill text-cyan"></i>
                                <span>Former Honorary Auditor</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02. Singapore Red Cross Academy -->
                <div class="col-lg-6">
                    <div class="vol-bento-card p-4 p-md-5 rounded-5 border position-relative h-100 d-flex flex-column justify-content-between">
                        <div class="vol-bento-header d-flex justify-content-between align-items-start mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="vol-glow-icon"><i class="ri-first-aid-kit-fill"></i></div>
                                <div>
                                    <span class="text-cyan small fw-bold font-syne text-uppercase">First Aid Academy</span>
                                    <h3 class="fs-4 font-syne fw-bold text-white mb-0">Singapore Red Cross Academy</h3>
                                </div>
                            </div>
                            <span class="vol-bento-number">02</span>
                        </div>

                        <div class="vol-bento-img-container mb-4 rounded-4 overflow-hidden position-relative" onclick="openVolLightbox(1)">
                            <img src="asset/img/aquatic-speical-needs.jpeg" alt="Singapore Red Cross Academy" class="img-fluid w-100 vol-bento-img">
                            <div class="vol-bento-overlay d-flex align-items-center justify-content-center">
                                <span class="btn-vol-glow">
                                    <i class="ri-zoom-in-line me-2"></i> Explore Photo
                                </span>
                            </div>
                        </div>

                        <div class="vol-bento-footer">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ri-award-fill text-cyan fs-5"></i>
                                <span class="fs-5 font-syne fw-bold text-white">Assessor / Trainer</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-slate-light small ms-4">
                                <i class="ri-heart-pulse-fill text-danger"></i>
                                <span>Occupational First Aid & Child First Aid Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03. Yio Chu Kang Constituency Sports Club -->
                <div class="col-lg-6">
                    <div class="vol-bento-card p-4 p-md-5 rounded-5 border position-relative h-100 d-flex flex-column justify-content-between">
                        <div class="vol-bento-header d-flex justify-content-between align-items-start mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="vol-glow-icon"><i class="ri-team-fill"></i></div>
                                <div>
                                    <span class="text-cyan small fw-bold font-syne text-uppercase">Constituency Club</span>
                                    <h3 class="fs-4 font-syne fw-bold text-white mb-0">Yio Chu Kang Sports Club</h3>
                                </div>
                            </div>
                            <span class="vol-bento-number">03</span>
                        </div>

                        <div class="vol-bento-img-container mb-4 rounded-4 overflow-hidden position-relative" onclick="openVolLightbox(2)">
                            <img src="asset/img/sun-xue-ling.jpeg" alt="Yio Chu Kang Constituency Sports Club" class="img-fluid w-100 vol-bento-img">
                            <div class="vol-bento-overlay d-flex align-items-center justify-content-center">
                                <span class="btn-vol-glow">
                                    <i class="ri-zoom-in-line me-2"></i> Explore Photo
                                </span>
                            </div>
                        </div>

                        <div class="vol-bento-footer">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ri-award-fill text-cyan fs-5"></i>
                                <span class="fs-5 font-syne fw-bold text-white">Honorary Auditor</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-slate-light small ms-4">
                                <i class="ri-calendar-event-fill text-cyan"></i>
                                <span>Former Honorary Assistant Secretary · 2017–2018</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 04. Singapore Life Saving Society -->
                <div class="col-lg-6">
                    <div class="vol-bento-card p-4 p-md-5 rounded-5 border position-relative h-100 d-flex flex-column justify-content-between">
                        <div class="vol-bento-header d-flex justify-content-between align-items-start mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div class="vol-glow-icon"><i class="ri-shield-flash-fill"></i></div>
                                <div>
                                    <span class="text-cyan small fw-bold font-syne text-uppercase">National Commission</span>
                                    <h3 class="fs-4 font-syne fw-bold text-white mb-0">Singapore Life Saving Society</h3>
                                </div>
                            </div>
                            <span class="vol-bento-number">04</span>
                        </div>

                        <div class="vol-bento-img-container mb-4 rounded-4 overflow-hidden position-relative" onclick="openVolLightbox(3)">
                            <img src="asset/img/ncps-award.jpeg" alt="Singapore Life Saving Society" class="img-fluid w-100 vol-bento-img">
                            <div class="vol-bento-overlay d-flex align-items-center justify-content-center">
                                <span class="btn-vol-glow">
                                    <i class="ri-zoom-in-line me-2"></i> Explore Photo
                                </span>
                            </div>
                        </div>

                        <div class="vol-bento-footer">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ri-award-fill text-cyan fs-5"></i>
                                <span class="fs-5 font-syne fw-bold text-white">Chairman — Rescue Commission</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-slate-light small ms-4">
                                <i class="ri-user-star-fill text-cyan"></i>
                                <span>Executive Committee Member · 2019–2020</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- ==============================================
       05 — LIGHTBOX MODAL CONTAINER
  =============================================== -->
    <div id="volLightbox" class="tst-lightbox-modal" tabindex="-1">
        <button class="tst-lightbox-close" onclick="closeVolLightbox()"><i class="ri-close-line"></i></button>

        <button class="tst-lightbox-arrow tst-lightbox-prev" onclick="prevVolLightbox()"><i class="ri-arrow-left-s-line"></i></button>
        <button class="tst-lightbox-arrow tst-lightbox-next" onclick="nextVolLightbox()"><i class="ri-arrow-right-s-line"></i></button>

        <div class="tst-lightbox-content">
            <img id="volLightboxImg" src="" alt="Volunteer Moment" class="img-fluid">
            <div class="tst-lightbox-meta">
                <span id="volLightboxCounter">01 / 04</span> — <span id="volLightboxTitle">Volunteer Leadership</span>
            </div>
        </div>
    </div>

    <!-- Inline Lightbox Script -->
    <script>
        const volItems = [{
                src: 'asset/img/with-rlss.jpeg',
                title: 'Singapore Life Guard Corps — Vice President'
            },
            {
                src: 'asset/img/aquatic-speical-needs.jpeg',
                title: 'Singapore Red Cross Academy — First Aid Assessor / Trainer'
            },
            {
                src: 'asset/img/sun-xue-ling.jpeg',
                title: 'Yio Chu Kang CSC — Community Leadership'
            },
            {
                src: 'asset/img/ncps-award.jpeg',
                title: 'Singapore Life Saving Society — Chairman Rescue Commission'
            }
        ];

        let currentVolIndex = 0;
        const volLightbox = document.getElementById('volLightbox');
        const volLightboxImg = document.getElementById('volLightboxImg');
        const volLightboxCounter = document.getElementById('volLightboxCounter');
        const volLightboxTitle = document.getElementById('volLightboxTitle');

        function openVolLightbox(index) {
            currentVolIndex = index;
            updateVolLightbox();
            volLightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeVolLightbox() {
            volLightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateVolLightbox() {
            const item = volItems[currentVolIndex];
            volLightboxImg.src = item.src;
            volLightboxCounter.textContent = `0${currentVolIndex + 1} / 0${volItems.length}`;
            volLightboxTitle.textContent = item.title;
        }

        function prevVolLightbox() {
            currentVolIndex = (currentVolIndex - 1 + volItems.length) % volItems.length;
            updateVolLightbox();
        }

        function nextVolLightbox() {
            currentVolIndex = (currentVolIndex + 1) % volItems.length;
            updateVolLightbox();
        }

        // Keyboard Navigation
        document.addEventListener('keydown', function(e) {
            if (!volLightbox || !volLightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeVolLightbox();
            if (e.key === 'ArrowLeft') prevVolLightbox();
            if (e.key === 'ArrowRight') nextVolLightbox();
        });

        // Click outside image to close
        if (volLightbox) {
            volLightbox.addEventListener('click', function(e) {
                if (e.target === volLightbox || e.target.classList.contains('tst-lightbox-content')) {
                    closeVolLightbox();
                }
            });
        }
    </script>

    <?php include 'footer.php'; ?>
</body>

</html>