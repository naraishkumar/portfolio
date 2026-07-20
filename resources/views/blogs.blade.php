@extends('layout.app')

@section('title', 'Blogs - Naraish Kumar')

@section('page', 'blog')

@section('content')

    <!-- PAGE HERO -->
    <div class="page-hero">
        <div class="page-hero-dots"></div>
        <div class="page-hero-content">
            <div class="breadcrumb"><a href="/">Home</a> › <span>Blogs</span></div>
            <h1 class="page-title">Naraish's Blog</h1>
            <p class="page-subtitle">Thoughts, tutorials, and insights on Laravel, Vue.js, APIs, web development, and
                everything in between.</p>
        </div>
    </div>

    <!-- FEATURED POST -->
    <section class="featured-section">
        <a href="/blog/laravel-12-rest-api-sanctum" class="featured-post anim">
            <div class="featured-visual">
                <div class="featured-visual-dots"></div>
                <span class="featured-badge">🔥 Featured</span>
                <span class="featured-read-time">⏱ 15 min read</span>
                <span class="featured-visual-icon">🚀</span>
            </div>
            <div class="featured-body">
                <div class="post-category">
                    <span class="cat-dot"></span>Laravel 12
                </div>
                <h2 class="featured-title">Building a REST API with Laravel 12 + Sanctum</h2>
                <p class="featured-excerpt">
                    A complete step-by-step guide to building a production-ready REST API with Laravel 12
                    and Sanctum authentication. Learn user registration, login, password reset with OTP,
                    token management, and advanced security features.
                </p>
                <div class="post-meta">
                    <div class="post-author">
                        <div class="author-avatar">NK</div>
                        <span class="author-name">Naraish Kumar</span>
                    </div>
                    <span class="sep"></span>
                    <span>July 19, 2026</span>
                    <span class="sep"></span>
                    <span>15 min read</span>
                </div>
                <span class="read-more-link">
                    Read Full Article
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M7 17L17 7M17 7H7M17 7v10" />
                    </svg>
                </span>
            </div>
        </a>
    </section>

    <!-- FILTER & SEARCH -->
    <section class="filter-search-section">
        <div class="filter-bar">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="laravel">Laravel</button>
            {{-- <button class="filter-btn" data-filter="api">API</button>
            <button class="filter-btn" data-filter="vue">Vue.js</button>
            <button class="filter-btn" data-filter="scraping">Web Scraping</button>
            <button class="filter-btn" data-filter="tips">Tips</button> --}}
        </div>
        <div class="search-wrap">
            <span class="search-icon">🔍</span>
            <input type="text" class="search-input" id="searchInput" placeholder="Search articles..." />
        </div>
    </section>

    <!-- BLOG GRID -->
    <section class="blog-section">
        <div class="blog-grid" id="blogGrid">

            <!-- Blog Card 1: Laravel 12 + Sanctum -->
            <div class="blog-card anim" data-tags="laravel api" data-title="laravel 12 sanctum rest api complete guide">
                <div class="blog-visual">
                    <div class="blog-visual-dots"></div>
                    <span class="blog-rt">⏱ 15 min</span>
                    <span class="blog-visual-icon">🚀</span>
                </div>
                <div class="blog-body">
                    <div class="post-category"><span class="cat-dot"></span>Laravel 12</div>
                    <div class="blog-title">Building a REST API with Laravel 12 + Sanctum</div>
                    <p class="blog-excerpt">Complete step-by-step guide to building a production-ready REST API with Laravel
                        12 and Sanctum authentication.</p>
                    <div class="blog-footer">
                        <span class="blog-date">July 19, 2026</span>
                        <a href="/blog/laravel-12-rest-api-sanctum" class="blog-read-link">Read <svg width="13"
                                height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path d="M7 17L17 7M17 7H7M17 7v10" />
                            </svg></a>
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
            <div class="section-badge" style="justify-content:center;margin-bottom:4px;"><span class="dot"></span>Stay
                Updated</div>
            <h2>Never Miss an <span>Article</span></h2>
            <p>Subscribe to get new articles, tutorials, and developer tips delivered straight to your inbox. No spam, ever.
            </p>
            <div class="newsletter-form">
                <input type="email" class="newsletter-input" id="nlEmail" placeholder="your@email.com" />
                <button class="newsletter-btn" onclick="subscribeNewsletter()">Subscribe</button>
            </div>
            <div class="newsletter-success" id="nlSuccess">🎉 You're subscribed! Watch your inbox for the next article.
            </div>
            <p class="newsletter-note">No spam. Unsubscribe at any time.</p>
        </div>
    </section>

@endsection
