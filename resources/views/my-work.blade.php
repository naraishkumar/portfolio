@extends('layout.app')

@section('title', 'Work - Naraish Kumar')

@section('page', 'work')

@section('content')

<!-- PAGE HERO -->
<div class="page-hero">
    <div class="page-hero-dots"></div>
    <div class="page-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> › <span>My Work</span></div>
        <h1 class="page-title">My Work</h1>
        <p class="page-subtitle">A showcase of web applications, APIs, and full-stack solutions built with Laravel and Vue.js — solving real-world problems with clean, scalable code.</p>
    </div>
</div>

<!-- FILTER BAR -->
<div class="filter-section">
    <div class="filter-bar">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="typescript">Typescript</button>
        <button class="filter-btn" data-filter="website">Website</button>
        <button class="filter-btn" data-filter="branding">Branding</button>
        <button class="filter-btn" data-filter="services">Services</button>
        <button class="filter-btn" data-filter="booking">Booking</button>
    </div>
</div>

<!-- PROJECTS GRID -->
<section class="projects-section">
    <div class="projects-grid" id="projectsGrid">

        @php $isFirst = true; @endphp
        @foreach($projects as $key => $project)
        <div class="project-card {{ $isFirst ? 'featured' : '' }} anim" data-tags="{{ implode(' ', $project['tags']) }}">
            <div class="project-visual" style="background:{{ $project['gradient'] }};position:relative;overflow:hidden;">
                <img src="{{ asset('assets/my-work/' . $project['image']) }}"
                     alt="{{ $project['title'] }} Screenshot"
                     style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;opacity:0.95;"
                     onerror="this.style.display='none'">
                <div class="project-visual-dots" style="position:absolute;inset:0;pointer-events:none;"></div>
                <span class="project-visual-label" style="background:{{ $project['badge_color'] }};border-color:rgba(255,255,255,0.3);z-index:2;{{ strpos($project['badge_color'], 'linear-gradient') !== false ? 'color:#1a0a1a;' : 'color:#fff;' }}">{{ $project['badge'] }}</span>
                <span class="project-wip" style="background:#22c55e;color:#fff;z-index:2;">{{ $project['status'] }}</span>
                <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.4) 100%);pointer-events:none;"></div>
            </div>
            <div class="project-body">
                <div class="project-title">{{ $project['title'] }}</div>
                <p class="project-desc">{{ $project['short_desc'] }}</p>
                <div class="project-tags">
                    @foreach($project['tech_stack'] as $tech)
                    <span class="tag tag-blue">{{ $tech }}</span>
                    @endforeach
                </div>
                <div class="project-footer">
                    <span class="project-year">📅 {{ $project['year'] }}</span>
                    <div class="project-links">
                        <a href="{{ $project['github'] }}" target="_blank" class="project-link" title="GitHub">
                            <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                        </a>
                        <a href="{{ $project['live_url'] }}" target="_blank" class="project-link" title="Live Demo">
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                        <a href="/project/{{ $project['slug'] }}" class="project-link" title="View Details" style="color:var(--blue);border-color:var(--blue);background:var(--blue-pale);">
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @php $isFirst = false; @endphp
        @endforeach

    </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stat-item anim">
        <div class="stat-num">{{ count($projects) }}<span>+</span></div>
        <div class="stat-label">Projects Built</div>
    </div>
    <div class="stat-item anim">
        <div class="stat-num">4<span>+</span></div>
        <div class="stat-label">Years Experience</div>
    </div>
    <div class="stat-item anim">
        <div class="stat-num">5<span>+</span></div>
        <div class="stat-label">Tech Roles</div>
    </div>
    <div class="stat-item anim">
        <div class="stat-num">100<span>%</span></div>
        <div class="stat-label">Client Satisfaction</div>
    </div>
</div>

<!-- TESTIMONIALS -->
<section class="testimonial-section">
    <div class="section-badge anim"><span class="dot"></span>What Clients Say</div>
    <h2 class="section-heading anim" style="margin-top:12px;">Happy <span class="blue">Clients</span></h2>
    <div class="testimonial-grid">
        @foreach($projects as $project)
            @if(isset($project['testimonial']))
            <div class="testi-card anim">
                <div class="testi-quote">"</div>
                <p class="testi-text">{{ $project['testimonial']['quote'] }}</p>
                <div class="testi-author">
                    <div class="testi-avatar">{{ $project['testimonial']['avatar'] }}</div>
                    <div>
                        <div class="testi-name">{{ $project['testimonial']['name'] }}</div>
                        <div class="testi-role">{{ $project['testimonial']['role'] }}</div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</section>

<!-- CTA -->
<div class="cta-banner">
    <div class="cta-content">
        <h2>Like what you see? <span>Let's talk.</span></h2>
        <p>I'm available for freelance projects, contracts, and full-time opportunities. Let's build something great together.</p>
    </div>
    <div class="cta-actions">
        <a href="/contact" class="btn btn-white">Start a Project <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg></a>
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
