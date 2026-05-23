@extends('layout.app')

@section('title', 'About - Naraish Kumar')

@section('page', 'about')

@section('content')


    <!-- PAGE HERO -->
    <div class="page-hero">
        <div class="page-hero-dots"></div>
        <div class="page-hero-content">
            <div class="breadcrumb"><a href="index.html">Home</a> › <span>About</span></div>
            <h1 class="page-title">About Me</h1>
            <p class="page-subtitle">A passionate Software Engineer who loves turning ideas into clean, functional
                digital products.</p>
        </div>
    </div>

    <!-- ABOUT GRID -->
    <div class="about-grid">
        <div class="about-left anim">
            <div class="avatar-wrap">
                <div class="avatar-ring"></div>

                <div class="avatar-box">
                    <img src="{{ asset('assets/naraishkumar.png') }}" alt="Naraish Kumar" class="avatar-img">
                </div>

                <div class="avatar-badge">💼 Software Engineer</div>
            </div>
            <div class="info-chips">
                <div class="info-chip"><span class="ic">📍</span>
                    <div><strong>Location</strong><br><span>Rahim Yar Khan, Pakistan</span></div>
                </div>
                <div class="info-chip"><span class="ic">💼</span>
                    <div><strong>Status</strong><br><span>Open to Work</span></div>
                </div>
                <div class="info-chip"><span class="ic">🗓️</span>
                    <div><strong>Experience</strong><br><span>4+ Years</span></div>
                </div>
                <div class="info-chip"><span class="ic">🎓</span>
                    <div><strong>Specialty</strong><br><span>Laravel &amp; Vue.js</span></div>
                </div>
            </div>
            <div style="margin-top:28px;">
                <a href="#" class="btn btn-blue" style="width:100%;justify-content:center;">Download CV <svg
                        width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 004.561 21h14.878a2 2 0 001.94-1.515L22 17" />
                    </svg></a>
            </div>
        </div>

        <div class="about-right">
            <div class="section-badge anim"><span class="dot"></span>Who I Am</div>
            <h1 class="anim">Passionate <span>Engineer</span>,<br>Problem Solver</h1>
            <div class="about-body anim">
                <p>
                    Hi, I'm <strong>Naraish Kumar</strong> — a Software Engineer and BS Information Technology graduate
                    (2026) from Pakistan, focused on crafting modern, scalable, and high-performance web applications.
                </p>

                <p>
                    I work mainly with <strong>Laravel</strong> and <strong>Vue.js</strong>, building clean backend
                    systems, powerful REST APIs, and smooth frontend experiences. From complex business logic to
                    real-world web apps, I enjoy solving problems through code.
                </p>

                <p>
                    I’ve worked on multiple projects involving web applications, APIs, automation, and scraping systems.
                    I care deeply about clean architecture, performance, and writing code that actually scales in real
                    production environments.
                </p>

                <p>
                    I’m always exploring modern technologies, improving my skills, and pushing myself toward becoming a
                    stronger software engineer who can turn ideas into real, usable products.
                </p>
            </div>

            <div class="about-values">
                <div class="value-card anim">
                    <div class="vi">🎯</div>
                    <h4>Goal-Oriented</h4>
                    <p>I focus on delivering results that align with business objectives, not just technical
                        requirements.</p>
                </div>
                <div class="value-card anim">
                    <div class="vi">🧹</div>
                    <h4>Clean Code</h4>
                    <p>I write code that is readable, maintainable, and follows modern best practices and design
                        patterns.</p>
                </div>
                <div class="value-card anim">
                    <div class="vi">🚀</div>
                    <h4>Always Learning</h4>
                    <p>Technology evolves fast. I commit to continuous learning to stay ahead and deliver modern
                        solutions.</p>
                </div>
                <div class="value-card anim">
                    <div class="vi">🤝</div>
                    <h4>Team Player</h4>
                    <p>Great products are built by great teams. I communicate clearly and collaborate effectively.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SKILLS BARS -->
    <div class="skills-section-about">
        <div class="section-badge anim"><span class="dot"></span>Technical Proficiency</div>
        <h2 class="section-heading anim" style="margin-top:12px;">My <span class="blue">Tech Stack</span></h2>
        <div class="skills-list">
            <div class="skill-row anim"><span class="skill-name">Laravel</span>
                <div class="skill-bar-bg">
                    <div class="skill-bar" style="width:90%"></div>
                </div><span class="skill-pct">90%</span>
            </div>
            <div class="skill-row anim"><span class="skill-name">Vue.js</span>
                <div class="skill-bar-bg">
                    <div class="skill-bar" style="width:82%"></div>
                </div><span class="skill-pct">82%</span>
            </div>
            <div class="skill-row anim"><span class="skill-name">PHP</span>
                <div class="skill-bar-bg">
                    <div class="skill-bar" style="width:88%"></div>
                </div><span class="skill-pct">88%</span>
            </div>
            <div class="skill-row anim"><span class="skill-name">REST APIs</span>
                <div class="skill-bar-bg">
                    <div class="skill-bar" style="width:85%"></div>
                </div><span class="skill-pct">85%</span>
            </div>
            <div class="skill-row anim"><span class="skill-name">MySQL</span>
                <div class="skill-bar-bg">
                    <div class="skill-bar" style="width:80%"></div>
                </div><span class="skill-pct">80%</span>
            </div>

            <div class="skill-row anim"><span class="skill-name">JavaScript</span>
                <div class="skill-bar-bg">
                    <div class="skill-bar" style="width:78%"></div>
                </div><span class="skill-pct">78%</span>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta-banner">
        <div class="cta-content">
            <h2>Let's work <span>together</span></h2>
            <p>I'm currently open to new opportunities. Let's build something amazing.</p>
        </div>
        <div class="cta-actions">
            <a href="contact.html" class="btn btn-white">Contact Me <svg width="15" height="15" fill="none"
                    stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10" />
                </svg></a>
        </div>
    </div>

@endsection
