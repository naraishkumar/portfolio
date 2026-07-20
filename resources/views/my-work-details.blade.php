@extends('layout.app')

@section('title', $project['title'] . ' - Naraish Kumar')

@section('page', 'work')

@section('content')

<!-- PROJECT HERO -->
<div class="project-hero" style="background:{{ $project['gradient'] }};padding:140px 64px 80px;position:relative;overflow:hidden;">
    <img src="{{ asset('assets/my-work/' . $project['image']) }}"
         alt="{{ $project['title'] }} Screenshot"
         style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;opacity:0.15;">
    <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.7) 100%);"></div>
    <div style="position:relative;z-index:2;margin:0 auto;">
        <div style="display:inline-flex;align-items:center;gap:10px;background:rgba(255,255,255,0.1);backdrop-filter:blur(8px);color:#fff;border-radius:100px;padding:6px 18px;font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-bottom:24px;border:1px solid rgba(255,255,255,0.1);">
            <span style="width:8px;height:8px;background:#22c55e;border-radius:50%;display:inline-block;animation:ripple 2s ease-out infinite;"></span>
            Live Project
        </div>
        <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2.5rem,5vw,4.2rem);font-weight:900;color:#fff;letter-spacing:-.03em;line-height:1.05;margin-bottom:20px;">
            {{ $project['title'] }}
        </h1>
        <p style="font-size:1.15rem;color:rgba(255,255,255,0.85);line-height:1.8;max-width:600px;font-weight:400;">
            {{ $project['full_desc'] }}
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:16px;margin-top:32px;">
            <a href="{{ $project['live_url'] }}" target="_blank" class="btn" style="background:#2563eb;color:#fff;padding:14px 32px;border-radius:12px;font-weight:700;transition:all .3s;">
                🌐 Visit Live Site
            </a>
            <a href="{{ $project['github'] }}" target="_blank" class="btn" style="background:rgba(255,255,255,0.1);color:#fff;border:1.5px solid rgba(255,255,255,0.2);padding:14px 32px;border-radius:12px;font-weight:700;backdrop-filter:blur(4px);">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" style="display:inline-block;margin-right:8px;"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                View Code
            </a>
        </div>
    </div>
</div>

<!-- PROJECT DETAILS -->
<article style="margin:0 40px;padding:60px 24px 80px;">

    <!-- Quick Info -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:16px;margin-bottom:48px;">
        <div style="background:var(--off-white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;">
            <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:.1em;color:var(--muted);font-weight:700;">Client</div>
            <div style="font-weight:600;color:var(--navy);margin-top:4px;">{{ $project['client'] }}</div>
        </div>
        <div style="background:var(--off-white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;">
            <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:.1em;color:var(--muted);font-weight:700;">Category</div>
            <div style="font-weight:600;color:var(--navy);margin-top:4px;">{{ $project['category'] }}</div>
        </div>
        <div style="background:var(--off-white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;">
            <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:.1em;color:var(--muted);font-weight:700;">Stack</div>
            <div style="font-weight:600;color:var(--navy);margin-top:4px;">{{ implode(', ', $project['tech_stack']) }}</div>
        </div>
        <div style="background:var(--off-white);border:1px solid var(--border);border-radius:12px;padding:16px 20px;">
            <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:.1em;color:var(--muted);font-weight:700;">Year</div>
            <div style="font-weight:600;color:var(--navy);margin-top:4px;">{{ $project['year'] }}</div>
        </div>
    </div>

    <!-- Project Screenshot -->
    <div style="border-radius:16px;overflow:hidden;border:1px solid var(--border);margin-bottom:48px;box-shadow:0 12px 40px rgba(0,0,0,0.08);">
        <img src="{{ asset('assets/my-work/' . $project['image']) }}"
             alt="{{ $project['title'] }} Website Screenshot"
             style="width:100%;height:auto;display:block;">
        <div style="padding:12px 20px;background:var(--off-white);border-top:1px solid var(--border);font-size:.8rem;color:var(--muted);text-align:center;">
            {{ $project['title'] }}
        </div>
    </div>

    <!-- Overview -->
    <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-bottom:16px;">Project Overview</h2>
    <p style="color:var(--muted);line-height:1.9;font-size:1rem;margin-bottom:24px;">
        {{ $project['long_desc'] }}
    </p>

    <!-- Features -->
    @if(isset($project['features']))
    <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">Key Features</h2>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:32px;">
        @foreach($project['features'] as $feature)
        <div style="background:var(--off-white);border-radius:12px;padding:16px 20px;border:1px solid var(--border);">
            <div style="font-size:1.2rem;margin-bottom:4px;">{{ $feature['icon'] }}</div>
            <h4 style="font-weight:700;color:var(--navy);font-size:.95rem;">{{ $feature['title'] }}</h4>
            <p style="font-size:.8rem;color:var(--muted);line-height:1.5;">{{ $feature['desc'] }}</p>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Tech Stack -->
    <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">⚙️ Tech Stack</h2>
    <div style="display:flex;flex-wrap:wrap;gap:10px;margin-bottom:32px;">
        @foreach($project['tech_stack'] as $tech)
        <span style="padding:10px 20px;background:var(--blue-pale);border:1px solid rgba(37,99,235,0.15);border-radius:8px;font-weight:600;color:var(--blue);">{{ $tech }}</span>
        @endforeach
    </div>

    <!-- Challenges & Solutions -->
    @if(isset($project['challenges']))
    <h2 style="font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--navy);margin-top:48px;margin-bottom:16px;">🎯 Challenges & Solutions</h2>
    @foreach($project['challenges'] as $challenge)
    <div style="background:var(--off-white);border-left:4px solid var(--blue);border-radius:8px;padding:20px 24px;margin-bottom:16px;">
        <h4 style="font-weight:700;color:var(--navy);margin-bottom:6px;">Challenge: {{ $challenge['title'] }}</h4>
        <p style="color:var(--muted);line-height:1.7;font-size:.95rem;">{{ $challenge['desc'] }}</p>
        <p style="color:var(--blue);font-weight:600;font-size:.9rem;margin-top:6px;">✅ Solution: {{ $challenge['solution'] }}</p>
    </div>
    @endforeach
    @endif

    <!-- Results -->
    @if(isset($project['results']))
    <div style="background:var(--navy);border-radius:16px;padding:40px;margin-top:48px;text-align:center;">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:12px;">📈 Results & Impact</h3>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:24px;">
            @foreach($project['results'] as $result)
            <div>
                <div style="font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:900;color:var(--accent);">{{ $result['value'] }}</div>
                <div style="font-size:.85rem;color:rgba(255,255,255,0.5);">{{ $result['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- Links -->
    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:48px;padding-top:32px;border-top:1px solid var(--border);">
        <a href="/my-work" class="btn btn-outline" style="padding:12px 24px;">
            ← Back to Projects
        </a>
        <a href="{{ $project['live_url'] }}" target="_blank" class="btn btn-blue" style="padding:12px 24px;">
            🌐 Visit Live Site
        </a>
        <a href="{{ $project['github'] }}" target="_blank" class="btn btn-navy" style="padding:12px 24px;">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" style="display:inline-block;margin-right:6px;"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
            View Code
        </a>
    </div>

</article>

<!-- MORE PROJECTS - Matching My Work Card Style -->
<section style="background:var(--off-white);padding:80px 64px;">
    <div style="max-width:1200px;margin:0 auto;">
        <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:48px;gap:20px;">
            <div>
                <div class="section-badge"><span class="dot"></span>More Projects</div>
                <h2 style="font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--navy);margin-top:8px;">
                    Explore <span style="color:var(--blue);">More Work</span>
                </h2>
            </div>
            <a href="/my-work" style="color:var(--blue);text-decoration:none;font-weight:700;display:flex;align-items:center;gap:6px;white-space:nowrap;">
                View All Projects
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10"/>
                </svg>
            </a>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            @php $count = 0; @endphp
            @foreach($projects as $key => $p)
                @if($key !== $project['slug'] && $count < 3)
                <div class="project-card anim" data-tags="{{ implode(' ', $p['tags']) }}" style="background:#fff;border:1px solid var(--border);border-radius:20px;overflow:hidden;transition:all .4s;display:flex;flex-direction:column;text-decoration:none;color:inherit;cursor:pointer;">
                    <div class="project-visual" style="background:{{ $p['gradient'] }};height:200px;position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center;">
                        <img src="{{ asset('assets/my-work/' . $p['image']) }}"
                             alt="{{ $p['title'] }} Screenshot"
                             style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top;opacity:0.95;"
                             onerror="this.style.display='none'">
                        <div class="project-visual-dots" style="position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,0.08) 1px,transparent 1px);background-size:20px 20px;pointer-events:none;"></div>
                        <span class="project-visual-label" style="background:{{ $p['badge_color'] }};border-color:rgba(255,255,255,0.3);z-index:2;position:absolute;top:16px;left:16px;padding:4px 12px;border-radius:100px;font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;{{ strpos($p['badge_color'], 'linear-gradient') !== false ? 'color:#1a0a1a;' : 'color:#fff;' }}">{{ $p['badge'] }}</span>
                        <span class="project-wip" style="background:#22c55e;color:#fff;z-index:2;position:absolute;top:16px;right:16px;padding:4px 10px;border-radius:100px;font-size:.68rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;">Live</span>
                        <div style="position:absolute;inset:0;background:linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.4) 100%);pointer-events:none;"></div>
                    </div>
                    <div class="project-body" style="padding:28px 28px 24px;flex:1;display:flex;flex-direction:column;">
                        <div class="project-title" style="font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--navy);margin-bottom:10px;letter-spacing:-.01em;">
                            {{ $p['title'] }}
                        </div>
                        <p class="project-desc" style="font-size:.88rem;color:var(--muted);line-height:1.75;flex:1;">{{ Str::limit($p['short_desc'], 80) }}</p>
                        <div class="project-tags" style="display:flex;flex-wrap:wrap;gap:8px;margin-top:20px;">
                            @foreach(array_slice($p['tech_stack'], 0, 3) as $tech)
                            <span class="tag tag-blue" style="display:inline-block;background:var(--blue-pale);color:var(--blue);border-radius:6px;padding:4px 12px;font-size:.75rem;font-weight:600;letter-spacing:.02em;">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="project-footer" style="display:flex;align-items:center;justify-content:space-between;margin-top:20px;padding-top:20px;border-top:1px solid var(--border);">
                            <span class="project-year" style="font-size:.78rem;color:var(--muted);font-weight:500;">📅 {{ $p['year'] }}</span>
                            <div class="project-links" style="display:flex;gap:10px;">
                                <a href="{{ $p['github'] }}" target="_blank" class="project-link" style="width:36px;height:36px;border:1.5px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--muted);text-decoration:none;transition:all .3s;font-size:.85rem;">
                                    <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                                </a>
                                <a href="{{ $p['live_url'] }}" target="_blank" class="project-link" style="width:36px;height:36px;border:1.5px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--muted);text-decoration:none;transition:all .3s;font-size:.85rem;">
                                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6m0 0v6m0-6L10 14"/></svg>
                                </a>
                                <a href="/project/{{ $p['slug'] }}" class="project-link" style="width:36px;height:36px;border:1.5px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--muted);text-decoration:none;transition:all .3s;font-size:.85rem;color:var(--blue);border-color:var(--blue);background:var(--blue-pale);">
                                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="newsletter-section" style="margin:0;">
    <div class="newsletter-inner anim">
        <div class="section-badge" style="justify-content:center;margin-bottom:4px;"><span class="dot"></span>Stay Updated</div>
        <h2>Never Miss a <span>Project</span></h2>
        <p>Subscribe to get new projects, tutorials, and developer insights delivered to your inbox.</p>
        <div class="newsletter-form">
            <input type="email" class="newsletter-input text-primary" id="nlEmail2" placeholder="your@email.com"/>
            <button class="newsletter-btn" onclick="subscribeNewsletter2()">Subscribe</button>
        </div>
        <div class="newsletter-success" id="nlSuccess2">🎉 You're subscribed!</div>
        <p class="newsletter-note">No spam. Unsubscribe at any time.</p>
    </div>
</section>

@endsection
