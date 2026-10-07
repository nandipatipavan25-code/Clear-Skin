<?php
/**
 * ClearSkin Dermatology & Aesthetic Clinic - Redesigned Homepage
 * Primary Colors: #9B699C (Amethyst) & #4A8C60 (Emerald)
 */
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <!-- Hero Text Content -->
            <div class="hero-content animate-fade-up">
                
                <h1 class="hero-title">
                    Radiant Skin Is <span>A Treatment Away</span>
                </h1>
                
                <h2 class="hero-subtitle">Feel Better. Feel Confident</h2>
                
                <p class="hero-description">
                    Welcome to ClearSkin Clinic, Hyderabad's trusted destination for medical excellence in clinical dermatology, aesthetic skin care, and advanced trichology procedures led by Dr. Prasuna Reddy.
                </p>

                <div class="hero-cta-group">
                    <a href="tel:9346002032" class="btn btn-primary">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        Call Today For Appointment - 9346002032
                    </a>
                </div>

                <!-- Integrated Quick Callback Form Overlay Bar -->
                <div class="hero-callback-card">
                    <div class="callback-card-header">
                        <svg width="20" height="20" fill="var(--primary)" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <h3>Want A Callback? Please fill this form</h3>
                    </div>

                    <div class="form-success-alert" style="display: <?php echo (isset($_GET['status']) && $_GET['status'] === 'success') ? 'block' : 'none'; ?>;">
                        <?php echo isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : 'Thank you! We will call you back shortly.'; ?>
                    </div>

                    <form action="process-appointment.php" method="POST">
                        <div class="callback-form-grid">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <input type="tel" name="mobile" class="form-control" placeholder="Mobile" required>
                            <div class="select-wrapper">
                                <select name="concern" class="form-control" required>
                                    <option value="">Select Concern</option>
                                    <option value="Hair Loss (PRP)">Hair Loss Treatment (PRP)</option>
                                    <option value="Laser Hair Removal">Laser Hair Removal</option>
                                    <option value="Skin Rejuvenation">Skin Rejuvenation</option>
                                    <option value="Acne / Scar Removal">Acne & Scar Removal</option>
                                    <option value="Anti-Aging">Anti-Aging & Fillers</option>
                                    <option value="Other Concern">Other Clinical Concern</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-amethyst">Request Appointment</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Hero Image & Floating Metric Card -->
            <div class="hero-media-wrapper animate-fade-left">
                <div class="hero-image-card">
                    <img src="assets/images/clearskin_reception_glow.png" alt="ClearSkin Dermatology Clinic Reception Glow">
                </div>
                
                <div class="hero-badge-floating animate-scale-in">
                    <div class="floating-icon">
                        <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </div>
                    <div>
                        <div class="floating-text-num">10,000+</div>
                        <div class="floating-text-label">Happy Patients in Hyderabad</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Doctor Section ("Best Dermatologist In Hyderabad") -->
<section class="doctor-section reveal" id="doctor">
    <div class="container">
        <div class="doctor-grid">
            <!-- Doctor Card Frame -->
            <div class="doctor-card-frame">
                <div class="doctor-img-wrapper">
                    <img src="assets/images/dr_prasuna_reddy.png" alt="Dr. Prasuna Reddy Best Dermatologist In Hyderabad">
                </div>
                <div class="doctor-badge-bottom">
                    <h3 class="doctor-name">Dr. Prasuna Reddy</h3>
                    <p class="doctor-title">M.D. (DVL) • Consultant Dermatologist & Cosmetic Surgeon</p>
                </div>
            </div>

            <!-- Doctor Content & Credentials -->
            <div class="doctor-info-content">
                <div class="section-tag secondary">Expert Medical Profile</div>
                <h2>Best Dermatologist In Hyderabad</h2>
                
                <p class="doctor-bio-paragraph">
                    Clear Skin Clinic is providing quality hair and skin care services with a team of qualified trichologist and dermatologists. Our expert dermatologists and trichologist patiently hear skin-related and hair-related problems of the clients, analyze them and find the root causes, formulate the treatment solutions and deliver best possible results to their satisfaction.
                </p>

                <p class="doctor-bio-paragraph">
                    Clear Skin Clinic is equipped with state of the art equipment and facilities to deliver advanced solutions for hair-related and skin-related problems. We are dedicated to medical excellence in aesthetic and clinical dermatology.
                </p>

                <p class="doctor-bio-paragraph">
                    Clear Skin Clinic is run by Dr. Prasuna Reddy and has very good expertise in clinical dermatology involving all skin, hair and nail Problems. The doctor has received training in various cosmetic procedure and is recipient of International Global Education Award and recipient of American Academy of Dermatology Fellowship. She has also completed pediatric dermatology observership at CMC Vellore.
                </p>

                <div class="doctor-highlights-grid">
                    <div class="highlight-box animate-fade-up stagger-1">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <h4>Global Education Award Winner</h4>
                    </div>
                    <div class="highlight-box animate-fade-up stagger-2">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        <h4>American Academy Fellow</h4>
                    </div>
                    <div class="highlight-box animate-fade-up stagger-3">
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                        <h4>CMC Vellore Observer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hair Treatments Section -->
<section class="hair-section" id="hair-treatments">
    <div class="container">
        <div class="section-header animate-fade-up">
            <div class="section-tag">Advanced Trichology</div>
            <h2 class="section-title">OUR <span>HAIR TREATMENTS</span></h2>
            <p class="section-subtitle">State-of-the-art procedures designed for hair restoration and painless laser hair removal.</p>
        </div>

        <div class="hair-grid">
            <!-- Hair Loss Card (PRP) -->
            <div class="treatment-card-modern animate-fade-up stagger-1">
                <div class="treatment-img-container">
                    <img src="assets/images/prp_treatment.jpg" alt="Hair Loss Treatment PRP">
                    <span class="treatment-category-badge">Restoration</span>
                </div>
                <div class="treatment-card-body">
                    <h3 class="treatment-card-title">Hair Loss Treatment (PRP)</h3>
                    <p class="treatment-card-desc">Latest treatment to fight baldness with safe hair re-growth.</p>
                    
                    <div class="treatment-bullets">
                        <div class="treatment-bullet-item">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            <span>Autologous Platelet-Rich Plasma Therapy</span>
                        </div>
                        <div class="treatment-bullet-item">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            <span>Stimulates dormant hair follicles naturally</span>
                        </div>
                        <div class="treatment-bullet-item">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            <span>Safe procedure with zero downtime</span>
                        </div>
                    </div>

                    <a href="#appointment" class="btn btn-outline open-appointment-modal" style="width: 100%;">Book PRP Consultation &rarr;</a>
                </div>
            </div>

            <!-- Laser Hair Removal Card -->
            <div class="treatment-card-modern animate-fade-up stagger-2">
                <div class="treatment-img-container">
                    <img src="assets/images/laser_removal.jpg" alt="Laser Hair Removal">
                    <span class="treatment-category-badge">Laser Aesthetics</span>
                </div>
                <div class="treatment-card-body">
                    <h3 class="treatment-card-title">Laser Hair Removal</h3>
                    <p class="treatment-card-desc">Safe & effective method to get smooth and clear skin.</p>
                    
                    <div class="treatment-bullets">
                        <div class="treatment-bullet-item">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            <span>US FDA approved cooling laser technology</span>
                        </div>
                        <div class="treatment-bullet-item">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            <span>Virtually painless & suitable for all skin types</span>
                        </div>
                        <div class="treatment-bullet-item">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            <span>Long-lasting smooth hair-free results</span>
                        </div>
                    </div>

                    <a href="#appointment" class="btn btn-outline open-appointment-modal" style="width: 100%;">Book Laser Removal &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skin Treatments Section -->
<section class="skin-section" id="skin-treatments">
    <div class="container">
        <div class="section-header animate-fade-up">
            <div class="section-tag secondary">Aesthetic Excellence</div>
            <h2 class="section-title">OUR <span>SKIN TREATMENTS</span></h2>
            <p class="section-subtitle">Comprehensive medical and aesthetic skin solutions tailored to your unique skin type.</p>
        </div>

                                                                <div class="skin-grid">
            <!-- Category 1: Skin Rejuvenation -->
            <div class="skin-category-card animate-fade-up stagger-1">
                <div class="skin-card-icon">
                    <img src="assets/images/illustrations/skin-lightening.svg" alt="Skin Rejuvenation SVG Icon" class="category-illustration-head">
                </div>
                <h3 class="skin-category-title">Skin Rejuvenation</h3>
                <div class="skin-treatment-list">
                    <a href="skin-lightening-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/skin-lightening.svg" alt="Skin Lightening SVG Icon" class="treatment-illustration-img">
                        <span>Skin Lightening Treatment &rarr;</span>
                    </a>
                    <a href="pigmentation-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/pigmentation.svg" alt="Pigmentation SVG Icon" class="treatment-illustration-img">
                        <span>Pigmentation Treatment &rarr;</span>
                    </a>
                    <a href="dull-skin-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/dull-skin.svg" alt="Dull Skin SVG Icon" class="treatment-illustration-img">
                        <span>Dull Skin Treatment &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Category 2: Anti-Aging -->
            <div class="skin-category-card animate-fade-up stagger-2">
                <div class="skin-card-icon">
                    <img src="assets/images/illustrations/anti-aging.svg" alt="Anti-Aging SVG Icon" class="category-illustration-head">
                </div>
                <h3 class="skin-category-title">Anti-Aging & Fillers</h3>
                <div class="skin-treatment-list">
                    <a href="dermal-fillers-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/dermal-fillers.svg" alt="Dermal Fillers SVG Icon" class="treatment-illustration-img">
                        <span>Dermal Fillers Treatment &rarr;</span>
                    </a>
                    <a href="anti-aging-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/anti-aging.svg" alt="Anti-Aging SVG Icon" class="treatment-illustration-img">
                        <span>Anti-Aging Treatment &rarr;</span>
                    </a>
                    <a href="skin-tightening-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/skin-tightening.svg" alt="Skin Tightening SVG Icon" class="treatment-illustration-img">
                        <span>Skin Tightening Treatment &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Category 3: Acne & Scar Care -->
            <div class="skin-category-card animate-fade-up stagger-3">
                <div class="skin-card-icon">
                    <img src="assets/images/illustrations/acne-scar.svg" alt="Acne & Scar Care SVG Icon" class="category-illustration-head">
                </div>
                <h3 class="skin-category-title">Acne & Scar Care</h3>
                <div class="skin-treatment-list">
                    <a href="acne-scar-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/acne-scar.svg" alt="Acne Scar Removal SVG Icon" class="treatment-illustration-img">
                        <span>Pimple & Acne Scar Removal &rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Category 4: Specialized Treatments -->
            <div class="skin-category-card animate-fade-up stagger-4">
                <div class="skin-card-icon">
                    <img src="assets/images/illustrations/mole-removal.svg" alt="Specialized Treatments SVG Icon" class="category-illustration-head">
                </div>
                <h3 class="skin-category-title">Specialized Treatments</h3>
                <div class="skin-treatment-list">
                    <a href="mole-removal-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/mole-removal.svg" alt="Mole Removal SVG Icon" class="treatment-illustration-img">
                        <span>Mole Removal &rarr;</span>
                    </a>
                    <a href="excessive-underarm-sweating-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/underarm-sweating.svg" alt="Underarm Sweating SVG Icon" class="treatment-illustration-img">
                        <span>Underarm Sweating &rarr;</span>
                    </a>
                    <a href="stretch-marks-removal-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/stretch-marks.svg" alt="Stretch Marks SVG Icon" class="treatment-illustration-img">
                        <span>Stretch Marks Removal &rarr;</span>
                    </a>
                    <a href="laser-wart-removal-treatment.php" class="skin-treatment-item">
                        <img src="assets/images/illustrations/wart-removal.svg" alt="Wart Removal SVG Icon" class="treatment-illustration-img">
                        <span>Wart Removal &rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header animate-fade-up">
            <div class="section-tag">Patient Feedback</div>
            <h2 class="section-title">Patient <span>Testimonials</span></h2>
            <p class="section-subtitle">Real experiences and verified feedback from our clients across Hyderabad.</p>
        </div>

        <div class="testimonial-slider-container animate-zoom-in">
            <div class="testimonial-card-single">
                <div class="quote-watermark">
                    <svg viewBox="0 0 24 24"><path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/></svg>
                </div>
                
                <div class="testimonial-top-row">
                    <div class="google-trust-badge">
                        <svg width="18" height="18" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/></svg>
                        <span>4.9 / 5.0 Google Review</span>
                    </div>

                    <div class="testimonial-stars">
                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>

                <blockquote class="testimonial-text" id="testimonialText">
                    "She was good and quite knowledgeable and medicine given by her cured the problem in matter of a few days."
                </blockquote>

                <div class="testimonial-author-meta">
                    <div class="testimonial-avatar" id="testimonialAvatar">SP</div>
                    <div class="author-info">
                        <h4 class="testimonial-author-name" id="testimonialAuthor">SURAJ PANDEY</h4>
                        <div class="testimonial-author-tag" id="testimonialTag">
                            <svg width="14" height="14" fill="var(--secondary)" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Verified Patient • Skin Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-controls">
                <button class="slider-btn" id="prevTestimonial" aria-label="Previous Testimonial">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
                </button>
                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button class="slider-btn" id="nextTestimonial" aria-label="Next Testimonial">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Practice Locations Section -->
<section class="locations-section" id="locations">
    <div class="container">
        <div class="section-header animate-fade-up">
            <div class="section-tag secondary">Visit Our Clinics</div>
            <h2 class="section-title">Our Practice <span>Locations</span></h2>
            <p class="section-subtitle">Conveniently located in Madhapur and Gachibowli, Hyderabad.</p>
        </div>

        <div class="locations-grid">
            <!-- Location 1: Madhapur -->
            <div class="location-card animate-slide-up stagger-1">
                <div class="location-card-header">
                    <h3>ClearSkin Clinic - Madhapur</h3>
                    <div class="location-address">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span>Flat N:104, Tridens Space, Hitech City Rd, HUDA Techno Enclave, Madhapur, Hyderabad, Telangana 500081, India</span>
                    </div>
                    <div class="location-details-row">
                        <div class="location-phone">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                            9346002032
                        </div>
                        <a href="https://maps.google.com/?q=Clear+Skin+clinic+Madhapur+Hyderabad" target="_blank" class="btn btn-sm btn-outline">Get Directions &rarr;</a>
                    </div>
                </div>
                <div class="map-embed-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.276483561937!2d78.384666314877!3d17.44645228804364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9158f20170a1%3A0x8673a3c6d1d4715f!2sMadhapur%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1628100000000!5m2!1sen!2sin" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Location 2: Gachibowli -->
            <div class="location-card animate-slide-up stagger-2">
                <div class="location-card-header">
                    <h3>ClearSkin Clinic - Gachibowli</h3>
                    <div class="location-address">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span>Alaha Ananda Nilayam, Flat N:102, Kamakshi Naya Rajeshwara Nagar, Gachibowli, Hyderabad, Telangana 500032, India</span>
                    </div>
                    <div class="location-details-row">
                        <div class="location-phone">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                            9346002032
                        </div>
                        <a href="https://maps.google.com/?q=Gachibowli+Hyderabad" target="_blank" class="btn btn-sm btn-outline">Get Directions &rarr;</a>
                    </div>
                </div>
                <div class="map-embed-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.634125862045!2d78.34900011487677!3d17.429302288052166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93a276e03df1%3A0xd56d35d03e9c5f89!2sGachibowli%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1628100000000!5m2!1sen!2sin" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
