@extends('layout.app')

@section('title', $blog['title'] . ' - Naraish Kumar')

@section('page', 'blog')

@section('content')

<!-- BLOG HERO -->
<div class="blog-hero" style="background:var(--navy);padding:120px 64px 60px;position:relative;overflow:hidden;">
        <div class="breadcrumb"><a href="/">Home</a> › <span><a href="/blogs">Blogs</a></span> › {{ $blog['title'] }} </div>

    <div style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,0.03) 1px,transparent 1px);background-size:24px 24px;"></div>
    <div style="position:relative;z-index:2;margin:0 auto;">
        <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.1);color:#fff;border-radius:100px;padding:4px 16px;font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:20px;">
            <span style="width:6px;height:6px;background:{{ $blog['category_color'] }};border-radius:50%;display:inline-block;"></span>
            {{ $blog['category'] }}
        </div>
        <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2.2rem,4.5vw,3.8rem);font-weight:900;color:#fff;letter-spacing:-.03em;line-height:1.1;margin-bottom:20px;">
            {{ $blog['title'] }}
        </h1>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.65);line-height:1.8;max-width:600px;">
            {{ $blog['full_description'] }}
        </p>
        <div style="display:flex;align-items:center;gap:16px;margin-top:28px;color:rgba(255,255,255,0.5);font-size:.85rem;flex-wrap:wrap;">
            <div style="display:flex;align-items:center;gap:10px;">
                <div style="width:40px;height:40px;background:linear-gradient(135deg,#2563eb,#60a5fa);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff;font-size:.9rem;">{{ $blog['author_avatar'] }}</div>
                <div>
                    <div style="font-weight:600;color:#fff;">{{ $blog['author'] }}</div>
                    <div style="font-size:.8rem;color:rgba(255,255,255,0.4);">{{ $blog['author_role'] }}</div>
                </div>
            </div>
            <span style="width:4px;height:4px;background:rgba(255,255,255,0.2);border-radius:50%;"></span>
            <span>{{ $blog['date'] }}</span>
            <span style="width:4px;height:4px;background:rgba(255,255,255,0.2);border-radius:50%;"></span>
            <span>{{ $blog['read_time'] }}</span>
        </div>
    </div>
</div>

<!-- BLOG CONTENT -->
<article style="margin:0 40px;padding:60px 24px 80px;">

    <!-- Table of Contents -->
    @if(isset($blog['table_of_contents']))
    <div style="background:var(--off-white);border:1px solid var(--border);border-radius:16px;padding:32px 36px;margin-bottom:48px;">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--navy);margin-bottom:16px;">📚 Table of Contents</h3>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;font-size:.92rem;">
            @foreach($blog['table_of_contents'] as $item)
            <li>
                <a href="#{{ $item['id'] }}" style="color:var(--blue);text-decoration:none;display:flex;align-items:center;gap:10px;">
                    <span style="display:inline-block;width:6px;height:6px;background:var(--blue);border-radius:50%;"></span>
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Blog Sections -->
    @foreach($blog['sections'] as $sectionId => $section)
        @if($sectionId === 'intro')
            <h2 id="{{ $sectionId }}" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:0;margin-bottom:16px;">{{ $section['title'] }}</h2>
        @else
            <h2 id="{{ $sectionId }}" style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">{{ $section['title'] }}</h2>
        @endif
        <div style="color:var(--muted);line-height:1.8;font-size:1rem;">
            {!! $section['content'] !!}
        </div>
    @endforeach

    <!-- Share/CTA -->
    <div style="background:var(--navy);border-radius:16px;padding:40px;text-align:center;margin-top:48px;">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:12px;">💡 Found this helpful?</h3>
        <p style="color:rgba(255,255,255,0.6);margin-bottom:20px;">Share it with your network and help others build better APIs!</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
            <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" style="padding:10px 24px;background:#fff;color:var(--navy);border-radius:8px;text-decoration:none;font-weight:700;transition:all .3s;">🐦 Twitter</a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" style="padding:10px 24px;background:#0a66c2;color:#fff;border-radius:8px;text-decoration:none;font-weight:700;transition:all .3s;">💼 LinkedIn</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" style="padding:10px 24px;background:#1877f2;color:#fff;border-radius:8px;text-decoration:none;font-weight:700;transition:all .3s;">📘 Facebook</a>
        </div>
    </div>
</article>

<!-- Related Posts -->
@if(isset($blog['related_posts']))
<section style="background:var(--off-white);padding:60px 24px;">
    <div style="max-width:1200px;margin:0 40px;">
        <h2 style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--navy);text-align:center;margin-bottom:40px;">📖 Related <span style="color:var(--blue);">Articles</span></h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;">
            @foreach($blog['related_posts'] as $post)
            <a href="/blog/{{ $post['slug'] }}" style="background:#fff;border:1px solid var(--border);border-radius:16px;padding:24px;text-decoration:none;transition:all .3s;">
                <div style="font-size:2rem;margin-bottom:12px;">{{ $post['icon'] }}</div>
                <h4 style="font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--navy);">{{ $post['title'] }}</h4>
                <p style="color:var(--muted);font-size:.85rem;margin-top:8px;">{{ $post['excerpt'] }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Newsletter -->
<section class="newsletter-section" style="margin:0;">
    <div class="newsletter-inner anim">
        <div class="section-badge" style="justify-content:center;margin-bottom:4px;"><span class="dot"></span>Stay Updated</div>
        <h2>Never Miss an <span>Article</span></h2>
        <p>Subscribe to get new articles, tutorials, and developer tips delivered straight to your inbox.</p>
        <div class="newsletter-form">
            <input type="email" class="newsletter-input" id="nlEmail2" placeholder="your@email.com"/>
            <button class="newsletter-btn" onclick="subscribeNewsletter2()">Subscribe</button>
        </div>
        <div class="newsletter-success" id="nlSuccess2">🎉 You're subscribed!</div>
        <p class="newsletter-note">No spam. Unsubscribe at any time.</p>
    </div>
</section>

<script>
    window.subscribeNewsletter2 = function () {
        const email = document.getElementById('nlEmail2');
        if (!email) return;
        const val = email.value.trim();
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
            email.style.borderColor = '#ef4444';
            return;
        }
        email.style.borderColor = '';
        const success = document.getElementById('nlSuccess2');
        if (success) success.classList.add('show');
        email.value = '';
    };
</script>

@endsection
