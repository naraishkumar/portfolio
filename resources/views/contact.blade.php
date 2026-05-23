@extends('layout.app')

@section('title', 'Contact - Naraish Kumar')

@section('page', 'contact')

@section('content')

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-dots"></div>
    <div class="page-hero-content">
      <div class="breadcrumb"><a href="index.html">Home</a> › <span>Contact</span></div>
      <h1 class="page-title">Get In Touch</h1>
      <p class="page-subtitle">Have a project in mind or want to collaborate? I'd love to hear from you. Let's build
        something great together.</p>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <section class="contact-section">

    <!-- LEFT -->
    <div class="contact-left">
      <div class="section-badge anim"><span class="dot"></span>Contact Me</div>
      <h2 class="anim">Let's Start a<br><span>Conversation</span></h2>
      <p class="anim">Whether you have a project idea, a freelance opportunity, or just want to say hello — my inbox is
        always open. I typically respond within 24 hours.</p>

      <div class="info-cards">
        <a href="mailto:naraish@email.com" class="info-card anim">
          <div class="info-card-icon">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
            </svg>
          </div>
          <div>
            <div class="info-card-label">Email</div>
            <div class="info-card-value">naraishkumar55@gmail.com</div>
          </div>
        </a>
        <a href="tel:+923000000000" class="info-card anim">
          <div class="info-card-icon">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
            </svg>
          </div>
          <div>
            <div class="info-card-label">Phone</div>
            <div class="info-card-value">
              +92 306 0267456
            </div>
            <div class="info-card-sub">
              Mon - Sat | 10:00 AM - 7:00 PM
            </div>
          </div>
        </a>
        <div class="info-card anim" style="cursor:default;">
          <div class="info-card-icon">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
            </svg>
          </div>
          <div>
            <div class="info-card-label">Location</div>
            <div class="info-card-value">Rahim Yar Khan, Pakistan</div>
          </div>
        </div>
        <a href="#" class="info-card anim">
          <div class="info-card-icon">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
            </svg>
          </div>
          <div>
            <div class="info-card-label">LinkedIn</div>
            <div class="info-card-value">linkedin.com/in/naraishkumar01</div>
          </div>
        </a>
      </div>

      <div class="availability anim">
        <div class="avail-dot"></div>
        <div class="avail-text">Currently Available <span>— Open for freelance &amp; full-time work</span></div>
      </div>


    </div>

    <!-- RIGHT — FORM -->
    <div class="contact-form-wrap anim">
      <!-- Form -->
      <div id="contactForm">
        <div class="form-title">Send a Message</div>
        <p class="form-subtitle">Fill out the form below and I'll get back to you as soon as possible.</p>

        <!-- Service Selection -->
        <div style="margin-bottom:20px;">
          <label style="font-size:.82rem;font-weight:700;color:var(--navy);display:block;margin-bottom:10px;">What do
            you need? <span style="color:var(--blue)">*</span></label>
          <div class="service-grid">
            <div class="service-opt">
              <input type="radio" name="service" id="s1" value="Web App" checked />
              <label for="s1"><span class="so-icon">🌐</span> Web App</label>
            </div>
            <div class="service-opt">
              <input type="radio" name="service" id="s2" value="API Dev" />
              <label for="s2"><span class="so-icon">🔌</span> API Dev</label>
            </div>
            <div class="service-opt">
              <input type="radio" name="service" id="s3" value="Consultation" />
              <label for="s3"><span class="so-icon">💬</span> Consultation</label>
            </div>
            <div class="service-opt">
              <input type="radio" name="service" id="s4" value="Other" />
              <label for="s4"><span class="so-icon">✨</span> Other</label>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="fname">First Name <span>*</span></label>
            <input type="text" id="fname" class="form-control" placeholder="Your First Name" />
            <span class="error-msg" id="fnameErr">Please enter your first name.</span>
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="form-control" placeholder="Your Last Name" />
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email Address <span>*</span></label>
          <input type="email" id="email" class="form-control" placeholder="you@example.com" />
          <span class="error-msg" id="emailErr">Please enter a valid email.</span>
        </div>

        <div class="form-group">
          <label for="subject">Subject <span>*</span></label>
          <input type="text" id="subject" class="form-control" placeholder="Project Inquiry / Collaboration..." />
          <span class="error-msg" id="subjectErr">Please enter a subject.</span>
        </div>

        <div class="form-group">
          <label for="message">Message <span>*</span></label>
          <textarea id="message" class="form-control"
            placeholder="Tell me about your project, timeline, and budget..."></textarea>
          <span class="error-msg" id="messageErr">Please enter your message.</span>
        </div>

        <button class="submit-btn" id="submitBtn" onclick="handleSubmit()">
          <span class="btn-text">Send Message &nbsp;✈️</span>
          <div class="spinner"></div>
        </button>
      </div>

      <!-- Success State -->
      <div class="form-success" id="formSuccess">
        <div class="success-icon">✅</div>
        <h3>Message Sent!</h3>
        <p>Thanks for reaching out! I've received your message and will get back to you within 24 hours.</p>
        <a href="#" onclick="resetForm()" style="display:inline-block;margin-top:24px;" class="btn btn-blue">Send
          Another Message</a>
      </div>
    </div>

  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <div class="section-badge anim"><span class="dot"></span>FAQ</div>
    <h2 class="section-heading anim" style="margin-top:12px;">Frequently Asked <span class="blue">Questions</span></h2>
    <div class="faq-grid">

      <div class="faq-item anim">
        <div class="faq-question" onclick="toggleFaq(this)">
          <span class="faq-q-text">What technologies do you specialize in?</span>
          <div class="faq-icon"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"
              viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14" />
            </svg></div>
        </div>
        <div class="faq-answer">
          <div class="faq-answer-inner">I specialize in Laravel, Vue.js, PHP, REST API development, MySQL, and web
            scraping. I also have experience with Git, Tailwind CSS, and deploying on Linux/cPanel environments.</div>
        </div>
      </div>

      <div class="faq-item anim">
        <div class="faq-question" onclick="toggleFaq(this)">
          <span class="faq-q-text">Are you available for freelance projects?</span>
          <div class="faq-icon"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"
              viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14" />
            </svg></div>
        </div>
        <div class="faq-answer">
          <div class="faq-answer-inner">Yes! I'm currently available for freelance projects, short-term contracts, and
            full-time opportunities. Feel free to reach out and we can discuss your needs.</div>
        </div>
      </div>

      <div class="faq-item anim">
        <div class="faq-question" onclick="toggleFaq(this)">
          <span class="faq-q-text">How long does a typical project take?</span>
          <div class="faq-icon"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"
              viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14" />
            </svg></div>
        </div>
        <div class="faq-answer">
          <div class="faq-answer-inner">It depends on the scope and complexity. A simple Laravel app or API can take 1–3
            weeks. A full-stack web application with a Vue.js dashboard typically takes 4–8 weeks. I always provide a
            clear timeline upfront.</div>
        </div>
      </div>

      <div class="faq-item anim">
        <div class="faq-question" onclick="toggleFaq(this)">
          <span class="faq-q-text">Do you provide post-launch support?</span>
          <div class="faq-icon"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"
              viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14" />
            </svg></div>
        </div>
        <div class="faq-answer">
          <div class="faq-answer-inner">Absolutely. I offer post-launch support, bug fixes, and feature additions. All
            deliverables include thorough documentation so your team can maintain the codebase independently if needed.
          </div>
        </div>
      </div>

      <div class="faq-item anim">
        <div class="faq-question" onclick="toggleFaq(this)">
          <span class="faq-q-text">What's your preferred way to communicate?</span>
          <div class="faq-icon"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"
              viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14" />
            </svg></div>
        </div>
        <div class="faq-answer">
          <div class="faq-answer-inner">Email is best for detailed discussions. For quick updates I'm happy to use
            WhatsApp, Slack, or any tool you prefer. I keep communication clear and regular throughout the project.
          </div>
        </div>
      </div>

      <div class="faq-item anim">
        <div class="faq-question" onclick="toggleFaq(this)">
          <span class="faq-q-text">Do you work with international clients?</span>
          <div class="faq-icon"><svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"
              viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14" />
            </svg></div>
        </div>
        <div class="faq-answer">
          <div class="faq-answer-inner">Yes! I've worked with clients remotely and I'm comfortable working across time
            zones. I'm available for video calls and can adjust my schedule to overlap with your working hours.</div>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <div class="cta-banner">
    <div class="cta-content">
      <h2>Ready to <span>build together?</span></h2>
      <p>Don't wait — the best time to start your project is now. Let's make it happen.</p>
    </div>
    <div class="cta-actions">
      <a href="mailto:naraish@email.com" class="btn btn-white">Email Me Directly <svg width="15" height="15" fill="none"
          stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path d="M7 17L17 7M17 7H7M17 7v10" />
        </svg></a>
    </div>
  </div>

@endsection
