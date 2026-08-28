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
                <span class="banner-300-tag">03 — Testimonials Gallery</span>
                <h1 class="banner-300-title mb-2">Student & Parent Appreciations</h1>
                <!-- <p class="text-white-50 fs-5 mb-4 font-syne">Real reviews, authentic letters, and moments of gratitude.</p> -->
                <nav class="banner-300-breadcrumb justify-content-center" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                    <span class="current">Testimonials</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- ==============================================
       02 — IMAGE-ONLY TESTIMONIAL GALLERY GRID
  =============================================== -->
    <section class="py-5 bg-light position-relative">
        <div class="container px-lg-5 py-4">

            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <span class="bio-top-label">Visual Proof & Experiences</span>
                    <h2 class="bio-main-heading mb-3">Trusted by Those He Teaches</h2>
                    <p class="bio-paragraph-text">
                        Click on any testimonial image below to open in full-screen Lightbox view.
                    </p>
                </div>
            </div>

            <!-- Testimonial Image Grid -->
            <div class="row g-4">

                <!-- Testimonial 1 (Main Full Review Sheet) -->
                <div class="col-lg-6 col-md-12">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(0)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/testimonial_orig.png" alt="Testimonial Letter" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">01 — Review Feature</div>
                    </div>
                </div>

                <!-- Testimonial 2 (Interview & Coaching Story) -->
                <div class="col-lg-6 col-md-12">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(1)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/interview_orig.jpeg" alt="Interview Feature" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">02 — Interview Feature</div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(2)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/t1_orig.jpeg" alt="Student Feedback 1" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">03 — Recommendation</div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(3)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/t2.jpeg" alt="Student Feedback 2" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">04 — Feedback</div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(4)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/t3_orig.jpeg" alt="Student Feedback 3" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-3 py-2 shadow-sm font-syne fw-bold small">
                                <i class="ri-zoom-in-line me-1 color-blue"></i> Enlarge
                            </span>
                        </div>
                        <div class="tst-img-badge">05 — Parent Letter</div>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(5)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/t4.jpeg" alt="Student Feedback 4" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">06 — Trainee Review</div>
                    </div>
                </div>

                <!-- Testimonial 7 -->
                <div class="col-lg-6 col-md-12">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative" onclick="openLightbox(6)">
                        <div class="tst-img-wrapper">
                            <img src="asset/img/testimonial/t5_orig.jpeg" alt="Student Feedback 5" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Full Image
                            </span>
                        </div>
                        <div class="tst-img-badge">07 — Course Feedback</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
       03 — LIGHTBOX MODAL CONTAINER
  =============================================== -->
    <div id="tstLightbox" class="tst-lightbox-modal" tabindex="-1">
        <button class="tst-lightbox-close" onclick="closeLightbox()"><i class="ri-close-line"></i></button>

        <button class="tst-lightbox-arrow tst-lightbox-prev" onclick="prevLightbox()"><i class="ri-arrow-left-s-line"></i></button>
        <button class="tst-lightbox-arrow tst-lightbox-next" onclick="nextLightbox()"><i class="ri-arrow-right-s-line"></i></button>

        <div class="tst-lightbox-content">
            <img id="lightboxImg" src="" alt="Testimonial Image" class="img-fluid">
            <div class="tst-lightbox-meta">
                <span id="lightboxCounter">01 / 07</span> — <span id="lightboxTitle">Testimonial Review</span>
            </div>
        </div>
    </div>

    <!-- Inline Lightbox Script -->
    <script>
        const galleryItems = [
            { src: 'asset/img/testimonial/testimonial_orig.png', title: 'Full Testimonial Review Sheet' },
            { src: 'asset/img/testimonial/interview_orig.jpeg', title: 'Interview & Coaching Feature' },
            { src: 'asset/img/testimonial/t1_orig.jpeg', title: 'Trainee Recommendation Letter' },
            { src: 'asset/img/testimonial/t2.jpeg', title: 'Student Experience Feedback' },
            { src: 'asset/img/testimonial/t3_orig.jpeg', title: 'Parent & Student Appreciation' },
            { src: 'asset/img/testimonial/t4.jpeg', title: 'Trainee Review & Course Feedback' },
            { src: 'asset/img/testimonial/t5_orig.jpeg', title: 'Lifesaving & Coaching Feedback' }
        ];

        let currentIndex = 0;
        const lightbox = document.getElementById('tstLightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const lightboxTitle = document.getElementById('lightboxTitle');

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateLightbox() {
            const item = galleryItems[currentIndex];
            lightboxImg.src = item.src;
            lightboxCounter.textContent = `0${currentIndex + 1} / 0${galleryItems.length}`;
            lightboxTitle.textContent = item.title;
        }

        function prevLightbox() {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            updateLightbox();
        }

        function nextLightbox() {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            updateLightbox();
        }

        // Keyboard Navigation
        document.addEventListener('keydown', function(e) {
            if (!lightbox || !lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') prevLightbox();
            if (e.key === 'ArrowRight') nextLightbox();
        });

        // Click outside image to close
        if (lightbox) {
            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox || e.target.classList.contains('tst-lightbox-content')) {
                    closeLightbox();
                }
            });
        }
    </script>

    <?php include 'footer.php'; ?>
</body>

</html>
