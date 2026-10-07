<?php 
$page_title = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : "Treatment Service";
include 'header.php'; 
?>



<!-- Service Hero Banner -->
<section class="hero-section" style="padding: 3rem 0 3.5rem 0;">
    <div class="container">
        <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); height: 280px; background: linear-gradient(135deg, var(--primary-dark) 0%, #2A172C 100%);">
            <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: center; padding: 2.5rem; text-align: center; align-items: center;">
                <div class="section-tag" style="background: rgba(255,255,255,0.2); color: #FFF; border-color: rgba(255,255,255,0.3);">Service Information</div>
                <h1 style="color: #FFF; font-size: 2.5rem; font-weight: 800; margin-bottom: 0.5rem;"><?php echo $page_title; ?></h1>
                <p style="color: #E2D9E4; font-size: 1.1rem; max-width: 600px;">Comprehensive Dermatological Treatment at ClearSkin Clinic Hyderabad</p>
            </div>
        </div>
    </div>
</section>

<!-- Coming Soon Content Box (No Book Appointment Section) -->
<section class="skin-section" style="padding-top: 1rem; padding-bottom: 4.5rem;">
    <div class="container" style="max-width: 850px;">
        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 3rem 2.5rem; border: 1px solid var(--border-light); box-shadow: var(--shadow-md); text-align: center;">
            <div style="width: 70px; height: 70px; border-radius: 50%; background: var(--secondary-soft); color: var(--secondary-dark); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem auto;">
                <svg width="36" height="36" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
            </div>

            <h2 style="font-size: 2rem; font-weight: 800; color: var(--primary-dark); margin-bottom: 1rem;">
                <?php echo $page_title; ?> Details Coming Soon
            </h2>

            <p style="font-size: 1.05rem; color: var(--muted); line-height: 1.7; margin-bottom: 1.75rem; max-width: 680px; margin-left: auto; margin-right: auto;">
                We are updating the detailed procedure guide and clinical treatment options for <strong><?php echo $page_title; ?></strong> at ClearSkin Dermatology Clinic. Full treatment protocol information will be uploaded shortly.
            </p>

            <p style="font-size: 0.95rem; color: var(--dark); font-weight: 600; margin-bottom: 2rem;">
                To consult directly with Dr. Prasuna Reddy regarding this concern, please contact our clinic line.
            </p>

            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:9346002032" class="btn btn-primary" style="padding: 0.75rem 1.75rem;">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    Call Clinic: 9346002032
                </a>
                <a href="skin-treatments.php" class="btn btn-outline" style="padding: 0.75rem 1.75rem;">
                    View All Skin Treatments &rarr;
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
