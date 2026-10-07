<?php include 'header.php'; ?>



<!-- Reference Banner Style matching user image -->
<!-- Reference Banner Style matching user image -->
<section style="padding: 2.5rem 0; background: var(--light-gray);">
    <div class="container">
        <div class="treatment-hero-banner-clean">
            <img src="assets/images/prp_treatment.jpg" alt="PRP Hair Loss Therapy" class="hero-bg-img">
            <div class="hero-gradient-overlay">
                <div class="hero-category-badge">Advanced Aesthetic Dermatology</div>
                <h1 class="hero-clean-title">PRP Hair Loss Therapy</h1>
                <p class="hero-clean-subtitle">Autologous Platelet-Rich Plasma for Natural Hair Growth & Density</p>
            </div>
        </div>
    </div>
</section>

<!-- Content Grid -->
<section class="skin-section" style="padding-top: 1rem;">
    <div class="container">
        <div class="treatment-detail-grid">
            <div class="treatment-main-content">
                <div class="section-tag secondary">Trichology Excellence</div>
                <h2>Best Hair Loss Treatment in Hyderabad | ClearSkin Clinic</h2>
                <h3>Activate Dormant Hair Follicles with Concentrated Platelet Rich Plasma</h3>

                <p class="treatment-paragraph">
                    Pattern hair loss (androgenetic alopecia) and telogen effluvium hair thinning affect millions of men and women. PRP (Platelet-Rich Plasma) therapy is a proven non-surgical treatment that harnesses your body's autologous growth factors to reactivate miniaturized hair follicles.
                </p>

                <p class="treatment-paragraph">
                    At ClearSkin Clinic, Dr. Prasuna Reddy performs high-density PRP combined with Dermapen microneedling and GFC (Growth Factor Concentrate) therapy to increase hair shaft thickness, reduce hair fall, and stimulate dense new hair growth.
                </p>
            </div>

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
                                <option value="PRP Hair Loss Therapy" selected>PRP Hair Loss Therapy</option>
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
