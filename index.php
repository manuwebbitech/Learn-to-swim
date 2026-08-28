<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- ==============================================
       HERO BANNER & ANIMATION
  =============================================== -->
    <header class="hero-banner-light">

        <!-- Hero Text & Image Container -->
        <div class="container hero-content-light px-lg-5">
            <div class="row align-items-center">

                <!-- Text Content -->
                <div class="col-lg-7">
                    <h1 class="hero-title-light gsap-reveal">
                        Beyond the Water.<br>
                        <span class="text-gradient-water-light">Into Life.</span>
                    </h1>
                    <p class="hero-subtitle-light gsap-reveal">
                        Swimming Coach. Lifesaving Teacher. Life Management Mentor. Translating the resilience required in the water into undeniable confidence and leadership in the real world.
                    </p>

                    <div class="btn-group-custom-light gsap-reveal">
                        <a href="#about" class="btn-premium-light btn-solid-blue">
                            Begin Your Journey <i class="ri-arrow-right-line fs-5"></i>
                        </a>
                        <a href="#contact" class="btn-premium-light btn-outline-dark">
                            Discover the Story
                        </a>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="col-lg-5 mt-5 mt-lg-0 gsap-reveal">
                    <div class="hero-image-wrapper">
                        <!-- Professional portrait or coaching image goes here -->
                        <img src="asset/img/profile.webp" alt="Isaac Coaching" class="img-fluid ban-img rounded-4 " style="object-fit: cover; height: 500px; width: 100%;">
                        <div class="image-backdrop-glow"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ==============================================
         WAVE & SWIMMER SVG
    =============================================== -->
        <div class="wave-container">
            <!-- Hero Interactive Water Physics Canvas -->
            <canvas id="heroWaterCanvas" class="hero-water-canvas"></canvas>

            <!-- Swimmer SVG Animation with Wake & Water Aura -->
            <div class="swimmer-animation" id="heroSwimmer">
                <div class="swimmer-graphic-container">
                    <svg class="swimmer-svg" width="125" height="auto" viewBox="0 0 1284 576" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M239.428 479.046L250.699 485.959C403.393 526.24 659.714 612.142 798.907 558.524C902.403 518.657 997.598 462.324 1091.91 404.696C1114.89 390.659 1114.33 389.749 1093.85 371.407C1092.05 369.792 1090.44 367.919 1088.5 366.499C1083.08 362.531 1083.47 358.726 1088.75 355.205C1098 349.039 1107.45 343.16 1116.65 336.928C1124.25 331.788 1131.29 331.606 1139.59 336.174C1149.31 341.527 1159.63 346.066 1170.14 349.631C1188.57 355.883 1201.99 349.51 1208.02 331.336C1210.87 322.723 1214.29 316.628 1224.03 315.416C1227.98 314.925 1232.33 311.823 1231.17 307.644C1227.45 294.238 1245.26 289.785 1243.11 277.221C1242.79 275.375 1245.6 274.929 1247.53 274.387C1270.13 268.062 1272.67 265.175 1268.87 242.802C1265.31 221.824 1267.13 202.516 1279.29 184.456C1282.12 180.261 1283.81 174.469 1283.87 169.387C1284.31 133.841 1277.31 100.197 1257.43 69.9141C1223.74 18.5661 1165.15 -8.468 1110.39 2.36599C1022.75 19.7085 981.173 105.636 1020.3 188.543C1022.82 193.883 1028.49 199.144 1021.05 204.985C1011.66 212.363 1006.21 227.745 991.366 224.34C971.776 219.848 952.404 216.805 932.41 219.41C927.528 220.046 924.055 219.428 922.109 214.156C915.458 196.14 901.213 185.154 885.014 176.93C836.515 152.309 784.954 139.709 730.6 144.598C709.938 146.456 691.382 144.159 672.962 135.855C669.436 134.266 665.664 133.236 662.067 131.79C606.555 109.463 547.734 104.91 489.261 105.181C437.834 105.422 385.475 105.623 336.365 127.064C303.414 141.45 271.413 157.322 240.951 176.401C207.889 197.11 172.724 210.76 132.732 208.976C117.978 208.317 103.904 212.355 91.0089 219.755C49.3577 243.657 25.4744 282.733 3.18978 323.09C0.11611 328.658 -1.68433 334.893 2.27183 341.021C6.57558 347.688 12.9812 343.519 19.659 342.387C14.229 353.105 7.14117 360.784 4.54075 370.781C3.67781 374.094 2.81637 377.688 5.81634 380.293C9.17431 383.208 13.2251 382.839 16.5719 380.433C20.4712 377.631 24.1564 374.413 27.4671 370.933C39.5153 358.268 52.2869 346.433 66.1257 335.74C79.194 325.644 94.2163 320.79 110.397 319.083C114.623 318.637 120.019 317.727 122.182 321.886C124.133 325.632 119.637 328.783 117.282 331.595C109.812 340.517 102.072 349.19 96.4119 359.475C90.4488 370.307 91.2148 380.805 97.5337 391.165C101.873 398.279 105.608 398.661 109.425 390.58C115.932 376.797 124.299 363.628 137.26 355.802C155.424 344.831 167.702 328.983 179.133 312.149C199.807 281.707 224.746 257.198 261.396 246.638C278.747 241.637 296.266 238.378 314.131 236.758C357.058 232.864 400.516 231.865 442.107 219.483C477.027 209.087 509.25 211.652 541.79 228.493C591.013 253.969 642.291 274.498 697.616 282.864C706.302 284.178 709.053 286.726 702.273 294.3C675.664 324.022 654.976 358.136 631.954 390.489C604.52 429.049 565.389 445.024 520.922 452.17C512.179 453.576 504.696 450.453 497.559 446.091C444.97 413.95 388.596 411.096 330.623 426C295.753 434.964 265.368 452.512 239.428 479.046Z" fill="url(#swimmerGradient)" />
                        <defs>
                            <linearGradient id="swimmerGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#00b4d8" />
                                <stop offset="50%" stop-color="#0051ff" />
                                <stop offset="100%" stop-color="#00b4d8" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <!-- Water Splash Aura Ring around swimmer -->
                    <div class="swimmer-water-aura"></div>
                </div>
            </div>

            <!-- Wave 1 (Back, light cyan) -->
            <svg class="wave wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="rgba(0, 180, 216, 0.22)" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,128C672,107,768,117,864,144C960,171,1056,213,1152,208C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
            <!-- Wave 2 (Middle, deep blue) -->
            <svg class="wave wave2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="rgba(0, 81, 255, 0.12)" d="M0,224L60,213.3C120,203,240,181,360,186.7C480,192,600,224,720,240C840,256,960,256,1080,240C1200,224,1320,192,1380,176L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
            <!-- Wave 3 (Front, solid white to merge with next section) -->
            <svg class="wave wave3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,96L48,112C96,128,192,160,288,165.3C384,171,480,149,576,144C672,139,768,149,864,170.7C960,192,1056,224,1152,213.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

    </header>


    <!-- ==============================================
     ABOUT ISAAC SECTION (UNIQUE CLASSES)
=============================================== -->
    <section id="about" class="isaac-bio-wrapper">
        <div class="container px-lg-5">
            <div class="row align-items-center">

                <!-- Left Column: Asymmetrical Image & Floating Quote -->
                <div class="col-lg-5 mb-5 mb-lg-0 position-relative reveal-bio-visual">

                    <div class="bio-visual-container">
                        <!-- ISAAC'S SUPPLIED PORTRAIT FILE -->
                        <img src="asset/img/profile.webp" alt="Isaac Mentoring & Coaching" class="bio-portrait-img">
                        <div class="bio-portrait-backdrop"></div>
                    </div>

                    <!-- Floating Glassmorphism Quote Box -->
                    <div class="bio-glass-quote-box">
                        <i class="ri-double-quotes-l bio-quote-mark"></i>
                        <h4 class="bio-quote-headline">Together, Everyone Achieve More.</h4>
                    </div>

                </div>

                <!-- Right Column: Titles, Bio & CTA -->
                <div class="col-lg-6 offset-lg-1 reveal-bio-content">

                    <span class="bio-top-label">About Isaac</span>

                    <h2 class="bio-main-heading mb-4">
                        Investor <span class="bio-separator-dot">•</span> Author <br>
                        Mentor <span class="bio-separator-dot">•</span> Coach
                    </h2>

                    <div class="bio-paragraph-group">
                        <p class="bio-paragraph-text mb-3">
                            Lee Minghan Isaac is a <strong>Life Managing Director, Swimming Coach and Lifesaving Teacher</strong> with a journey shaped by sport, leadership and professional experience.
                        </p>
                        <p class="bio-paragraph-text mb-4">
                            From competitive swimming and lifesaving to coaching and mentoring, his mission is to help people build confidence, resilience and purpose.
                        </p>
                    </div>

                    <a href="#journey" class="bio-action-link mt-2">
                        Discover His Journey <i class="ri-arrow-right-line"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
     REDESIGNED EARLY YEARS SECTION
=============================================== -->
    <section id="early-years" class="early-redesigned-wrapper">
        <div class="container px-lg-5">
            <div class="row align-items-center">

                <!-- Left Column: Text & Highlights -->
                <div class="col-lg-6 mb-5 mb-lg-0 gsap-early-text">
                    <span class="early-badge">Early Years</span>

                    <h2 class="early-heading mt-3">Where Leadership <br>Began.</h2>
                    <div class="early-divider"></div>

                    <p class="early-body-text mt-4">
                        Isaac’s journey began at <strong>Maris Stella High School</strong>, where his involvement in St John Ambulance and the Student Council shaped his early understanding of leadership, teamwork and responsibility.
                    </p>
                    <p class="early-body-text mb-5">
                        These formative years laid the foundation for the leader, coach and mentor he would become.
                    </p>

                    <!-- Vertical Highlight List -->
                    <div class="early-features-list">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="ri-medal-fill"></i></div>
                            <div class="feature-text">Certificate of Merit</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="ri-wallet-3-fill"></i></div>
                            <div class="feature-text">Student Council Treasurer</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon"><i class="ri-heart-pulse-fill"></i></div>
                            <div class="feature-text">St John Ambulance</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Stacked Logo Cards -->
                <div class="col-lg-5 offset-lg-1 position-relative gsap-early-cards">
                    <div class="school-cards-container">

                        <!-- Back Card (Nanyang Poly) -->
                        <div class="school-card card-back">
                            <span class="school-label">Tertiary Days</span>
                            <div class="school-img-box">
                                <img src="asset/img/nyp-logo.png" alt="Nanyang Polytechnic" class="img-fluid">
                            </div>
                        </div>

                        <!-- Front Card (Maris Stella) -->
                        <div class="school-card card-front">
                            <span class="school-label">The Beginning</span>
                            <div class="school-img-box">
                                <img src="asset/img/mshs-logo_orig.jpg" alt="Maris Stella High School" class="img-fluid">
                            </div>
                        </div>

                        <!-- Decorative Water Ring -->
                        <div class="deco-ring"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
     TERTIARY DAYS SECTION
=============================================== -->
    <section id="tertiary-days" class="tert-section-wrapper">
        <div class="container px-lg-5">
            <div class="row position-relative">

                <!-- Left Column: Intro & Quote -->
                <div class="col-lg-5 mb-5 mb-lg-0 gsap-tert-left">
                    <div class="tert-sticky-content">
                        <span class="tert-badge">Tertiary Days</span>

                        <h2 class="tert-heading mt-3">Where Passion <br>Met Leadership.</h2>
                        <div class="tert-divider"></div>

                        <p class="tert-body-text mt-4">
                            Three years at <strong>Nanyang Polytechnic</strong> became a defining chapter in Isaac’s journey, blending intense competition, creative exploration, and early management roles.
                        </p>

                        <!-- Cinematic Quote Block -->
                        <div class="tert-quote-box mt-5">
                            <i class="ri-double-quotes-l tert-quote-icon"></i>
                            <h4 class="tert-quote-text">Together, Everyone Achieve More.</h4>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Timeline -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="tert-timeline-container">

                        <!-- Milestone 1: Sports & Lifesaving -->
                        <div class="tert-timeline-card gsap-tert-card">
                            <div class="tert-timeline-dot"></div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="tert-card-icon"><i class="ri-lifebuoy-fill"></i></div>
                                <h4 class="tert-card-title mb-0">Sports & Lifesaving</h4>
                            </div>
                            <div class="tert-card-img-wrapper mb-3">
                                <img src="asset/img/posb-champion_orig.jpeg" alt="Sports & Lifesaving Milestone" class="img-fluid rounded-3 tert-milestone-img">
                            </div>
                            <p class="tert-card-desc">
                                Represented the school in Swimming, Water Polo, Chinese Chess, and Lifesaving. Proudly earned a <strong>Silver Medal in CPR</strong> at an NUS Invitational Lifesaving Competition.
                            </p>
                        </div>

                        <!-- Milestone 2: Arts & Campus Life -->
                        <div class="tert-timeline-card gsap-tert-card">
                            <div class="tert-timeline-dot"></div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="tert-card-icon"><i class="ri-music-2-fill"></i></div>
                                <h4 class="tert-card-title mb-0">Arts & Campus Life</h4>
                            </div>
                            <div class="tert-card-img-wrapper mb-3">
                                <img src="asset/img/nyp-logo.png" alt="Nanyang Polytechnic Symphony Band" class="img-fluid rounded-3 tert-milestone-img p-3 bg-light border">
                            </div>
                            <p class="tert-card-desc">
                                Explored music as a Symphony Band percussionist and led major orientation activities, including choreographing a creative <strong>“Storm” performance</strong>.
                            </p>
                        </div>

                        <!-- Milestone 3: Early Leadership -->
                        <div class="tert-timeline-card gsap-tert-card">
                            <div class="tert-timeline-dot"></div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="tert-card-icon"><i class="ri-team-fill"></i></div>
                                <h4 class="tert-card-title mb-0">National Leadership at 18</h4>
                            </div>
                            <div class="tert-card-img-wrapper mb-3">
                                <img src="asset/img/sun-xue-ling.jpeg" alt="National Lifesaving Leadership" class="img-fluid rounded-3 tert-milestone-img">
                            </div>
                            <p class="tert-card-desc">
                                Became the youngest Assistant Team Manager of the <strong>Ang Mo Kio Constituency Sports Club Lifesaving Team</strong>, leading them to a Top 3 finish in a national competition in 2000.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
       ACCOLADES EDITORIAL SLIDER SECTION
  =============================================== -->
    <section id="accolades" class="isaac-magazine-acc">
        <div class="mag-glow"></div>

        <div class="container px-lg-5">

            <!-- Section Header -->
            <div class="row mb-4 gsap-acc-header">
                <div class="col-lg-12">
                    <span class="mag-badge">Accolades</span>
                    <h2 class="mag-heading mt-3">Recognised Through <br>the Journey.</h2>
                    <div class="mag-divider"></div>
                    <p class="mag-body-text mt-4">
                        A visual curation of milestones, coaching honors, and lifesaving awards reflecting a lifetime of dedication and community impact.
                    </p>
                </div>
            </div>

            <!-- Swiper Editorial Slider Viewport -->
            <div class="swiper mag-swiper-container gsap-acc-slider">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="mag-slide-card">
                            <span class="mag-index-stamp">01</span>
                            <img src="asset/img/posb-champion_orig.jpeg" alt="Coaches Award" class="mag-bg-image">
                            <div class="mag-gradient-layer"></div>
                            <div class="mag-content-area">
                                <span class="mag-category-tag">Excellence in Leadership</span>
                                <h3 class="mag-title">Coaches Award</h3>
                                <p class="mag-desc">POSB Everyday Champions — Honoring standout leadership, mentorship, and community coaching.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="mag-slide-card">
                            <span class="mag-index-stamp">02</span>
                            <img src="asset/img/ncps-award.jpeg" alt="Outstanding Contribution" class="mag-bg-image">
                            <div class="mag-gradient-layer"></div>
                            <div class="mag-content-area">
                                <span class="mag-category-tag">Community Impact</span>
                                <h3 class="mag-title">Outstanding Contribution</h3>
                                <p class="mag-desc">Recognised for dedicated community service and empowering the next generation.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="mag-slide-card">
                            <span class="mag-index-stamp">03</span>
                            <img src="asset/img/aquatic-speical-needs.jpeg" alt="Aquatic Teaching" class="mag-bg-image">
                            <div class="mag-gradient-layer"></div>
                            <div class="mag-content-area">
                                <span class="mag-category-tag">Specialized Certification</span>
                                <h3 class="mag-title">Aquatic Teaching</h3>
                                <p class="mag-desc">Special Needs certification, championing inclusive, safe, and adaptive aquatic coaching.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="mag-slide-card">
                            <span class="mag-index-stamp">04</span>
                            <img src="asset/img/sun-xue-ling.jpeg" alt="Safety Training Awards" class="mag-bg-image">
                            <div class="mag-gradient-layer"></div>
                            <div class="mag-content-area">
                                <span class="mag-category-tag">Lifesaving & Water Safety</span>
                                <h3 class="mag-title">Safety Training Awards</h3>
                                <p class="mag-desc">Advanced milestones and instruction credentials in professional lifesaving protocols.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Controls & CTA Bar -->
            <div class="mag-controls-bar gsap-acc-nav">
                <div class="d-flex align-items-center w-100 flex-wrap flex-lg-nowrap justify-content-between">
                    <div class="mag-nav-group order-2 order-lg-1 mb-3 mb-lg-0">
                        <button class="mag-arrow-btn mag-btn-prev" aria-label="Previous Slide">
                            <i class="ri-arrow-left-line"></i>
                        </button>
                        <button class="mag-arrow-btn mag-btn-next" aria-label="Next Slide">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <div class="mag-progress-container order-1 order-lg-2 mb-4 mb-lg-0 w-100 w-lg-auto">
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="order-3">
                        <a href="#all-accolades" class="mag-cta-btn">
                            View All Accolades <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==============================================
       TESTIMONIALS REDESIGNED SECTION
  =============================================== -->
    <section id="testimonials" class="tst-section-wrapper">
        <div class="tst-ambient-glow"></div>

        <div class="container px-lg-5">

            <!-- Section Header -->
            <div class="row mb-4 gsap-tst-header">
                <div class="col-lg-8">
                    <span class="tst-badge">Testimonials</span>
                    <h2 class="tst-heading mt-3">Trusted by Those <br>He Teaches.</h2>
                    <div class="tst-divider"></div>
                    <p class="tst-body-text mt-4">
                        Real experiences from students and families who have learned, grown and gained confidence through Isaac’s coaching.
                    </p>
                </div>
            </div>

            <!-- Swiper Viewport -->
            <div class="swiper tst-swiper-container gsap-tst-slider">
                <div class="swiper-wrapper">

                    <!-- Testimonial 1 (HiKwanHi) -->
                    <div class="swiper-slide">
                        <div class="tst-card">
                            <i class="ri-double-quotes-r tst-quote-icon-bg"></i>
                            <div>
                                <div class="tst-stars-row">
                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                </div>
                                <p class="tst-quote-text">
                                    “SportEagle is not just a place for swimmers-to-be to learn a new skill, but one where you can make new friends. Coach Isaac's lessons have the perfect mix of kind encouragement and passionate intensity, allowing learners to both progress swiftly while feeling confident.”
                                </p>
                            </div>
                            <div class="tst-author-meta">
                                <div class="tst-author-avatar">HK</div>
                                <div>
                                    <h4 class="tst-author-name">HiKwanHi</h4>
                                    <p class="tst-author-title">SportsEagle.com.sg Student</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 (Chris C Paragas) -->
                    <div class="swiper-slide">
                        <div class="tst-card">
                            <i class="ri-double-quotes-r tst-quote-icon-bg"></i>
                            <div>
                                <div class="tst-stars-row">
                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                </div>
                                <p class="tst-quote-text">
                                    “Efficient and highly knowledgeable instructors. They delivered their teachings in the most effective method so that a student can easily understand. Highly recommended!”
                                </p>
                            </div>
                            <div class="tst-author-meta">
                                <div class="tst-author-avatar">CP</div>
                                <div>
                                    <h4 class="tst-author-name">Chris C Paragas</h4>
                                    <p class="tst-author-title">Verified Reviewer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 (Harlan Ryan) -->
                    <div class="swiper-slide">
                        <div class="tst-card">
                            <i class="ri-double-quotes-r tst-quote-icon-bg"></i>
                            <div>
                                <div class="tst-stars-row">
                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                </div>
                                <p class="tst-quote-text">
                                    “Thank you so much for your patiently teaching. We’ve learned a lot of knowledge and also had fun during the training.”
                                </p>
                            </div>
                            <div class="tst-author-meta">
                                <div class="tst-author-avatar">HR</div>
                                <div>
                                    <h4 class="tst-author-name">Harlan Ryan</h4>
                                    <p class="tst-author-title">Student / Trainee</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 (Spino Man) -->
                    <div class="swiper-slide">
                        <div class="tst-card">
                            <i class="ri-double-quotes-r tst-quote-icon-bg"></i>
                            <div>
                                <div class="tst-stars-row">
                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                </div>
                                <p class="tst-quote-text">
                                    “Great and enriching. Learnt a lot.”
                                </p>
                            </div>
                            <div class="tst-author-meta">
                                <div class="tst-author-avatar">SM</div>
                                <div>
                                    <h4 class="tst-author-name">Spino Man</h4>
                                    <p class="tst-author-title">Swimming Trainee</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5 (Puvanvesaran Nadarajoo) -->
                    <div class="swiper-slide">
                        <div class="tst-card">
                            <i class="ri-double-quotes-r tst-quote-icon-bg"></i>
                            <div>
                                <div class="tst-stars-row">
                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                </div>
                                <p class="tst-quote-text">
                                    “Isaac is a really good swimming coach covering more than the basics. He makes sure everyone understands and knows how to apply the techniques correctly.”
                                </p>
                            </div>
                            <div class="tst-author-meta">
                                <div class="tst-author-avatar">PN</div>
                                <div>
                                    <h4 class="tst-author-name">Puvanvesaran Nadarajoo</h4>
                                    <p class="tst-author-title">Advanced Trainee</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Controls & CTA Row -->
            <div class="tst-controls-row gsap-tst-nav">
                <div class="tst-nav-buttons-group">
                    <button class="tst-arrow-btn tst-btn-prev" aria-label="Previous Slide">
                        <i class="ri-arrow-left-line"></i>
                    </button>

                    <!-- Unique Fractional Counter -->
                    <div class="tst-fraction-pagination"></div>

                    <button class="tst-arrow-btn tst-btn-next" aria-label="Next Slide">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <div>
                    <a href="testimonials.php" class="tst-cta-link">
                        View All Testimonials <i class="ri-arrow-right-up-line"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- ==============================================
       MINIMAL QUOTE SECTION
  =============================================== -->
    <section class="min-qte-wrapper">
        <div class="container d-flex justify-content-center">
            <div class="min-qte-container">

                <div class="min-qte-line"></div>

                <h2 class="min-qte-text">
                    “It’s not how you start, but it’s how you finish.”
                </h2>

                <span class="min-qte-author">Michael Phelps</span>

            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>