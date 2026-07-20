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
        <p class="page-subtitle">Thoughts, tutorials, and insights on Laravel, Vue.js, APIs, web development, and everything in between.</p>
    </div>
</div>

<!-- FEATURED POST -->
@php $firstBlog = array_values($blogs)[0] ?? null; @endphp
@if($firstBlog)
<section class="featured-section">
    <a href="/blog/{{ $firstBlog['slug'] }}" class="featured-post anim">
        <div class="featured-visual">
            <div class="featured-visual-dots"></div>
            <span class="featured-badge">🔥 Featured</span>
            <span class="featured-read-time">⏱ {{ $firstBlog['read_time'] }}</span>
            <span class="featured-visual-icon">🚀</span>
        </div>
        <div class="featured-body">
            <div class="post-category">
                <span class="cat-dot"></span>{{ $firstBlog['category'] }}
            </div>
            <h2 class="featured-title">{{ $firstBlog['title'] }}</h2>
            <p class="featured-excerpt">{{ $firstBlog['excerpt'] }}</p>
            <div class="post-meta">
                <div class="post-author">
                    <div class="author-avatar">{{ $firstBlog['author_avatar'] }}</div>
                    <span class="author-name">{{ $firstBlog['author'] }}</span>
                </div>
                <span class="sep"></span>
                <span>{{ $firstBlog['date'] }}</span>
                <span class="sep"></span>
                <span>{{ $firstBlog['read_time'] }}</span>
            </div>
            <span class="read-more-link">
                Read Full Article
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10"/>
                </svg>
            </span>
        </div>
    </a>
</section>
@endif

<!-- FILTER & SEARCH -->
<section class="filter-search-section">
    <div class="filter-bar">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="laravel">Laravel</button>
        <button class="filter-btn" data-filter="api">API</button>
        <button class="filter-btn" data-filter="vue">Vue.js</button>
        <button class="filter-btn" data-filter="scraping">Web Scraping</button>
        <button class="filter-btn" data-filter="tips">Tips</button>
    </div>
    <div class="search-wrap">
        <span class="search-icon">🔍</span>
        <input type="text" class="search-input" id="searchInput" placeholder="Search articles..."/>
    </div>
</section>

<!-- BLOG GRID -->
<section class="blog-section">
    <div class="blog-grid" id="blogGrid">

        @foreach($blogs as $slug => $blog)
        <div class="blog-card anim" data-tags="{{ implode(' ', $blog['tags']) }}" data-title="{{ strtolower($blog['title']) }}">
            <div class="blog-visual" style="background:linear-gradient(135deg, #1a2a4a, #2a5a8a);">
                <div class="blog-visual-dots"></div>
                <span class="blog-rt">⏱ {{ $blog['read_time'] }}</span>
                <span class="blog-visual-icon">{{ $blog['category'] === 'Laravel 12' ? '🚀' : '📝' }}</span>
            </div>
            <div class="blog-body">
                <div class="post-category"><span class="cat-dot"></span>{{ $blog['category'] }}</div>
                <div class="blog-title">{{ $blog['title'] }}</div>
                <p class="blog-excerpt">{{ $blog['excerpt'] }}</p>
                <div class="blog-footer">
                    <span class="blog-date">{{ $blog['date'] }}</span>
                    <a href="/blogs/{{ $blog['slug'] }}" class="blog-read-link">Read <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
                </div>
            </div>
        </div>
        @endforeach

        <!-- No Results -->
        <div class="no-results" id="noResults">
            <div class="nr-icon">🔍</div>
            <h3>No articles found</h3>
            <p>Try a different search term or category filter.</p>
        </div>

    </div>
</section>

<!-- TOPICS SECTION -->
<section class="topics-section">
    <div style="text-align:center;">
        <div class="section-badge" style="margin:0 auto 8px;"><span class="dot"></span>Topics</div>
        <h2 class="section-heading" style="font-size:clamp(1.6rem,2.5vw,2.2rem);">Explore <span class="blue">by Topic</span></h2>
    </div>
    <div class="topics-cloud">
        <a href="#" class="topic-tag active">All <span class="tc">({{ count($blogs) }})</span></a>
        @php
            $topics = [];
            foreach($blogs as $blog) {
                foreach($blog['tags'] as $tag) {
                    if (!isset($topics[$tag])) $topics[$tag] = 0;
                    $topics[$tag]++;
                }
            }
        @endphp
        @foreach($topics as $tag => $count)
        <a href="#" class="topic-tag">{{ ucfirst($tag) }} <span class="tc">({{ $count }})</span></a>
        @endforeach
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

<script>
    // Filter and search logic
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
        tag.addEventListener('click', (e) => {
            e.preventDefault();
            const keyword = tag.textContent.trim().toLowerCase().split(' ')[0];
            if (searchInput) {
                searchInput.value = keyword;
                applyFilters();
            }
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
</script>

@endsection
