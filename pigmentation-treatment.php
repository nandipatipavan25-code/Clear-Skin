<?php include 'header.php'; ?>

<!-- Services Navigation Bar -->

</div>

<!-- Reference Banner Style matching user image -->
<!-- Reference Banner Style matching user image -->
<section style="padding: 2.5rem 0; background: var(--light-gray);">
    <div class="container">
        <div class="treatment-hero-banner-clean">
            <img src="assets/images/pigmentation_hero.jpg" alt="Pigmentation Treatment" class="hero-bg-img">
            <div class="hero-gradient-overlay">
                <div class="hero-category-badge">Laser Aesthetics</div>
                <h1 class="hero-clean-title">Pigmentation Treatment</h1>
                <p class="hero-clean-subtitle">Target stubborn dark spots, melasma, and uneven skin tone with precision laser care.</p>
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
                <div class="section-tag secondary">Laser & Peels</div>
                <h2>Best Laser Pigmentation Treatment</h2>
                <h3>Reveal Your Skin's Natural Glow</h3>

                <p class="treatment-paragraph">
                    Flawless, even-toned skin enhances beauty and confidence, but pigmentation issues like dark spots, freckles, and patches can disrupt your complexion. These concerns often arise from hormonal changes, sun damage, or acne scars, leaving the skin uneven and dull.
                </p>

                <p class="treatment-paragraph">
                    At Clear Skin Clinic, we specialize in advanced laser pigmentation treatments designed to restore your skin's natural radiance. Using cutting-edge laser technology and customized skincare solutions, our experienced dermatologists target pigmentation at its source, ensuring visible results. Each treatment is tailored to your unique needs, revitalizing your skin's texture and tone.
                </p>

                <p class="treatment-paragraph">
                    Say goodbye to stubborn pigmentation and hello to smooth, glowing skin. Experience expert care and proven results with our innovative approach to pigmentation treatment. Your journey to a radiant complexion begins here!
                </p>

                <div class="doctor-highlights-grid" style="margin-top: 2rem;">
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
                        <h4>Q-Switched Laser Toning</h4>
                    </div>
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <h4>Melasma & Spot Removal</h4>
                    </div>
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                        <h4>Custom Derma Peels</h4>
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
                                <option value="Laser Pigmentation Treatment" selected>Laser Pigmentation Treatment</option>
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
