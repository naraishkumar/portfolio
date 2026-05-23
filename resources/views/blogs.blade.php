@extends('layout.app')

@section('title', 'Blogs - Naraish Kumar')

@section('page', 'blog')

@section('content')

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-dots"></div>
    <div class="page-hero-content">
      <div class="breadcrumb"><a href="index.html">Home</a> › <span>Blogs</span></div>
      <h1 class="page-title">Naraish's Blog</h1>
      <p class="page-subtitle">Thoughts, tutorials, and insights on Laravel, Vue.js, APIs, web development, and everything in between.</p>
    </div>
  </div>


  <!-- BLOG GRID -->
  <section class="blog-section">
    <div class="blog-grid" id="blogGrid">

      <div class="blog-card anim" data-tags="laravel api" data-title="laravel eloquent relationships">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 6 min</span>
          <span class="blog-visual-icon">🔴</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Laravel</div>
          <div class="blog-title">Mastering Eloquent Relationships in Laravel — A Practical Guide</div>
          <p class="blog-excerpt">Deep dive into one-to-one, one-to-many, many-to-many, and polymorphic relationships with real-world examples and performance tips.</p>
          <div class="blog-footer">
            <span class="blog-date">April 2025</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="vue tips" data-title="vue 3 composition api tips">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 5 min</span>
          <span class="blog-visual-icon">💚</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Vue.js</div>
          <div class="blog-title">10 Vue 3 Composition API Tips That Will Level Up Your Code</div>
          <p class="blog-excerpt">Practical patterns using composables, reactive refs, watchers, and lifecycle hooks to write cleaner, reusable Vue 3 components.</p>
          <div class="blog-footer">
            <span class="blog-date">March 2025</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="api tips" data-title="rest api design best practices">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 7 min</span>
          <span class="blog-visual-icon">🔌</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>API</div>
          <div class="blog-title">REST API Design Best Practices Every Developer Should Know</div>
          <p class="blog-excerpt">Naming conventions, HTTP status codes, pagination strategies, versioning, and authentication patterns for building APIs that developers love to use.</p>
          <div class="blog-footer">
            <span class="blog-date">March 2025</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="scraping" data-title="web scraping php guzzle tutorial">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 9 min</span>
          <span class="blog-visual-icon">🕷️</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Web Scraping</div>
          <div class="blog-title">Web Scraping with PHP &amp; Guzzle — From Zero to Production</div>
          <p class="blog-excerpt">Step-by-step tutorial on building a robust PHP scraper using Guzzle and DomCrawler. Covers rate limiting, proxy rotation, and error handling for production use.</p>
          <div class="blog-footer">
            <span class="blog-date">February 2025</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="laravel tips" data-title="laravel performance optimization">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 6 min</span>
          <span class="blog-visual-icon">⚡</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Laravel</div>
          <div class="blog-title">Laravel Performance Optimization — Speed Up Your App in 7 Steps</div>
          <p class="blog-excerpt">Caching strategies with Redis, query optimization with Eager Loading, route caching, config caching, and database indexing tips for faster Laravel apps.</p>
          <div class="blog-footer">
            <span class="blog-date">January 2025</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="vue laravel" data-title="vue laravel spa setup">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 10 min</span>
          <span class="blog-visual-icon">🎯</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Full Stack</div>
          <div class="blog-title">Building a Full-Stack SPA with Laravel API + Vue.js Frontend</div>
          <p class="blog-excerpt">Complete walkthrough of setting up a decoupled Laravel API backend with a Vue.js SPA frontend — including CORS, authentication, and deployment setup.</p>
          <div class="blog-footer">
            <span class="blog-date">December 2024</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="scraping tips" data-title="web scraping ethical legal guide">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 4 min</span>
          <span class="blog-visual-icon">⚖️</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Web Scraping</div>
          <div class="blog-title">Ethical Web Scraping — What You Should Know Before You Scrape</div>
          <p class="blog-excerpt">Understanding robots.txt, rate limiting etiquette, terms of service, and how to scrape responsibly without getting blocked or violating rules.</p>
          <div class="blog-footer">
            <span class="blog-date">November 2024</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="api laravel" data-title="jwt authentication laravel api">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 7 min</span>
          <span class="blog-visual-icon">🔐</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>API</div>
          <div class="blog-title">JWT vs Sanctum — Choosing the Right Auth for Your Laravel API</div>
          <p class="blog-excerpt">A practical comparison of JWT tokens and Laravel Sanctum for API authentication. When to use each, security considerations, and implementation examples.</p>
          <div class="blog-footer">
            <span class="blog-date">October 2024</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <div class="blog-card anim" data-tags="tips" data-title="git workflow developer best practices">
        <div class="blog-visual">
          <div class="blog-visual-dots"></div>
          <span class="blog-rt">⏱ 5 min</span>
          <span class="blog-visual-icon">🐙</span>
        </div>
        <div class="blog-body">
          <div class="post-category"><span class="cat-dot"></span>Tips & Tricks</div>
          <div class="blog-title">Git Workflow for Solo Developers — Branches, Commits &amp; Releases</div>
          <p class="blog-excerpt">A clean Git workflow for developers working solo or in small teams. Covers feature branches, commit conventions, tagging releases, and keeping a tidy history.</p>
          <div class="blog-footer">
            <span class="blog-date">September 2024</span>
            <a href="#" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
          </div>
        </div>
      </div>

      <!-- No Results -->
      <div class="no-results" id="noResults">
        <div class="nr-icon">🔍</div>
        <h3>No articles found</h3>
        <p>Try a different search term or category filter.</p>
      </div>

    </div>
  </section>


  <!-- NEWSLETTER -->
  <section class="newsletter-section">
    <div class="newsletter-inner anim">
      <div class="section-badge" style="justify-content:center;margin-bottom:4px;"><span class="dot"></span>Stay Updated</div>
      <h2>Never Miss an <span>Article</span></h2>
      <p>Subscribe to get new articles, tutorials, and developer tips delivered straight to your inbox. No spam, ever.</p>
      <div class="newsletter-form">
        <input type="email" class="newsletter-input" id="nlEmail" placeholder="your@email.com"/>
        <button class="newsletter-btn" onclick="subscribeNewsletter()">Subscribe</button>
      </div>
      <div class="newsletter-success" id="nlSuccess">🎉 You're subscribed! Watch your inbox for the next article.</div>
      <p class="newsletter-note">No spam. Unsubscribe at any time.</p>
    </div>
  </section>

@endsection
