/* ==========================================================================
   ClearSkin Dermatology & Aesthetic Clinic - Redesign JS
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {
  // Sticky Navigation Header Shadow on Scroll
  const header = document.querySelector('.main-header');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 20) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Mobile Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', function () {
      navMenu.classList.toggle('mobile-active');
    });
  }

  // Automatic Word-by-Word Text Reveal for Major Headings
  const headingsToReveal = document.querySelectorAll('.hero-title, .section-title, .page-banner-title, .doctor-name');
  headingsToReveal.forEach(heading => {
    if (heading.querySelector('.word-reveal')) return; // Avoid double wrapping

    const nodes = Array.from(heading.childNodes);
    heading.innerHTML = '';
    let wordCount = 0;

    nodes.forEach(node => {
      if (node.nodeType === Node.TEXT_NODE) {
        const parts = node.textContent.split(/(\s+)/);
        parts.forEach(part => {
          if (!part) return;
          if (/^\s+$/.test(part)) {
            heading.appendChild(document.createTextNode(part));
          } else {
            const span = document.createElement('span');
            span.className = 'word-reveal';
            span.style.transitionDelay = `${wordCount * 0.06}s`;
            span.textContent = part;
            heading.appendChild(span);
            wordCount++;
          }
        });
      } else if (node.nodeType === Node.ELEMENT_NODE) {
        const span = document.createElement('span');
        span.className = 'word-reveal';
        span.style.transitionDelay = `${wordCount * 0.06}s`;
        span.innerHTML = node.innerHTML;
        if (node.className) span.className += ' ' + node.className;
        heading.appendChild(span);
        wordCount++;
      }
    });
  });

  // Scroll Entrance Animations (Multi-Section & Element IntersectionObserver)
  const animatableSelectors = 'section, .reveal, .section-header, .animate-fade-up, .animate-fade-left, .animate-fade-right, .animate-zoom-in, .animate-scale-in, .treatment-card, .service-card, .doctor-card-frame, .doctor-info-content, .testimonial-card, .contact-card';
  const revealElements = document.querySelectorAll(animatableSelectors);
  
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        entry.target.classList.add('is-visible');
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -30px 0px'
  });

  revealElements.forEach(el => revealObserver.observe(el));

  // Mobile Dropdown Click Handling
  const navItems = document.querySelectorAll('.nav-item');
  navItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    const dropdown = item.querySelector('.dropdown-menu');
    if (dropdown && link && window.innerWidth <= 768) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        item.classList.toggle('active-mobile');
      });
    }
  });

  // Appointment Modal Functionality
  const modalOverlay = document.getElementById('appointmentModal');
  const openModalBtns = document.querySelectorAll('.open-appointment-modal');
  const closeModalBtn = document.querySelector('.modal-close-btn');

  function openModal() {
    if (modalOverlay) {
      modalOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeModal() {
    if (modalOverlay) {
      modalOverlay.classList.remove('active');
      document.body.style.overflow = 'auto';
    }
  }

  openModalBtns.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal();
    });
  });

  if (closeModalBtn) {
    closeModalBtn.addEventListener('click', closeModal);
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', function (e) {
      if (e.target === modalOverlay) {
        closeModal();
      }
    });
  }

  // Testimonials Carousel Data & Slider
  const testimonials = [
    {
      quote: "She was good and quite knowledgeable and medicine given by her cured the problem in matter of a few days.",
      author: "SURAJ PANDEY",
      tag: "Verified Patient • Skin Care",
      initials: "SP"
    },
    {
      quote: "The PRP hair loss treatment by Dr. Prasuna Reddy produced amazing visible results within 3 sessions! Highly professional clinic.",
      author: "KIRAN KUMAR",
      tag: "Verified Patient • PRP Hair Therapy",
      initials: "KK"
    },
    {
      quote: "ClearSkin clinic provides outstanding dermatological treatment. My acne scars have lightened significantly with safe laser therapy.",
      author: "ANANYA SHARMA",
      tag: "Verified Patient • Acne Scar Removal",
      initials: "AS"
    }
  ];

  let currentTestimonialIndex = 0;
  const quoteText = document.getElementById('testimonialText');
  const authorName = document.getElementById('testimonialAuthor');
  const authorTag = document.getElementById('testimonialTag');
  const avatarElem = document.getElementById('testimonialAvatar');
  const prevBtn = document.getElementById('prevTestimonial');
  const nextBtn = document.getElementById('nextTestimonial');
  const dots = document.querySelectorAll('.slider-dots .dot');

  function updateTestimonial(index) {
    if (!quoteText) return;
    quoteText.style.opacity = 0;
    setTimeout(() => {
      quoteText.textContent = `"${testimonials[index].quote}"`;
      if (authorName) authorName.textContent = testimonials[index].author;
      if (authorTag) {
        authorTag.innerHTML = `<svg width="14" height="14" fill="var(--secondary)" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg><span>${testimonials[index].tag}</span>`;
      }
      if (avatarElem) avatarElem.textContent = testimonials[index].initials;
      quoteText.style.opacity = 1;

      dots.forEach((dot, i) => {
        if (i === index) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }, 200);
  }

  if (nextBtn && prevBtn) {
    nextBtn.addEventListener('click', function () {
      currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
      updateTestimonial(currentTestimonialIndex);
    });

    prevBtn.addEventListener('click', function () {
      currentTestimonialIndex = (currentTestimonialIndex - 1 + testimonials.length) % testimonials.length;
      updateTestimonial(currentTestimonialIndex);
    });

    dots.forEach((dot, i) => {
      dot.addEventListener('click', function () {
        currentTestimonialIndex = i;
        updateTestimonial(i);
      });
    });

    // Auto rotate every 6 seconds
    setInterval(() => {
      currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
      updateTestimonial(currentTestimonialIndex);
    }, 6000);
  }

  // Form Handling Simulation (Callback Form & Modal Form)
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', function (e) {
      // Allow PHP backend submission if configured, else simulate smooth AJAX response
      if (form.getAttribute('action') && form.getAttribute('action').includes('.php')) {
        // Let normal PHP process if direct action exists
        return;
      }

      e.preventDefault();
      const successAlert = form.querySelector('.form-success-alert') || document.getElementById('modalSuccessAlert');
      const submitBtn = form.querySelector('button[type="submit"]');

      if (submitBtn) {
        const origText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';

        setTimeout(() => {
          if (successAlert) {
            successAlert.style.display = 'block';
            successAlert.textContent = 'Thank you! Your request has been received. Our team will contact you shortly.';
          }
          submitBtn.disabled = false;
          submitBtn.textContent = origText;
          form.reset();

          if (form.id === 'modalForm') {
            setTimeout(() => {
              closeModal();
              if (successAlert) successAlert.style.display = 'none';
            }, 3000);
          }
        }, 1200);
      }
    });
  });
});
