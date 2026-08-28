<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- ==============================================
       300PX HEIGHT MINIMAL BANNER SECTION
  =============================================== -->
    <section class="banner-300-wrapper">
        <div class="container d-flex justify-content-center">
            <div class="banner-300-container">

                <span class="banner-300-tag">Overview</span>

                <h1 class="banner-300-title">Accolades</h1>

                <nav class="banner-300-breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                    <span class="current">Accolades</span>
                </nav>

            </div>
        </div>
    </section>


    <!-- ==============================================
       SECTION INTRO & FEATURED RECOGNITION
  =============================================== -->
    <section class="acc-main-wrapper">
        <div class="container px-lg-5">

            <!-- 01 — Section Intro -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <span class="acc-section-tag">01 — Accolades</span>
                    <h2 class="acc-editorial-heading">Moments That<br>Made the Journey Matter.</h2>
                    <p class="acc-intro-desc">
                        Every award represents more than a milestone. It reflects years of learning, coaching, leadership and the people who made the journey meaningful.
                    </p>
                </div>
            </div>

            <!-- 02 — Featured Recognition (POSB Everyday Champions) -->
            <div class="acc-featured-card">
                <span class="acc-bg-year">2010</span>
                <div class="row align-items-center acc-featured-content">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="asset/img/posb-champion_orig.jpeg" alt="POSB Everyday Champions 2010" class="acc-featured-img">
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <span class="acc-featured-badge">Coaches Award · 2010</span>
                        <h3 class="acc-featured-title">Recognised for Making an Impact</h3>
                        <p class="acc-featured-desc">
                            The POSB Everyday Champions Coaches Award represents Isaac’s contribution to sports and coaching — recognising the dedication, energy and commitment he brings to developing others.
                        </p>
                        <div class="acc-meta-list">
                            <div class="acc-meta-item">
                                <span>Award</span>
                                <strong>POSB Everyday Champions</strong>
                            </div>
                            <div class="acc-meta-item">
                                <span>Category</span>
                                <strong>Coaches Award</strong>
                            </div>
                            <div class="acc-meta-item">
                                <span>Year</span>
                                <strong>2010</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==============================================
       INTERACTIVE RECOGNITION CARDS (03 & 04)
  =============================================== -->
    <section class="acc-interactive-wrapper">
        <div class="container px-lg-5">

            <div class="row mb-4">
                <div class="col-12">
                    <span class="acc-section-tag">03 & 04 — Interactive Exploration</span>
                    <h3 style="font-family: 'Syne', sans-serif; font-weight: 800; color: #001f3f; font-size: 2rem;">Selected Milestones</h3>
                </div>
            </div>

            <!-- Interactive Tab Controls -->
            <div class="acc-nav-tabs-custom" id="accTabs">
                <button class="acc-tab-btn active" onclick="switchRecognition(0)">01 — Contribution</button>
                <button class="acc-tab-btn" onclick="switchRecognition(1)">02 — Coaching</button>
                <button class="acc-tab-btn" onclick="switchRecognition(2)">03 — Teaching</button>
                <button class="acc-tab-btn" onclick="switchRecognition(3)">04 — Safety</button>
            </div>

            <!-- Dynamic Card Display Container -->
            <div class="acc-dynamic-card" id="accCardContainer">
                <!-- Content gets injected dynamically by JavaScript -->
            </div>

        </div>
    </section>

    <!-- ==============================================
       PEOPLE BEHIND THE JOURNEY (RENEWED DARK LAYOUT - NO PINK)
  =============================================== -->
    <section class="journey-dark-wrapper">
        <div class="container px-lg-5">

            <p class="journey-top-subtitle">
                "Without the guidance of Legends, past and present friends working together, there won't be the current Lee around..."
            </p>

            <div class="row align-items-center g-5">

                <!-- Left Column: Modern Bento Photo Grid Layout -->
                <div class="col-lg-5">
                    <div class="journey-bento-grid">
                        <div class="journey-bento-item"><img src="asset/img/dr-teo.jpeg" alt="Mentorship Moment"></div>
                        <div class="journey-bento-item"><img src="asset/img/with-dad-2010.jpeg" alt="Mentorship Moment"></div>
                        <div class="journey-bento-item"><img src="asset/img/with-rlss.jpeg" alt="Mentorship Moment"></div>
                        <div class="journey-bento-item"><img src="asset/img/with-prof-2010.jpeg" alt="Mentorship Moment"></div>
                        <div class="journey-bento-item"><img src="asset/img/richard-sng-tm_orig.jpeg" alt="Mentorship Moment"></div>
                        <div class="journey-bento-item"><img src="asset/img/sun-xue-ling.jpeg" alt="Mentorship Moment"></div>
                    </div>
                </div>

                <!-- Right Column: Sleek Glass Content Box -->
                <div class="col-lg-7">
                    <div class="journey-content-card">
                        <span class="acc-section-tag" style="color: #00f0ff;">PEOPLE BEHIND THE JOURNEY</span>
                        <h2 class="journey-section-title">No Achievement Happens Alone.</h2>
                        <p class="journey-lead-text">
                            Behind every milestone are people who shared their knowledge, opened doors, offered guidance and believed in the journey. From family and mentors to coaches, colleagues, lecturers and teammates, Isaac’s journey has been shaped by countless people who contributed in ways big and small.
                        </p>

                        <div class="mentors-category-title">Core Mentors & Family</div>
                        <div class="mentors-names-list">
                            Dad & Mum <span>/</span> Dr. Teo <span>/</span> Dr. Koh <span>/</span> Dr. Lin L.T <span>/</span> Prof. Lee Yee Kee <span>/</span> Prof. Lok Tat Seng <span>/</span> Lifesaving Grand Master Lee Wee Wong
                        </div>

                        <div class="mentors-category-title">Friends & Professional Influences</div>
                        <div class="mentors-names-list">
                            Mrs. Koh <span>/</span> Mr. Dennis Koh <span>/</span> Mr. Chua Tian San <span>/</span> Mr. Christopher Thodey <span>/</span> Mr. Paul Leong <span>/</span> Mr. Wilbur Wong <span>/</span> Mr. Foo <span>/</span> Mr. Ambrose Lee
                        </div>

                        <div class="mentors-category-title">Institutions & Networks</div>
                        <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6; margin-top: 5px;">
                            And many lecturers, managers, teammates and friends from Nanyang Polytechnic, Universities, Bloomberg, Great Eastern, Resorts World Sentosa, MOE, SLSS, and PA.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==============================================
       05 — CLOSING STATEMENT
  =============================================== -->
    <section class="acc-closing-wrapper">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="acc-closing-quote">
                        The Award Is the Moment.
                        <span>The People Are the Story.</span>
                    </h2>
                    <p class="acc-closing-desc">
                        Every recognition carries a story — of people, persistence, lessons and shared experiences.
                    </p>
                    <div class="acc-closing-motto">
                        Together, Everyone Achieve More.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==============================================
       BACKGROUND IMAGE QUOTE SECTION
  =============================================== -->
    <section class="bg-qte-wrapper">
        <div class="container d-flex justify-content-center">

            <!-- Floating Frosted Glass Card -->
            <div class="bg-qte-card">

                <!-- Watermark Icon -->
                <i class="ri-double-quotes-l bg-qte-watermark"></i>

                <!-- Quote Text -->
                <h2 class="bg-qte-text">
                    “Acknowledging the good that you already have in your life is the foundation for all <span class="bg-qte-highlight">abundance.</span>”
                </h2>

                <!-- Author -->
                <div class="bg-qte-author-box">
                    <div class="bg-qte-line"></div>
                    <h4 class="bg-qte-author">Eckhart Tolle</h4>
                    <div class="bg-qte-line"></div>
                </div>

            </div>

        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>