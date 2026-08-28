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
                <span class="banner-300-tag">06 — Treasured Moments</span>
                <h1 class="banner-300-title mb-2">Captured Moments & Memories</h1>
                <!-- <p class="text-white-50 fs-5 mb-4 font-syne">A visual record of mentorship, lifesaving, awards & personal milestones.</p> -->
                <nav class="banner-300-breadcrumb justify-content-center" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                    <span class="current">Treasured Moments</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- ==============================================
       02 — GALLERY OVERVIEW & INTRO
  =============================================== -->
    <section class="py-5 bg-white position-relative">
        <div class="container px-lg-5 py-4">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <span class="bio-top-label">Visual Journey & Memories</span>
                    <h2 class="bio-main-heading mb-3">Memories Beyond the Water</h2>
                    <p class="bio-paragraph-text">
                        Every photograph tells a story of perseverance, community mentorship, lifesaving instruction, and shared growth across the years. Click any photo below to view in full-screen Lightbox mode.
                    </p>
                </div>
            </div>

            <!-- 25 Image Gallery Grid -->
            <div class="row g-4">
                <?php 
                $totalImages = 25;
                for ($i = 1; $i <= $totalImages; $i++): 
                    $numStr = sprintf("%02d", $i);
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tst-img-card rounded-4 bg-white overflow-hidden shadow-sm border position-relative h-100" onclick="openTmLightbox(<?php echo $i - 1; ?>)">
                        <div class="tst-img-wrapper" style="height: 300px;">
                            <img src="asset/img/treasure-moment/<?php echo $i; ?>.jpeg" alt="Treasured Moment <?php echo $numStr; ?>" class="img-fluid w-100 tst-gallery-img">
                        </div>
                        <div class="tst-img-overlay d-flex align-items-center justify-content-center">
                            <span class="btn btn-light rounded-pill px-4 py-2 shadow-sm font-syne fw-bold">
                                <i class="ri-zoom-in-line me-2 color-blue"></i> View Moment
                            </span>
                        </div>
                        <div class="tst-img-badge">Moment #<?php echo $numStr; ?></div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- ==============================================
       03 — LIGHTBOX MODAL CONTAINER
  =============================================== -->
    <div id="tmLightbox" class="tst-lightbox-modal" tabindex="-1">
        <button class="tst-lightbox-close" onclick="closeTmLightbox()"><i class="ri-close-line"></i></button>

        <button class="tst-lightbox-arrow tst-lightbox-prev" onclick="prevTmLightbox()"><i class="ri-arrow-left-s-line"></i></button>
        <button class="tst-lightbox-arrow tst-lightbox-next" onclick="nextTmLightbox()"><i class="ri-arrow-right-s-line"></i></button>

        <div class="tst-lightbox-content">
            <img id="tmLightboxImg" src="" alt="Treasured Moment" class="img-fluid">
            <div class="tst-lightbox-meta">
                <span id="tmLightboxCounter">01 / 25</span> — <span id="tmLightboxTitle">Treasured Moment</span>
            </div>
        </div>
    </div>

    <!-- Inline Lightbox Script -->
    <script>
        const tmItems = [];
        for (let i = 1; i <= 25; i++) {
            const numStr = i < 10 ? '0' + i : i;
            tmItems.push({
                src: `asset/img/treasure-moment/${i}.jpeg`,
                title: `Treasured Moment #${numStr}`
            });
        }

        let currentTmIndex = 0;
        const tmLightbox = document.getElementById('tmLightbox');
        const tmLightboxImg = document.getElementById('tmLightboxImg');
        const tmLightboxCounter = document.getElementById('tmLightboxCounter');
        const tmLightboxTitle = document.getElementById('tmLightboxTitle');

        function openTmLightbox(index) {
            currentTmIndex = index;
            updateTmLightbox();
            tmLightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeTmLightbox() {
            tmLightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function updateTmLightbox() {
            const item = tmItems[currentTmIndex];
            tmLightboxImg.src = item.src;
            const currentStr = (currentTmIndex + 1) < 10 ? '0' + (currentTmIndex + 1) : (currentTmIndex + 1);
            tmLightboxCounter.textContent = `${currentStr} / ${tmItems.length}`;
            tmLightboxTitle.textContent = item.title;
        }

        function prevTmLightbox() {
            currentTmIndex = (currentTmIndex - 1 + tmItems.length) % tmItems.length;
            updateTmLightbox();
        }

        function nextTmLightbox() {
            currentTmIndex = (currentTmIndex + 1) % tmItems.length;
            updateTmLightbox();
        }

        // Keyboard Navigation
        document.addEventListener('keydown', function(e) {
            if (!tmLightbox || !tmLightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeTmLightbox();
            if (e.key === 'ArrowLeft') prevTmLightbox();
            if (e.key === 'ArrowRight') nextTmLightbox();
        });

        // Click outside image to close
        if (tmLightbox) {
            tmLightbox.addEventListener('click', function(e) {
                if (e.target === tmLightbox || e.target.classList.contains('tst-lightbox-content')) {
                    closeTmLightbox();
                }
            });
        }
    </script>

    <?php include 'footer.php'; ?>
</body>

</html>
