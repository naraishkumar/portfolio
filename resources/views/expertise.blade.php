@extends('layout.app')

@section('title', 'Expertise - Naraish Kumar')

@section('page', 'expertise')

@section('content')

    <div class="page-hero">
        <div class="page-hero-dots"></div>
        <div class="page-hero-content">
            <div class="breadcrumb"><a href="index.html">Home</a> › <span>Expertise</span></div>
            <h1 class="page-title">My Expertise</h1>
            <p class="page-subtitle">A deep dive into my skills, tools, and how I approach solving technical problems.
            </p>
        </div>
    </div>

    <!-- SKILLS FULL -->
    <section class="expertise-section">
        <div class="expertise-intro">
            <div class="section-badge anim"><span class="dot"></span>Professional Skills</div>
            <h2 class="section-heading anim">What I <span class="blue">Bring</span> to the Table</h2>
            <p class="section-sub anim">Three core competency areas that define my professional identity and the value I
                deliver.</p>
        </div>
        <div class="skills-big-grid">
            <div class="skill-big-card anim">
                <div class="sbig-num">01 / 06</div>
                <div class="sbig-icon">🗂️</div>
                <div class="sbig-title">Project Management</div>
                <p class="sbig-desc">I help organizations manage complex IT projects from inception to delivery. With
                    hands-on experience in Agile environments, I coordinate teams, define roadmaps, track progress, and
                    ensure every milestone is met — without compromising quality.</p>
                <div class="sbig-tools">
                    <span class="tag tag-blue">Agile</span><span class="tag tag-blue">Scrum</span><span
                        class="tag">Trello</span><span class="tag">Jira</span><span class="tag">Notion</span>
                </div>
            </div>
            <div class="skill-big-card anim">
                <div class="sbig-num">02 / 06</div>
                <div class="sbig-icon">🌐</div>
                <div class="sbig-title">Web Application Development</div>
                <p class="sbig-desc">I specialize in full-stack web development using the Laravel ecosystem on the
                    backend and Vue.js on the frontend. From REST API design to building reactive UIs, I create web
                    solutions that are scalable, maintainable, and user-friendly.</p>
                <div class="sbig-tools">
                    <span class="tag tag-blue">Laravel</span><span class="tag tag-blue">Vue.js</span><span
                        class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">REST API</span><span
                        class="tag">Git</span>
                </div>
            </div>
            <div class="skill-big-card anim">
                <div class="sbig-num">03 / 06</div>

                <div class="sbig-icon">🔗</div>

                <div class="sbig-title">API Development</div>

                <p class="sbig-desc">
                    Developing secure and scalable RESTful APIs with Laravel for seamless system
                    integration and high-performance applications.
                    Optimizing data flow, authentication, and backend communication to ensure reliable and efficient
                    API-driven systems.
                </p>

                <div class="sbig-tools">
                    <span class="tag tag-blue">Laravel</span>
                    <span class="tag tag-blue">REST API</span>
                    <span class="tag">JWT Auth</span>
                    <span class="tag">Sanctum</span>
                    <span class="tag">Postman</span>
                </div>
            </div>
            <div class="skill-big-card anim">
                <div class="sbig-num">04 / 06</div>
                <div class="sbig-icon">🕷️</div>
                <div class="sbig-title">Web Scraping</div>
                <p class="sbig-desc">I build automated web scrapers that extract, clean, and structure data from
                    websites at scale. These scrapers feed business intelligence dashboards, data pipelines, lead
                    generation tools, and analytics platforms — making data work for your business.</p>
                <div class="sbig-tools">
                    <span class="tag tag-blue">PHP</span><span class="tag tag-blue">Guzzle</span><span
                        class="tag">Puppeteer</span><span class="tag">Cheerio</span><span class="tag">cURL</span>
                </div>
            </div>
            <div class="skill-big-card anim">
                <div class="sbig-num">05 / 06</div>

                <div class="sbig-icon">🎨</div>

                <div class="sbig-title">Web Designing</div>

                <p class="sbig-desc">
                    Designing modern, responsive, and visually engaging user interfaces focused on
                    usability, performance, and seamless user experience.
                    Creating clean layouts, interactive components, and scalable frontend designs
                    tailored for modern web applications.
                </p>

                <div class="sbig-tools">
                    <span class="tag tag-blue">UI/UX</span>
                    <span class="tag tag-blue">Responsive Design</span>
                    <span class="tag">Tailwind CSS</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">Figma</span>
                    <span class="tag">CSS3</span>
                </div>
            </div>
            <div class="skill-big-card anim">
                <div class="sbig-num">06 / 06</div>

                <div class="sbig-icon">🔄</div>

                <div class="sbig-title">Version Control</div>

                <p class="sbig-desc">
                    Managing code versions and collaboration workflows using Git to ensure clean, trackable, and
                    efficient development processes.
                    Handling branching strategies, merges, and team collaboration for scalable and maintainable
                    codebases.
                </p>

                <div class="sbig-tools">
                    <span class="tag tag-blue">Git</span>
                    <span class="tag tag-blue">GitHub</span>
                    <span class="tag">GitLab</span>
                    <span class="tag">Branching</span>
                    <span class="tag">Merge Requests</span>
                </div>
            </div>
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
                    <div class="exp-role">Laravel & Vue.js Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>

                    <p class="exp-desc">
                        Working on full-stack web applications using Laravel and Vue.js, focusing on scalable architecture,
                        RESTful APIs, and dynamic user interfaces with clean and maintainable code.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">Laravel</span>
                        <span class="tag tag-blue">Vue.js</span>
                        <span class="tag">REST API</span>
                        <span class="tag">MySQL</span>
                    </div>
                </div>
                <div class="exp-num">01</div>
            </div>

            <div class="exp-card anim">
                <div>
                    <div class="exp-period">June 2025 — Sep 2025</div>
                    <div class="exp-role">Custom Software Developer</div>
                    <div class="exp-company">Deixtra Pvt Limited  (Remote)</div>

                    <p class="exp-desc">
                        Developed custom business software solutions using Laravel and Blade, focusing on scalable backend
                        systems, admin dashboards, database management, and performance-optimized web applications tailored
                        to client requirements.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">Laravel</span>
                        <span class="tag tag-blue">Blade</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Admin Panels</span>
                        <span class="tag">Custom Software</span>
                    </div>
                </div>
                <div class="exp-num">02</div>
            </div>

            <div class="exp-card anim">
                <div>
                    <div class="exp-period">Jan 2025 — Apr 2025</div>
                    <div class="exp-role">API Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>

                    <p class="exp-desc">
                        Developed and maintained RESTful APIs using PHP and Laravel, ensuring secure authentication,
                        optimized data flow, and seamless integration with frontend applications.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">REST APIs</span>
                        <span class="tag tag-blue">PHP</span>
                        <span class="tag">Postman</span>
                        <span class="tag">JSON</span>
                    </div>
                </div>
                <div class="exp-num">03</div>
            </div>

            <div class="exp-card anim">
                <div>
                    <div class="exp-period">Oct 2024 — Dec 2024</div>
                    <div class="exp-role">Laravel Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>

                    <p class="exp-desc">
                        Built backend systems and dynamic web applications using Laravel, focusing on MVC architecture,
                        database design, and clean Blade templating.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">Laravel</span>
                        <span class="tag">Blade</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Git</span>
                    </div>
                </div>
                <div class="exp-num">04</div>
            </div>

            <div class="exp-card anim">
                <div>
                    <div class="exp-period">Feb 2024 — Sep 2024</div>
                    <div class="exp-role">PHP Developer</div>
                    <div class="exp-company">Webpenter Inc.</div>

                    <p class="exp-desc">
                        Developed server-side logic and database-driven applications using PHP and Laravel, improving system
                        performance and maintaining legacy modules.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">PHP</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Git</span>
                    </div>
                </div>
                <div class="exp-num">05</div>
            </div>

            <div class="exp-card anim">
                <div>
                    <div class="exp-period">April 2023 — Dec 2023</div>
                    <div class="exp-role">Full Stack Developer</div>
                    <div class="exp-company">Devicon Software House</div>

                    <p class="exp-desc">
                        Worked on full-stack web applications, handling both frontend and backend development using Laravel,
                        Blade, and MySQL with version control using Git.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">Laravel</span>
                        <span class="tag">Blade</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Git</span>
                    </div>
                </div>
                <div class="exp-num">06</div>
            </div>

            <div class="exp-card anim">
                <div>
                    <div class="exp-period">Dec 2022 — March 2023</div>
                    <div class="exp-role">Frontend Developer</div>
                    <div class="exp-company">Devicon Software House</div>

                    <p class="exp-desc">
                        Created responsive and interactive frontend interfaces using HTML, CSS, and Blade templates,
                        ensuring better UI/UX and cross-device compatibility.
                    </p>

                    <div class="exp-tags">
                        <span class="tag tag-blue">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">Blade</span>
                        <span class="tag">UI/UX</span>
                    </div>
                </div>
                <div class="exp-num">07</div>
            </div>

        </div>

    </section>

    <!-- TOOLS -->
    <section class="tools-section">
        <div class="section-badge anim"><span class="dot"></span>Tools & Technologies</div>
        <h2 class="section-heading anim" style="margin-top:12px;">My <span class="blue">Tech Stack</span></h2>
        <div class="tools-grid">
            <div class="tool-chip anim"><span class="tc-icon">🔴</span>
                <div>
                    <div class="tc-name">Laravel</div>
                    <div class="tc-type">PHP Framework</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">💚</span>
                <div>
                    <div class="tc-name">Vue.js</div>
                    <div class="tc-type">JS Framework</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🐘</span>
                <div>
                    <div class="tc-name">PHP</div>
                    <div class="tc-type">Language</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🗄️</span>
                <div>
                    <div class="tc-name">MySQL</div>
                    <div class="tc-type">Database</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🌐</span>
                <div>
                    <div class="tc-name">REST API</div>
                    <div class="tc-type">Architecture</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">📬</span>
                <div>
                    <div class="tc-name">Postman</div>
                    <div class="tc-type">API Testing</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🐙</span>
                <div>
                    <div class="tc-name">Git</div>
                    <div class="tc-type">Version Control</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🐙</span>
                <div>
                    <div class="tc-name">GitHub</div>
                    <div class="tc-type">Code Hosting</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🌊</span>
                <div>
                    <div class="tc-name">Tailwind CSS</div>
                    <div class="tc-type">CSS Framework</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">☁️</span>
                <div>
                    <div class="tc-name">cPanel</div>
                    <div class="tc-type">Hosting</div>
                </div>
            </div>

            <div class="tool-chip anim"><span class="tc-icon">📝</span>
                <div>
                    <div class="tc-name">VS Code</div>
                    <div class="tc-type">Editor</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">⏱️</span>
                <div>
                    <div class="tc-name">Clockify</div>
                    <div class="tc-type">Time Tracking</div>
                </div>
            </div>
            <div class="tool-chip anim"><span class="tc-icon">🔔</span>
                <div>
                    <div class="tc-name">Slack</div>
                    <div class="tc-type">Communication</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="process-section">
        <div class="section-badge anim"><span class="dot"></span>How I Work</div>
        <h2 class="section-heading anim" style="margin-top:12px;">My <span class="blue">Process</span></h2>
        <div class="process-steps">
            <div class="process-step anim">
                <div class="ps-num">01</div>
                <div class="ps-title">Discover</div>
                <p class="ps-desc">Understanding your requirements, goals, and constraints before writing a single line
                    of code.</p>
            </div>
            <div class="process-step anim">
                <div class="ps-num">02</div>
                <div class="ps-title">Plan</div>
                <p class="ps-desc">Defining architecture, picking the right tech stack, and mapping out the development
                    roadmap.</p>
            </div>
            <div class="process-step anim">
                <div class="ps-num">03</div>
                <div class="ps-title">Build</div>
                <p class="ps-desc">Writing clean, tested, production-ready code with regular check-ins and transparent
                    progress.</p>
            </div>
            <div class="process-step anim">
                <div class="ps-num">04</div>
                <div class="ps-title">Deliver</div>
                <p class="ps-desc">Deploying, documenting, and supporting the product — ensuring a smooth handoff and
                    launch.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="cta-banner">
        <div class="cta-content">
            <h2>Ready to <span>start</span>?</h2>
            <p>Let's discuss your project and figure out the best approach together.</p>
        </div>
        <div class="cta-actions">
            <a href="contact.html" class="btn btn-white">Get In Touch <svg width="15" height="15" fill="none"
                    stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M7 17L17 7M17 7H7M17 7v10" />
                </svg></a>
        </div>
    </div>
@endsection
