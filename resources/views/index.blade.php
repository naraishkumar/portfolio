@extends('layout.app')

@section('title', 'Naraish Kumar - Software Engineer')

@section('page', 'index')

@section('content')

    <!-- HERO -->
    <section class="hero">
        <div class="hero-blob"></div>
        <div class="hero-blob2"></div>
        <div class="hero-left">
            <div class="hero-greeting"><span class="pulse"></span>Available for Work</div>
            <h1 class="hero-name">Naraish Kumar</h1>
            <p class="hero-role"><strong>Laravel & Vuejs Developer</strong> building scalable, performant web
                applications.<br>Specializing in <strong>Laravel</strong>, <strong>Vue.js</strong> &amp; <strong>REST
                    APIs</strong>.</p>
            <div class="hero-actions">
                <a href="{{ asset('assets/NaraishKumar-Resume.pdf') }}" class="btn btn-blue"
                    download="Naraish-Kumar-Resume.pdf">
                    Download CV
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path d="M7 17L17 7M17 7H7M17 7v10" />
                    </svg>
                </a>
                <a href="/contact" class="btn btn-outline">Let's Talk</a>
            </div>

            <div class="hero-socials">

                <!-- GitHub -->
                <a href="https://github.com/naraishkumar" class="social-link" title="GitHub" target="_blank">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.49.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1.01.07 1.54 1.03 1.54 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.51.336 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z" />
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/naraish-kumar01" class="social-link" title="LinkedIn" target="_blank">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                    </svg>
                </a>

                <!-- Email -->
                <a href="mailto:naraishkumar55@gmail.com" class="social-link" title="Email" target="_blank">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/naraishkumar.official" class="social-link" title="Facebook"
                    target="_blank">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.99 3.657 9.128 8.438 9.879v-6.99H7.898v-2.889h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.196 2.238.196v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562v1.875h2.773l-.443 2.889h-2.33v6.99C18.343 21.128 22 16.99 22 12z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/naraishkumar.official" class="social-link" title="Instagram"
                    target="_blank">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm8.5 1.5h-8.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5zm-4.25 2a5.25 5.25 0 110 10.5 5.25 5.25 0 010-10.5zm0 1.5a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zm4.75-.938a1.063 1.063 0 110 2.125 1.063 1.063 0 010-2.125z" />
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/923060267456" class="social-link" title="WhatsApp" target="_blank">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347" />
                    </svg>
                </a>

            </div>
        </div>
        <div class="hero-right">
            <div style="position:relative">
                <div class="float-badge b1"><span>🚀</span> 4+ Years Exp.</div>
                <div class="float-badge b2"><span>✅</span> Open to Work</div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="marquee-strip">
        <div class="marquee-track">
            <div class="marquee-item"><span class="mdot"></span>Laravel</div>
            <div class="marquee-item"><span class="mdot"></span>Vue.js</div>
            <div class="marquee-item"><span class="mdot"></span>GitHub</div>
            <div class="marquee-item"><span class="mdot"></span>PHP</div>
            <div class="marquee-item"><span class="mdot"></span>RESTful APIs</div>
            <div class="marquee-item"><span class="mdot"></span>MySQL</div>
            <div class="marquee-item"><span class="mdot"></span>JavaScript</div>
            <div class="marquee-item"><span class="mdot"></span>Git</div>
            <div class="marquee-item"><span class="mdot"></span>Project Management</div>

            <div class="marquee-item"><span class="mdot"></span>Laravel</div>
            <div class="marquee-item"><span class="mdot"></span>Vue.js</div>
            <div class="marquee-item"><span class="mdot"></span>GitHub</div>
            <div class="marquee-item"><span class="mdot"></span>PHP</div>
            <div class="marquee-item"><span class="mdot"></span>RESTful APIs</div>
            <div class="marquee-item"><span class="mdot"></span>MySQL</div>
            <div class="marquee-item"><span class="mdot"></span>JavaScript</div>
            <div class="marquee-item"><span class="mdot"></span>Git</div>
            <div class="marquee-item"><span class="mdot"></span>Project Management</div>
        </div>
    </div>

    <!-- SKILLS PREVIEW -->
    <section class="skills-preview">
        <div class="section-top">
            <div>
                <div class="section-badge anim"><span class="dot"></span>My Professional Skills</div>
                <h2 class="section-heading anim">Expertise &amp; <span class="blue">Skills</span></h2>
                <p class="section-sub anim">Crafting digital experiences with the right tools for every challenge.</p>
            </div>
        </div>
        <div class="skills-grid">
            <div class="skill-card anim">
                <div class="skill-icon">🗂️</div>
                <span class="skill-num">01</span>
                <h3>Project Management</h3>
                <p>I help organizations manage complex IT projects from inception to delivery. With
                    hands-on experience in Agile environments, I coordinate teams, define roadmaps, track progress, and
                    ensure every milestone is met — without compromising quality.</p>
            </div>
            <div class="skill-card anim">
                <div class="skill-icon">🌐</div>
                <span class="skill-num">02</span>
                <h3>Web Application Development</h3>
                <p>I specialize in full-stack web development using the Laravel ecosystem on the
                    backend and Vue.js on the frontend. From REST API design to building reactive UIs, I create web
                    solutions that are scalable, maintainable, and user-friendly.</p>
            </div>
            <div class="skill-card anim">
                <div class="skill-icon">🔗</div>
                <span class="skill-num">03</span>
                <h3>API Development</h3>
                <p>Developing secure and scalable RESTful APIs with Laravel for seamless system
                    integration and high-performance applications.
                    Optimizing data flow, authentication, and backend communication to ensure reliable and efficient
                    API-driven systems.</p>
            </div>
        </div>
        <div class="explore-center anim">
            <a href="/expertise" class="btn btn-navy">Explore All Skills <svg width="15" height="15"
                    fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10" />
                </svg></a>
        </div>
    </section>

    <!-- EXPERIENCE PREVIEW -->
    <section class="exp-preview">
        <div class="section-top">
            <div>
                <div class="section-badge anim"><span class="dot"></span>My Experience</div>
                <h2 class="section-heading anim">Experience &amp; <span class="blue">Career</span></h2>
                <p class="section-sub anim">4+ years of professional growth across web development roles.</p>
            </div>
        </div>
        <div class="exp-list">
            <div class="exp-card anim">
                <div>
                    <div class="exp-period">May 2025 — Ongoing</div>
                    <div class="exp-role">Laravel &amp; Vue.js Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>
                    <div class="exp-tags"><span class="tag tag-blue">Laravel</span><span
                            class="tag tag-blue">Vue.js</span><span class="tag">REST API</span><span
                            class="tag">MySQL</span></div>
                </div>
                <div class="exp-num">01</div>
            </div>
            <div class="exp-card anim">
                <div>
                    <div class="exp-period">Jan 2025 — Apr 2025</div>
                    <div class="exp-role">API Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>
                    <div class="exp-tags"><span class="tag tag-blue">REST APIs</span><span
                            class="tag tag-blue">PHP</span><span class="tag">Postman</span><span
                            class="tag">JSON</span>
                    </div>
                </div>
                <div class="exp-num">02</div>
            </div>
            <div class="exp-card anim">
                <div>
                    <div class="exp-period">Oct 2024 — Dec 2024</div>
                    <div class="exp-role">Laravel Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>
                    <div class="exp-tags"><span class="tag tag-blue">Laravel</span><span class="tag">Blade</span><span
                            class="tag">MySQL</span><span class="tag">Git</span></div>
                </div>
                <div class="exp-num">03</div>
            </div>
        </div>
        <div class="explore-center anim">
            <a href="/expertise" class="btn btn-blue">View Full Experience <svg width="15" height="15"
                    fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10" />
                </svg></a>
        </div>
    </section>


    <!-- TESTIMONIALS -->
    {{-- ══════════════════════════════════════════
    TESTIMONIALS — Slider (3 visible, auto 5s)
    Replace the old two-grid testimonial section
    ══════════════════════════════════════════ --}}

    <!-- TESTIMONIALS -->
<section class="testimonial-section">
    <div class="section-badge anim">
        <span class="dot"></span>What Clients Say
    </div>
    <h2 class="section-heading anim">
        Happy <span class="blue">Clients</span>
    </h2>

    <!-- SLIDER VIEWPORT -->
    <div class="ts-viewport">
        <div class="ts-track" id="ts-track">

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">Excellent work! Website ka design professional hai. Colors aur layout clean aur
                    modern hain. Website easy to navigate hai aur business ko ek strong online presence deti hai.
                    Overall very satisfied with the quality and delivery.</p>
                <div class="testi-author">
                    <div class="testi-avatar">RYK</div>
                    <div>
                        <div class="testi-name">CEO</div>
                        <div class="testi-role">RYK Sanitary and Tiles Store</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">As the owner of Mehak's Nail Studio, I am extremely satisfied with the website.
                    It perfectly represents my brand and showcases services in a very elegant way. Since launch, we have
                    received more WhatsApp inquiries and better customer engagement.</p>
                <div class="testi-author">
                    <div class="testi-avatar">MS</div>
                    <div>
                        <div class="testi-name">Mehak Shafi</div>
                        <div class="testi-role">Nail Artist, Mehak Nail Studio</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">I am very satisfied with the website developed for my electrical services. It
                    clearly presents my services and pricing in a professional way. Customers can easily contact me and
                    the inquiries have increased significantly.</p>
                <div class="testi-author">
                    <div class="testi-avatar">SK</div>
                    <div>
                        <div class="testi-name">Shevak Kumar</div>
                        <div class="testi-role">Electrician</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">We are extremely impressed with the website developed for Kingsmen Royal Salon.
                    The design reflects our premium branding and makes it easy for clients to explore services and
                    pricing. It has improved our online presence and trust.</p>
                <div class="testi-author">
                    <div class="testi-avatar">HS</div>
                    <div>
                        <div class="testi-name">Kingsmen Royal Salon</div>
                        <div class="testi-role">Hair Styling & Grooming</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">We are highly satisfied with the real estate web application. It is fast,
                    user-friendly, and well-structured. Property listings and inquiry flow work smoothly and it has
                    improved our lead generation significantly.</p>
                <div class="testi-author">
                    <div class="testi-avatar">RE</div>
                    <div>
                        <div class="testi-name">Real Estate Company</div>
                        <div class="testi-role">Management Agency</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">He demonstrated strong full-stack development skills and delivered high-quality
                    work consistently. His ability to understand requirements and build scalable solutions made him a
                    valuable team member.</p>
                <div class="testi-author">
                    <div class="testi-avatar">DS</div>
                    <div>
                        <div class="testi-name">Devicon Software House</div>
                        <div class="testi-role">Software Company</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">We worked with him at Webpenter Inc and found him very professional and
                    technically strong. He delivered multiple web applications on time with clean and maintainable code.</p>
                <div class="testi-author">
                    <div class="testi-avatar">WP</div>
                    <div>
                        <div class="testi-name">Webpenter Inc</div>
                        <div class="testi-role">IT Solutions Company</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-quote">"</div>
                <p class="testi-text">A dedicated developer who contributed effectively at Deixtra Pvt Limited. His
                    technical expertise and professionalism were impressive, and he delivered reliable web solutions.</p>
                <div class="testi-author">
                    <div class="testi-avatar">DL</div>
                    <div>
                        <div class="testi-name">Deixtra Pvt Limited</div>
                        <div class="testi-role">Software Company</div>
                    </div>
                </div>
            </div>

        </div><!-- /.ts-track -->
    </div><!-- /.ts-viewport -->

    <!-- PROGRESS BAR -->
    <div class="ts-progress">
        <div class="ts-bar" id="ts-bar"></div>
    </div>

    <!-- CONTROLS -->
    <div class="ts-controls">
        <button class="ts-btn" id="ts-prev" aria-label="Previous">←</button>
        <div class="ts-dots" id="ts-dots"></div>
        <button class="ts-btn" id="ts-next" aria-label="Next">→</button>
    </div>
</section>

    <!-- CTA BANNER -->
    <div class="cta-banner">
        <div class="cta-content">
            <h2>Have a project<br><span>in mind?</span></h2>
            <p>Let's build something great together. Available for freelance projects and full-time opportunities.</p>
        </div>
        <div class="cta-actions">
            <a href="/contact" class="btn btn-white">Get In Touch <svg width="15" height="15" fill="none"
                    stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10" />
                </svg></a>

        </div>
    </div>


@endsection
