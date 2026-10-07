<?php include 'header.php'; ?>



<!-- Reference Banner Style matching user image -->
<!-- Reference Banner Style matching user image -->
<section style="padding: 2.5rem 0; background: var(--light-gray);">
    <div class="container">
        <div class="treatment-hero-banner-clean">
            <img src="assets/images/clinical_skin_care.jpg" alt="Mole Removal Treatment" class="hero-bg-img">
            <div class="hero-gradient-overlay">
                <div class="hero-category-badge">Aesthetic Laser Care</div>
                <h1 class="hero-clean-title">Mole Removal Treatment</h1>
                <p class="hero-clean-subtitle">Painless radiofrequency and laser precision mole removal procedures.</p>
            </div>
        </div>
    </div>
</section>

<!-- Content & Sidebar Consultation Grid -->
<section class="skin-section" style="padding-top: 1rem;">
    <div class="container">
        <div class="treatment-detail-grid">
            <!-- Left Main Content -->
            <div class="treatment-main-content reveal">
                <div class="section-tag secondary">Dermatologist Approved</div>
                <h2>Best laser Treatment for Mole removal in Hyderabad</h2>
                <h3>Safe and Effective Solution for Permanent Mole Removal</h3>

                <p class="treatment-paragraph">Moles, though harmless, can sometimes affect your appearance and confidence. These skin blemishes, which may be flat or raised, form when melanocytes cluster together in one spot. While some moles add character, others might be unwanted or inconvenient.</p>
                <p class="treatment-paragraph">At Clear Skin Clinic, we offer advanced mole removal treatments using cutting-edge laser technology. Our clinically proven methods include laser therapy, radiofrequency treatment, and electrocautery to ensure safe and effective results. Whether the mole is small, large, or uniquely shaped, our expert dermatologists customize the treatment to suit your needs.</p>
                <p class="treatment-paragraph">With minimal discomfort and downtime, our treatments deliver permanent results, leaving your skin smooth and flawless. Say goodbye to unwanted moles and hello to confidence—book your consultation at Clear Skin Clinic today!</p>

                <div class="doctor-highlights-grid" style="margin-top: 2rem;">
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
                        <h4>RF Radiofrequency Ablation</h4>
                    </div>
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        <h4>Scarless Technique</h4>
                    </div>
                    <div class="highlight-box">
                        <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2z"/></svg>
                        <h4>Permanent Results</h4>
                    </div>
                </div>
            </div>

            <!-- Right Sticky Booking Sidebar Form Card -->
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
                                <option value="Mole Removal Treatment" selected>Mole Removal Treatment</option>
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
</section>

<?php include 'footer.php'; ?>
