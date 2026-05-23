@extends('layout.app')

@section('title', 'Work - Naraish Kumar')

@section('page', 'work')

@section('content')

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-dots"></div>
    <div class="page-hero-content">
      <div class="breadcrumb"><a href="index.html">Home</a> › <span>My Work</span></div>
      <h1 class="page-title">My Work</h1>
      <p class="page-subtitle">A showcase of web applications, APIs, and full-stack solutions built with Laravel and Vue.js — solving real-world problems with clean, scalable code.</p>
    </div>
  </div>

  <!-- FILTER BAR -->
  <div class="filter-section">
    <div class="filter-bar">
      <button class="filter-btn active" data-filter="all">All Projects</button>
      <button class="filter-btn" data-filter="laravel">Laravel</button>
      <button class="filter-btn" data-filter="vue">Vue.js</button>
      <button class="filter-btn" data-filter="api">API</button>

    </div>
  </div>

  <!-- PROJECTS GRID -->
  <section class="projects-section">
    <div class="projects-grid" id="projectsGrid">

      <!-- Project 1 — FEATURED -->
      <div class="project-card featured anim" data-tags="laravel vue api">
        <div class="project-visual">
          <div class="project-visual-dots"></div>
          <span class="project-visual-label">Full Stack</span>
          <span class="project-visual-icon">🛒</span>
        </div>
        <div class="project-body">
          <div class="project-title">E-Commerce Management Platform</div>
          <p class="project-desc">A complete multi-vendor e-commerce backend built with Laravel. Features include product management, order tracking, inventory control, user roles & permissions, and a Vue.js powered admin dashboard with real-time analytics.</p>
          <div class="project-tags">
            <span class="tag tag-blue">Laravel</span>
            <span class="tag tag-blue">Vue.js</span>
            <span class="tag">MySQL</span>
            <span class="tag">REST API</span>
            <span class="tag">Tailwind</span>
          </div>
          <div class="project-footer">
            <span class="project-year">📅 2025</span>
            <div class="project-links">
              <a href="#" class="project-link" title="GitHub">
                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
              </a>
              <a href="#" class="project-link" title="Live Demo">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6m0 0v6m0-6L10 14"/></svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card anim" data-tags="api laravel">
        <div class="project-visual">
          <div class="project-visual-dots"></div>
          <span class="project-visual-label">API</span>
          <span class="project-visual-icon">🔌</span>
        </div>
        <div class="project-body">
          <div class="project-title">RESTful API Gateway</div>
          <p class="project-desc">Designed and built a scalable API gateway for a SaaS platform, handling authentication (JWT/Sanctum), rate limiting, and endpoint versioning.</p>
          <div class="project-tags">
            <span class="tag tag-blue">Laravel</span>
            <span class="tag tag-blue">REST API</span>
            <span class="tag">JWT</span>
            <span class="tag">Sanctum</span>
          </div>
          <div class="project-footer">
            <span class="project-year">📅 2025</span>
            <div class="project-links">
              <a href="#" class="project-link" title="GitHub"><svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project-card anim" data-tags="vue laravel">
        <div class="project-visual">
          <div class="project-visual-dots"></div>
          <span class="project-visual-label">Dashboard</span>
          <span class="project-wip">Live</span>
          <span class="project-visual-icon">📊</span>
        </div>
        <div class="project-body">
          <div class="project-title">Analytics Dashboard</div>
          <p class="project-desc">A Vue.js SPA dashboard with live charts, data tables, and export features connected to a Laravel backend API for business reporting.</p>
          <div class="project-tags">
            <span class="tag tag-blue">Vue.js</span>
            <span class="tag tag-blue">Laravel</span>
            <span class="tag">Chart.js</span>
            <span class="tag">MySQL</span>
          </div>
          <div class="project-footer">
            <span class="project-year">📅 2025</span>
            <div class="project-links">
              <a href="#" class="project-link" title="GitHub"><svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg></a>
              <a href="#" class="project-link" title="Live"><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6m0 0v6m0-6L10 14"/></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="project-card anim" data-tags="scraping laravel">
        <div class="project-visual">
          <div class="project-visual-dots"></div>
          <span class="project-visual-label">Scraper</span>
          <span class="project-visual-icon">🕷️</span>
        </div>
        <div class="project-body">
          <div class="project-title">Product Price Scraper</div>
          <p class="project-desc">An automated PHP scraper that crawls e-commerce websites, extracts product prices, and stores structured data into a MySQL database for competitor analysis.</p>
          <div class="project-tags">
            <span class="tag tag-blue">PHP</span>
            <span class="tag tag-blue">Web Scraping</span>
            <span class="tag">Guzzle</span>
            <span class="tag">MySQL</span>
          </div>
          <div class="project-footer">
            <span class="project-year">📅 2024</span>
            <div class="project-links">
              <a href="#" class="project-link" title="GitHub"><svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 5 -->
      <div class="project-card anim" data-tags="laravel api">
        <div class="project-visual">
          <div class="project-visual-dots"></div>
          <span class="project-visual-label">Backend</span>
          <span class="project-visual-icon">🔐</span>
        </div>
        <div class="project-body">
          <div class="project-title">Auth & Role Management System</div>
          <p class="project-desc">A reusable Laravel module for multi-role authentication, permission management, and audit logging — deployable across multiple projects.</p>
          <div class="project-tags">
            <span class="tag tag-blue">Laravel</span>
            <span class="tag tag-blue">Spatie</span>
            <span class="tag">REST API</span>
            <span class="tag">MySQL</span>
          </div>
          <div class="project-footer">
            <span class="project-year">📅 2024</span>
            <div class="project-links">
              <a href="#" class="project-link" title="GitHub"><svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 6 -->
      <div class="project-card anim" data-tags="scraping vue">
        <div class="project-visual">
          <div class="project-visual-dots"></div>
          <span class="project-visual-label">Data Pipeline</span>
          <span class="project-wip">New</span>
          <span class="project-visual-icon">📡</span>
        </div>
        <div class="project-body">
          <div class="project-title">Lead Generation Data Tool</div>
          <p class="project-desc">A Vue.js frontend paired with a PHP scraping engine to collect, filter, and export business leads from public directories into organized spreadsheets.</p>
          <div class="project-tags">
            <span class="tag tag-blue">Vue.js</span>
            <span class="tag tag-blue">Web Scraping</span>
            <span class="tag">PHP</span>
            <span class="tag">Export CSV</span>
          </div>
          <div class="project-footer">
            <span class="project-year">📅 2025</span>
            <div class="project-links">
              <a href="#" class="project-link" title="GitHub"><svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg></a>
              <a href="#" class="project-link" title="Live"><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6m0 0v6m0-6L10 14"/></svg></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- STATS BAR -->
  <div class="stats-bar">
    <div class="stat-item anim">
      <div class="stat-num">6<span>+</span></div>
      <div class="stat-label">Projects Built</div>
    </div>
    <div class="stat-item anim">
      <div class="stat-num">2<span>+</span></div>
      <div class="stat-label">Years Experience</div>
    </div>
    <div class="stat-item anim">
      <div class="stat-num">3<span>+</span></div>
      <div class="stat-label">Tech Roles</div>
    </div>
    <div class="stat-item anim">
      <div class="stat-num">100<span>%</span></div>
      <div class="stat-label">Commitment</div>
    </div>
  </div>

  <!-- TESTIMONIALS -->
  <section class="testimonial-section">
    <div class="section-badge anim"><span class="dot"></span>What Clients Say</div>
    <h2 class="section-heading anim" style="margin-top:12px;">Happy <span class="blue">Clients</span></h2>
    <div class="testimonial-grid">
      <div class="testi-card anim">
        <div class="testi-quote">"</div>
        <p class="testi-text">Naraish delivered a robust Laravel backend well ahead of schedule. His attention to code quality and API documentation made integration a breeze for our frontend team.</p>
        <div class="testi-author">
          <div class="testi-avatar">AK</div>
          <div>
            <div class="testi-name">Ahmed Khan</div>
            <div class="testi-role">CTO, Webpenter Inc.</div>
          </div>
        </div>
      </div>
      <div class="testi-card anim">
        <div class="testi-quote">"</div>
        <p class="testi-text">The data scraping tool Naraish built saved us hours every week. It's reliable, handles edge cases well, and the code is clean enough for our team to maintain easily.</p>
        <div class="testi-author">
          <div class="testi-avatar">SR</div>
          <div>
            <div class="testi-name">Sara Raza</div>
            <div class="testi-role">Product Manager, Webpenter Inc.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <div class="cta-banner">
    <div class="cta-content">
      <h2>Like what you see? <span>Let's talk.</span></h2>
      <p>I'm available for freelance projects, contracts, and full-time opportunities. Let's build something great together.</p>
    </div>
    <div class="cta-actions">
      <a href="contact.html" class="btn btn-white">Start a Project <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
    </div>
  </div>

  <script>
    /* ── FILTER LOGIC ── */
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
  </script>


@endsection
