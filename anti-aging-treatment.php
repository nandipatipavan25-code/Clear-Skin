<?php include 'header.php'; ?>

<!-- Services Navigation Bar -->

</div>

<!-- Reference Banner Style matching user image -->
<!-- Reference Banner Style matching user image -->
<section style="padding: 2.5rem 0; background: var(--light-gray);">
    <div class="container">
        <div class="treatment-hero-banner-clean">
            <img src="assets/images/hero.jpg" alt="Anti-Ageing Treatment" class="hero-bg-img">
            <div class="hero-gradient-overlay">
                <div class="hero-category-badge">Youth Rejuvenation</div>
                <h1 class="hero-clean-title">Anti-Ageing Treatment</h1>
                <p class="hero-clean-subtitle">Safe, effective and non-surgical treatment to reduce signs of ageing</p>
            </div>
        </div>
    </div>
</section>

<!-- Content & Consultation Grid -->
<section class="skin-section" style="padding-top: 1rem;">
    <div class="container">
        <div class="treatment-detail-grid">
            <!-- Left Main Content -->
            <div class="treatment-main-content">
                <div class="section-tag secondary">Youth Restoration</div>
                <h2>Best Anti-Ageing Treatment in Hyderabad</h2>
                <h3>Safe, effective and non-surgical treatment to reduce signs of ageing</h3>

                <p class="treatment-paragraph">
                    Everyone dreams of looking youthful for as long as possible, but the law of nature brings on tell-tale signs of ageing. Ageing is caused by intrinsic and extrinsic factors. Intrinsic factors include genetics and some internal conditions. Extrinsic factors include sun exposure, stress, pollution, smoking and other environmental factors.
                </p>

                <p class="treatment-paragraph">
                    Advanced treatments are available to fight tell-tale signs and effects of ageing. Latest dermatological techniques, substances and materials are available to treat wrinkles and fight ageing safely without any side effects.
                </p>

                <div class="doctor-highlights-grid" style="margin-top: 2rem;">
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2z"/></svg>
                        <h4>Wrinkle Reduction</h4>
                    </div>
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <h4>Collagen Remodeling</h4>
                    </div>
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                        <h4>Non-Surgical Safety</h4>
                    </div>
                </div>
            </div>

            <!-- Right Sticky Booking Card -->
            <!-- Right Sticky Booking / Request Callback Sidebar Form Card -->
            <div class="sidebar-booking-card sticky-sidebar reveal reveal-delay-1">
                <div class="sidebar-card-header">
                    <div class="sidebar-card-icon">
                        <svg width="22" height="22" fill="var(--primary)" viewBox="0 0 24 24"><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"/></svg>
                    </div>
                    <div>
                        <h3 class="sidebar-card-title">Book Appointment</h3>
                        <p class="sidebar-card-subtitle">Request a callback or consultation</p>
                    </div>
                </div>

                <form action="process-appointment.php" method="POST" class="sidebar-form">
                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number *</label>
                        <input type="tel" name="mobile" class="form-control" placeholder="Enter 10-digit mobile" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Treatment Concern *</label>
                        <div class="select-wrapper">
                            <select name="concern" class="form-control" required>
                                <option value="Anti-Aging Care" selected>Anti-Aging Care</option>
                                <option value="Skin Lightening Treatment">Skin Lightening Treatment</option>
                                <option value="Pigmentation Treatment">Pigmentation Treatment</option>
                                <option value="Dull Skin Treatment">Dull Skin Treatment</option>
                                <option value="Dermal Fillers Treatment">Dermal Fillers Treatment</option>
                                <option value="Anti-Aging Treatment">Anti-Aging Treatment</option>
                                <option value="Acne Scar Removal">Acne Scar Removal</option>
                                <option value="PRP Hair Treatment">PRP Hair Loss Treatment</option>
                                <option value="Laser Hair Removal">Laser Hair Removal</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 0.5rem;">Request Appointment</button>
                </form>

                <div class="sidebar-doctor-badge">
                    <div class="doctor-badge-avatar">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <div>
                        <div class="doctor-badge-name">Dr. Prasuna Reddy</div>
                        <div class="doctor-badge-spec">Consultant Dermatologist</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
