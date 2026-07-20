/* shared.js — inject nav + footer + scroll effects on every page */
(function () {

    /* ── NAV HTML ── */
    const navHTML = `
<div class="scroll-bar" id="scrollBar"></div>

<nav id="navbar">

  <a href="/" class="logo">NK<span>.</span></a>

  <ul class="nav-links" id="navLinks">
    <li><a href="/" data-page="index">Home</a></li>

    <li><a href="/about" data-page="about">About</a></li>

    <li><a href="/expertise" data-page="expertise">Expertise</a></li>

    <li><a href="/my-work" data-page="work">My Work</a></li>

    <li><a href="/blogs" data-page="blog">Blogs</a></li>

    <li><a href="/contact" data-page="contact">Contact</a></li>
  </ul>

  <a href="/contact" class="nav-cta">Hire Me</a>

  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span>
    <span></span>
    <span></span>
  </button>

</nav>
`;

    /* ── FOOTER HTML ── */
    const footerHTML = `
<footer>
  <div class="footer-inner">
    <div class="footer-top">

      <div class="footer-brand">
        <a href="index.html" class="logo">NK<span>.</span></a>
        <p class="footer-tagline">
          Building scalable web apps with clean code and modern architecture.
        </p>

        <div class="footer-socials">

          <!-- GitHub -->
          <a href="https://github.com/naraishkumar"
             class="footer-social"
             title="GitHub"
             target="_blank"
             rel="noopener noreferrer">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/>
            </svg>
          </a>

          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/naraish-kumar01"
             class="footer-social"
             title="LinkedIn"
             target="_blank"
             rel="noopener noreferrer">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
            </svg>
          </a>



          <!-- Email -->
          <a href="mailto:naraishkumar55@gmail.com"
             class="footer-social"
             title="Email"
             target="_blank"
             rel="noopener noreferrer">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
          </a>

          <!-- Facebook -->
          <a href="https://www.facebook.com/naraishkumar.official"
             class="footer-social"
             title="Facebook"
             target="_blank"
             rel="noopener noreferrer">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.13 8.44 9.88v-6.99H7.9v-2.89h2.54V9.8c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.77l-.44 2.89h-2.33v6.99C18.34 21.13 22 16.99 22 12z"/>
            </svg>
          </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/naraishkumar.official"
            class="footer-social"
            target="_blank"
            rel="noopener noreferrer"
            title="Instagram">

            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm8.5 1.5h-8.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5zM12 7a5 5 0 100 10 5 5 0 000-10zm6.25-.9a1.15 1.15 0 11-2.3 0 1.15 1.15 0 012.3 0z"/>
            </svg>
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/923060267456"
            class="footer-social"
            target="_blank"
            rel="noopener noreferrer"
            title="WhatsApp">

            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.52 3.48A11.91 11.91 0 0 0 12.06 0C5.53 0 .24 5.29.24 11.82c0 2.09.55 4.14 1.6 5.96L0 24l6.37-1.67a11.81 11.81 0 0 0 5.69 1.45h.01c6.53 0 11.82-5.29 11.82-11.82a11.75 11.75 0 0 0-3.37-8.48zM12.07 21.5h-.01a9.77 9.77 0 0 1-4.97-1.36l-.36-.21-3.78.99 1.01-3.68-.23-.38a9.75 9.75 0 0 1-1.5-5.2C2.23 6.04 6.61 1.67 12.07 1.67c2.6 0 5.05 1.01 6.89 2.86a9.68 9.68 0 0 1 2.84 6.89c0 5.46-4.38 9.88-9.73 9.88z"/>
            </svg>
        </a>

        </div>
      </div>

      <div class="footer-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/expertise">Expertise</a></li>
          <li><a href="/my-work">My Work</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>More</h4>
        <ul>
          <li><a href="/blogs">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
          <li>
            <a href="/assets/NaraishKumar-Resume.pdf" download>
                Download CV
            </a>
          </li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="mailto:naraishkumar55@gmail.com">naraishkumar55@gmail.com</a></li>
          <li><a href="tel:+923060267456">+92 306 0267456</a></li>
          <li><a href="https://maps.app.goo.gl/qCnRERAez8QdV8DD8">Rahim Yar Khan, Pakistan</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p class="footer-copy">© 2026 <span>Naraish Kumar</span>. All rights reserved.</p>
      <p class="footer-copy">Designed & engineered for performance and simplicity. ♥</p>
    </div>

  </div>
</footer>`;

    /* ── INJECT ── */
    document.body.insertAdjacentHTML('afterbegin', navHTML);
    document.body.insertAdjacentHTML('beforeend', footerHTML);

    /* ── ACTIVE NAV LINK ── */
    const page = document.body.dataset.page || 'index';
    document.querySelectorAll('.nav-links a').forEach(a => {
        if (a.dataset.page === page) a.classList.add('active');
    });

    /* ── HAMBURGER ── */
    const ham = document.getElementById('hamburger');
    const navL = document.getElementById('navLinks');
    if (ham) ham.addEventListener('click', () => navL.classList.toggle('open'));

    /* ── SCROLL EFFECTS ── */
    const bar = document.getElementById('scrollBar');
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        const pct = window.scrollY / (document.body.scrollHeight - window.innerHeight);
        if (bar) bar.style.transform = `scaleX(${pct})`;
        if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 40);
    });

    /* ── REVEAL ANIMATION ── */
    const io = new IntersectionObserver(entries => {
        entries.forEach((e, i) => {
            if (e.isIntersecting) {
                setTimeout(() => e.target.classList.add('in'), i * 90);
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.anim').forEach(el => io.observe(el));

    /* ════════════════════════════════════════════
       PAGE SPECIFIC SCRIPTS
       ════════════════════════════════════════════ */

    /* ── CONTACT PAGE SCRIPTS ── */
    if (page === 'contact') {
        function validate(id, errId, checkFn) {
            const el = document.getElementById(id);
            const err = document.getElementById(errId);
            if (!el) return true;
            const valid = checkFn(el.value.trim());
            el.classList.toggle('error', !valid);
            if (err) err.classList.toggle('show', !valid);
            return valid;
        }

        window.handleSubmit = function () {
            const ok1 = validate('fname', 'fnameErr', v => v.length > 0);
            const ok2 = validate('email', 'emailErr', v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
            const ok3 = validate('subject', 'subjectErr', v => v.length > 0);
            const ok4 = validate('message', 'messageErr', v => v.length > 10);

            if (!ok1 || !ok2 || !ok3 || !ok4) return;

            const btn = document.getElementById('submitBtn');
            if (btn) {
                btn.classList.add('loading');
                setTimeout(() => {
                    btn.classList.remove('loading');
                    const form = document.getElementById('contactForm');
                    const success = document.getElementById('formSuccess');
                    if (form) form.style.display = 'none';
                    if (success) success.classList.add('show');
                }, 1800);
            }
        };

        window.resetForm = function () {
            const form = document.getElementById('contactForm');
            const success = document.getElementById('formSuccess');
            if (form) form.style.display = 'block';
            if (success) success.classList.remove('show');
            ['fname', 'lname', 'email', 'subject', 'message'].forEach(id => {
                const el = document.getElementById(id);
                if (el) { el.value = ''; el.classList.remove('error'); }
            });
        };

        window.toggleFaq = function (btn) {
            const item = btn.closest('.faq-item');
            if (!item) return;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        };

        ['fname', 'email', 'subject', 'message'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.addEventListener('input', () => {
                el.classList.remove('error');
                const err = document.getElementById(id + 'Err');
                if (err) err.classList.remove('show');
            });
        });
    }

    /* ── BLOG PAGE SCRIPTS ── */
    if (page === 'blogs') {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.blog-card');

        function applyFilters() {
            const activeBtn = document.querySelector('.filter-btn.active');
            const activeFilter = activeBtn ? activeBtn.dataset.filter : 'all';
            const searchInput = document.getElementById('searchInput');
            const search = searchInput ? searchInput.value.toLowerCase() : '';
            let visible = 0;

            cards.forEach(card => {
                const tags = card.dataset.tags || '';
                const title = card.dataset.title || '';
                const matchFilter = activeFilter === 'all' || tags.includes(activeFilter);
                const matchSearch = search === '' || title.includes(search) || tags.includes(search);
                const show = matchFilter && matchSearch;
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });

            const noResults = document.getElementById('noResults');
            if (noResults) noResults.classList.toggle('show', visible === 0);
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                applyFilters();
            });
        });

        const searchInput = document.getElementById('searchInput');
        if (searchInput) searchInput.addEventListener('input', applyFilters);

        document.querySelectorAll('.topic-tag').forEach(tag => {
            tag.addEventListener('click', () => {
                const keyword = tag.textContent.trim().toLowerCase().split(' ')[0];
                if (searchInput) searchInput.value = keyword;
                applyFilters();
                const blogGrid = document.getElementById('blogGrid');
                if (blogGrid) blogGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        window.subscribeNewsletter = function () {
            const email = document.getElementById('nlEmail');
            if (!email) return;
            const val = email.value.trim();
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                email.style.borderColor = '#ef4444';
                return;
            }
            email.style.borderColor = '';
            const success = document.getElementById('nlSuccess');
            if (success) success.classList.add('show');
            email.value = '';
        };
    }

    /* ── MY WORK PAGE SCRIPTS ── */
    if (page === 'work') {
        const btns = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.project-card');

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                btns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.dataset.filter;
                cards.forEach(card => {
                    if (filter === 'all') {
                        card.classList.remove('hidden');
                    } else {
                        const tags = card.dataset.tags || '';
                        card.classList.toggle('hidden', !tags.includes(filter));
                    }
                });
            });
        });
    }

})();


/* ══════════════════════════════════════════
   TESTIMONIAL SLIDER
   Add this inside the shared.js IIFE,
   after the existing "REVEAL ANIMATION" block
   (or at the bottom, before the closing })() )
   ══════════════════════════════════════════ */

(function initTestimonialSlider() {
    const track  = document.getElementById('ts-track');
    const bar    = document.getElementById('ts-bar');
    const dotsEl = document.getElementById('ts-dots');
    const prevBtn = document.getElementById('ts-prev');
    const nextBtn = document.getElementById('ts-next');

    if (!track) return; // only runs on pages that have the slider

    const TOTAL    = track.children.length;
    const INTERVAL = 5000;
    let current = 0;
    let autoTimer, barTimer, barWidth = 0;

    /* how many cards fit at the current breakpoint */
    function getVisible() {
        if (window.innerWidth <= 600)  return 1;
        if (window.innerWidth <= 900)  return 2;
        return 3;
    }

    /* ── build dot indicators ── */
    function buildDots() {
        dotsEl.innerHTML = '';
        const max = TOTAL - getVisible();
        for (let i = 0; i <= max; i++) {
            const pip = document.createElement('button');
            pip.className = 'ts-pip' + (i === current ? ' active' : '');
            pip.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            pip.addEventListener('click', () => goTo(i, true));
            dotsEl.appendChild(pip);
        }
    }

    function updateDots() {
        dotsEl.querySelectorAll('.ts-pip').forEach((p, i) =>
            p.classList.toggle('active', i === current)
        );
    }

    /* ── slide to index ── */
    function goTo(idx, resetAuto) {
        const max   = TOTAL - getVisible();
        current     = Math.max(0, Math.min(idx, max));
        const cardW = track.children[0].offsetWidth;
        const gap   = 24; // must match CSS gap value
        track.style.transform = `translateX(-${current * (cardW + gap)}px)`;
        updateDots();

        if (resetAuto) {
            clearInterval(autoTimer);
            startBar();
            startAuto();
        }
    }

    /* ── progress bar ── */
    function startBar() {
        clearInterval(barTimer);
        barWidth = 0;
        bar.style.width = '0%';
        const step = 100 / (INTERVAL / 100);
        barTimer = setInterval(() => {
            barWidth = Math.min(barWidth + step, 100);
            bar.style.width = barWidth + '%';
            if (barWidth >= 100) clearInterval(barTimer);
        }, 100);
    }

    /* ── auto-advance ── */
    function startAuto() {
        autoTimer = setInterval(() => {
            const max = TOTAL - getVisible();
            current = current >= max ? 0 : current + 1;
            goTo(current, false);
            startBar();
        }, INTERVAL);
    }

    /* ── controls ── */
    prevBtn.addEventListener('click', () => goTo(current - 1, true));
    nextBtn.addEventListener('click', () => goTo(current + 1, true));

    /* ── rebuild on resize ── */
    window.addEventListener('resize', () => {
        buildDots();
        goTo(current, false);
    });

    /* ── kick off ── */
    buildDots();
    startBar();
    startAuto();
})();
