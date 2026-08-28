<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- ==============================================
       01 — EDITORIAL BANNER SECTION
  =============================================== -->
    <section class="banner-300-wrapper">
        <div class="container d-flex justify-content-center">
            <div class="banner-300-container text-center">
                <span class="banner-300-tag">04 — BNI Synergy & Network</span>
                <h1 class="banner-300-title mb-2">Business Network International</h1>
                <!-- <p class="text-white-50 fs-5 mb-4 font-syne">Building lasting partnerships, professional synergy & business leadership.</p> -->
                <nav class="banner-300-breadcrumb justify-content-center" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                    <span class="current">BNI Network</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- ==============================================
       02 — BNI OVERVIEW SECTION
  =============================================== -->
    <section class="py-5 bg-white position-relative">
        <div class="container px-lg-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="bio-top-label">BNI · Business Networking</span>
                    <h2 class="bio-main-heading mb-3">
                        Building Connections. <br><span style="color: #00b4d8;">Creating Opportunities.</span>
                    </h2>
                    <p class="bio-paragraph-text fs-5 leading-relaxed text-slate mb-4">
                        For Isaac, networking is more than exchanging business cards. It is about building genuine relationships, creating trust and helping people grow together.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-syne fw-bold"><i class="ri-checkbox-circle-fill text-info me-1"></i> Genuine Relationships</span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-syne fw-bold"><i class="ri-checkbox-circle-fill text-info me-1"></i> Building Trust</span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-syne fw-bold"><i class="ri-checkbox-circle-fill text-info me-1"></i> Growing Together</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-motto-box p-4 p-md-5 rounded-4 text-white shadow-lg">
                        <span class="text-cyan small fw-bold text-uppercase tracking-wide">The Isaac Networking Belief</span>
                        <h3 class="fs-2 fw-extrabold font-syne text-white mt-2 mb-3">Beyond Business Cards. Into Real Growth.</h3>
                        <p class="fs-6 text-white-80 font-jakarta mb-0">
                            “Meaningful networking begins with listening and serving others. When trust is established, extraordinary opportunities naturally follow.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
       03 — BNI IMAGE GALLERY GRID
  =============================================== -->
    <section class="py-5 bg-light position-relative">
        <div class="container px-lg-5 py-4">

            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <span class="bio-top-label">Visual Gallery & Moments</span>
                    <h2 class="bio-main-heading mb-3">BNI Network & Events Gallery</h2>
                    <p class="bio-paragraph-text">
                        Click on any image below to view the high-resolution photo in full-screen Lightbox mode.
                    </p>
                </div>
            </div>

            <!-- 9 Image Grid -->
            <div class="row g-4">

                <!-- Image 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(0)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni1.jpeg" alt="BNI Event Moment 1" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 01</div>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(1)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni2.jpeg" alt="BNI Event Moment 2" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 02</div>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(2)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni3.jpeg" alt="BNI Event Moment 3" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 03</div>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="col-lg-6 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(3)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni4.jpeg" alt="BNI Event Moment 4" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 04</div>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="col-lg-6 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(4)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni5.jpeg" alt="BNI Event Moment 5" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 05</div>
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(5)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni6.jpeg" alt="BNI Event Moment 6" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 06</div>
                    </div>
                </div>

                <!-- Image 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(6)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni7.jpeg" alt="BNI Event Moment 7" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 07</div>
                    </div>
                </div>

                <!-- Image 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(7)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/bni/bni8.jpeg" alt="BNI Event Moment 8" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 08</div>
                    </div>
                </div>

                <!-- Image 9 -->
                <div class="col-lg-12 col-md-12">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openBniLightbox(8)">
                        <div class="tst-img-wrapper" style="height: 420px;">
                            <img src="asset/img/bni/bni9.jpeg" alt="BNI Event Moment 9" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">BNI Gallery 09 — Chapter Feature</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
       04 — BNI LIGHTBOX MODAL CONTAINER
  =============================================== -->
    <div id="bniLightbox" class="tst-lightbox-modal" tabindex="-1">
        <button class="tst-lightbox-close" onclick="closeBniLightbox()"><i class="ri-close-line"></i></button>

        <button class="tst-lightbox-arrow tst-lightbox-prev" onclick="prevBniLightbox()"><i class="ri-arrow-left-s-line"></i></button>
        <button class="tst-lightbox-arrow tst-lightbox-next" onclick="nextBniLightbox()"><i class="ri-arrow-right-s-line"></i></button>

        <div class="tst-lightbox-content">
            <img id="bniLightboxImg" src="" alt="BNI Image" class="img-fluid">
            <div class="tst-lightbox-meta">
                <span id="bniLightboxCounter">01 / 09</span> — <span id="bniLightboxTitle">BNI Network Moment</span>
            </div>
        </div>
    </div>

    <!-- Inline Lightbox Script -->
    <script>
        const bniItems = [
            { src: 'asset/img/bni/bni1.jpeg', title: 'BNI Leadership Meeting' },
            { src: 'asset/img/bni/bni2.jpeg', title: 'Business Collaboration Session' },
            { src: 'asset/img/bni/bni3.jpeg', title: 'BNI Networking Presentation' },
            { src: 'asset/img/bni/bni4.jpeg', title: 'Chapter Award & Recognition' },
            { src: 'asset/img/bni/bni5.jpeg', title: 'BNI Synergy Member Group' },
            { src: 'asset/img/bni/bni6.jpeg', title: 'Professional Growth & Mentorship' },
            { src: 'asset/img/bni/bni7.jpeg', title: 'BNI Community Leadership' },
            { src: 'asset/img/bni/bni8.jpeg', title: 'Business Network Presentation' },
            { src: 'asset/img/bni/bni9.jpeg', title: 'BNI Chapter Feature Highlight' }
        ];

        let currentBniIndex = 0;
        const bniLightbox = document.getElementById('bniLightbox');
        const bniLightboxImg = document.getElementById('bniLightboxImg');
        const bniLightboxCounter = document.getElementById('bniLightboxCounter');
        const bniLightboxTitle = document.getElementById('bniLightboxTitle');

        function openBniLightbox(index) {
            currentBniIndex = index;
            updateBniLightbox();
            bniLightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeBniLightbox() {
            bniLightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateBniLightbox() {
            const item = bniItems[currentBniIndex];
            bniLightboxImg.src = item.src;
            bniLightboxCounter.textContent = `0${currentBniIndex + 1} / 0${bniItems.length}`;
            bniLightboxTitle.textContent = item.title;
        }

        function prevBniLightbox() {
            currentBniIndex = (currentBniIndex - 1 + bniItems.length) % bniItems.length;
            updateBniLightbox();
        }

        function nextBniLightbox() {
            currentBniIndex = (currentBniIndex + 1) % bniItems.length;
            updateBniLightbox();
        }

        // Keyboard Navigation
        document.addEventListener('keydown', function(e) {
            if (!bniLightbox || !bniLightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeBniLightbox();
            if (e.key === 'ArrowLeft') prevBniLightbox();
            if (e.key === 'ArrowRight') nextBniLightbox();
        });

        // Click outside image to close
        if (bniLightbox) {
            bniLightbox.addEventListener('click', function(e) {
                if (e.target === bniLightbox || e.target.classList.contains('tst-lightbox-content')) {
                    closeBniLightbox();
                }
            });
        }
    </script>

    <?php include 'footer.php'; ?>
</body>

</html>