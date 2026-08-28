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
                <span class="banner-300-tag">08 — Get In Touch</span>
                <h1 class="banner-300-title mb-2">Connect With Isaac</h1>
                <!-- <p class="text-white-50 fs-5 mb-4 font-syne">Open for Swimming Coaching, Lifesaving Instruction, Life Mentorship & BNI Collaboration.</p> -->
                <nav class="banner-300-breadcrumb justify-content-center" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                    <span class="current">Contact</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- ==============================================
       02 — CONTACT SECTION WITH FORM & DETAILS
  =============================================== -->
    <section class="py-5 bg-light position-relative">
        <div class="container px-lg-5 py-4">

            <div class="row g-5">

                <!-- Left Column: Direct Contact Info -->
                <div class="col-lg-5">
                    <span class="bio-top-label">Direct Communication</span>
                    <h2 class="bio-main-heading mb-4">Start a Conversation</h2>
                    <p class="bio-paragraph-text mb-4">
                        Whether you are looking to master swimming technique, earn lifesaving certifications, seek life management mentorship, or explore business collaboration through BNI, Isaac is ready to connect.
                    </p>

                    <!-- Email Contact Card -->
                    <div class="p-4 rounded-4 bg-white border shadow-sm mb-4">
                        <span class="text-info small fw-bold font-syne text-uppercase tracking-wide d-block mb-1">Direct Email</span>
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <a href="mailto:isaac@leeminghan.com" class="fs-5 font-syne fw-bold text-navy text-decoration-none">
                                isaac@leeminghan.com
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-info rounded-pill px-3 font-syne fw-bold" onclick="copyContactEmail()" id="contactCopyBtn">
                                <i class="ri-file-copy-line me-1"></i> Copy
                            </button>
                        </div>
                    </div>

                    <!-- Phone / Mobile Contact Card -->
                    <div class="p-4 rounded-4 bg-white border shadow-sm mb-4">
                        <span class="text-info small fw-bold font-syne text-uppercase tracking-wide d-block mb-1">Direct Phone / WhatsApp</span>
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <a href="tel:+6591234567" class="fs-5 font-syne fw-bold text-navy text-decoration-none">
                                +65 9123 4567
                            </a>
                            <a href="https://wa.me/6591234567?text=Hello%20Isaac" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success rounded-pill px-3 font-syne fw-bold">
                                <i class="ri-whatsapp-line me-1"></i> Call / Chat
                            </a>
                        </div>
                    </div>

                    <!-- Quick Details Grid -->
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-4 bg-white border shadow-sm">
                                <i class="ri-map-pin-2-fill fs-3 text-info mb-1 d-block"></i>
                                <span class="small text-muted d-block font-jakarta">Location</span>
                                <strong class="font-syne text-navy">Singapore</strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-4 bg-white border shadow-sm">
                                <i class="ri-checkbox-circle-fill fs-3 text-success mb-1 d-block"></i>
                                <span class="small text-muted d-block font-jakarta">Status</span>
                                <strong class="font-syne text-navy">Open for Coaching</strong>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Quick Link -->
                    <a href="https://wa.me/?text=Hello%20Isaac,%20I%20would%20like%20to%20inquire%20about..." target="_blank" rel="noopener" class="p-4 rounded-4 bg-success text-white text-decoration-none d-flex align-items-center justify-content-between shadow-sm hover-lift">
                        <div>
                            <span class="small fw-bold text-white-50 font-syne text-uppercase d-block">Instant Message</span>
                            <strong class="fs-5 font-syne">Connect via WhatsApp</strong>
                        </div>
                        <i class="ri-whatsapp-line fs-1 text-white"></i>
                    </a>
                </div>

                <!-- Right Column: Interactive Form -->
                <div class="col-lg-7">
                    <div class="p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                        <h3 class="fs-3 font-syne fw-bold text-navy mb-2">Send a Message</h3>
                        <p class="text-muted font-jakarta small mb-4">Fill out the form below and Isaac will get back to you promptly.</p>

                        <form id="contactForm" onsubmit="handleFormSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label font-syne fw-bold text-navy small">Your Full Name</label>
                                    <input type="text" class="form-control rounded-3 p-3 font-jakarta border-light-subtle" id="fullName" placeholder="e.g. John Tan" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="emailAddr" class="form-label font-syne fw-bold text-navy small">Email Address</label>
                                    <input type="email" class="form-control rounded-3 p-3 font-jakarta border-light-subtle" id="emailAddr" placeholder="e.g. john@example.com" required>
                                </div>

                                <div class="col-12">
                                    <label for="serviceCategory" class="form-label font-syne fw-bold text-navy small">Interested Program / Topic</label>
                                    <select class="form-select rounded-3 p-3 font-jakarta border-light-subtle" id="serviceCategory" required>
                                        <option value="" selected disabled>Select an option...</option>
                                        <option value="Swimming Coaching">Swimming Coaching & Technique</option>
                                        <option value="Lifesaving Instruction">Lifesaving Certification & Water Safety</option>
                                        <option value="Life Management Mentorship">Life Management Mentorship</option>
                                        <option value="BNI Business Synergy">BNI Business Synergy & Networking</option>
                                        <option value="General Inquiry">General Inquiry / Speaking</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="messageText" class="form-label font-syne fw-bold text-navy small">Your Message</label>
                                    <textarea class="form-control rounded-3 p-3 font-jakarta border-light-subtle" id="messageText" rows="5" placeholder="Share a few details about what you'd like to discuss..." required></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary rounded-pill px-5 py-3 font-syne fw-bold w-100 shadow-sm" id="submitMsgBtn">
                                        <i class="ri-send-plane-fill me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div id="formSuccessAlert" class="alert alert-success rounded-3 mt-4 d-none" role="alert">
                            <i class="ri-checkbox-circle-fill me-2"></i> Thank you! Your message has been sent successfully. Isaac will get in touch with you shortly.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Inline Script for Copy & Form -->
    <script>
        function copyContactEmail() {
            navigator.clipboard.writeText("isaac@leeminghan.com").then(function() {
                const btn = document.getElementById("contactCopyBtn");
                if (btn) {
                    btn.innerHTML = '<i class="ri-check-line me-1 text-success"></i> Copied!';
                    setTimeout(() => {
                        btn.innerHTML = '<i class="ri-file-copy-line me-1"></i> Copy';
                    }, 2500);
                }
            });
        }

        function handleFormSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById("submitMsgBtn");
            const alert = document.getElementById("formSuccessAlert");
            if (btn) btn.disabled = true;
            if (alert) alert.classList.remove("d-none");
            document.getElementById("contactForm").reset();
            setTimeout(() => {
                if (btn) btn.disabled = false;
            }, 3000);
        }
    </script>

    <?php include 'footer.php'; ?>
</body>

</html>
