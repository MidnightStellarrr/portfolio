<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BuildByHannah — Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome for subtle icons (optional but adds to the tag icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    *, *::before, *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --white: #ffffff;
      --black: #0a0a0a;
      --gray: #a0a0a0;
      --nav-height: 64px;
      --accent: #f5d742;
      --card-bg: rgba(20, 20, 22, 0.7);
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      overflow-x: hidden;
    }

    /* ── NAV (no blur as requested earlier, but kept clean) ── */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: var(--nav-height);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 48px;
      z-index: 100;
      background: rgba(10, 10, 10, 0.82);
      backdrop-filter: blur(2px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .nav-logo {
      font-family: 'Sora', sans-serif;
      font-weight: 700;
      font-size: 1rem;
      letter-spacing: -0.01em;
      color: var(--white);
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .nav-logo:hover {
      opacity: 0.8;
    }

    .nav-links {
      display: flex;
      gap: 36px;
      list-style: none;
    }

    .nav-links a {
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      font-weight: 400;
      color: var(--white);
      text-decoration: none;
      opacity: 0.85;
      transition: opacity 0.2s;
      letter-spacing: 0.01em;
    }

    .nav-links a:hover {
      opacity: 1;
    }

    /* ── HERO SECTION (unchanged but polished) ── */
    .hero {
      position: relative;
      width: 100%;
      height: 100vh;
      min-height: 600px;
      display: flex;
      align-items: center;
      padding: 0 48px 80px;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      background-image: url('img/hero.jpg');
      background-size: cover;
      background-position: center 30%;
      z-index: 0;
      filter: brightness(0.9);
    }

    .hero-bg::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(
        105deg,
        rgba(0, 0, 0, 0.7) 0%,
        rgba(0, 0, 0, 0.35) 50%,
        rgba(0, 0, 0, 0.1) 100%
      );
      pointer-events: none;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      animation: fadeUp 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(28px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero-title {
      font-family: 'Sora', sans-serif;
      font-size: clamp(2.2rem, 4.5vw, 3.6rem);
      font-weight: 600;
      line-height: 1.2;
      letter-spacing: -0.03em;
      color: var(--white);
      margin-bottom: 20px;
      white-space: nowrap;
      text-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }

    @media (max-width: 600px) {
      .hero-title {
        font-size: 1.6rem;
        white-space: normal;
      }
    }

    .hero-sub {
      font-family: 'DM Sans', sans-serif;
      font-size: clamp(0.9rem, 1.3vw, 1rem);
      font-weight: 350;
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.85);
      max-width: 420px;
      margin-bottom: 36px;
      backdrop-filter: blur(2px);
    }

    .hero-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 46px;
      padding: 0 28px;
      border-radius: 999px;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 0.01em;
      cursor: pointer;
      text-decoration: none;
      transition: transform 0.2s ease, opacity 0.2s;
      white-space: nowrap;
    }

    .btn:hover {
      transform: translateY(-2px);
      opacity: 0.9;
    }

    .btn-light {
      background: var(--white);
      color: var(--black);
      border: none;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .btn-outline {
      background: transparent;
      color: var(--white);
      border: 1.5px solid rgba(255, 255, 255, 0.75);
    }

    .btn-outline:hover {
      background: rgba(255, 255, 255, 0.1);
      border-color: var(--white);
    }

/* ── ABOUT SECTION (image-matched layout) ── */
.about-section {
  padding: 80px 48px;
  background: #000;
}

.about-inner {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  gap: 0;
}

.left-col { padding-right: 32px; }

.about-big-text {
  font-family: 'Sora', sans-serif;
  font-weight: 800;
  font-size: clamp(5rem, 10vw, 9rem);
  letter-spacing: -0.04em;
  line-height: 0.88;
  color: #fff;
}

.me-line {
  display: flex;
  align-items: center;
  gap: 24px;
}

.profile-circle {
  width: clamp(90px, 12vw, 150px);
  height: clamp(90px, 12vw, 150px);
  border-radius: 50%;
  overflow: hidden;
  border: 2px solid rgba(255,255,255,0.3);
  flex-shrink: 0;
}

.profile-circle img {
  width: 100%; height: 100%;
  object-fit: cover;
  filter: grayscale(1) contrast(1.1);
}

.pills-stack { display: flex; flex-direction: column; gap: 10px; margin-top: 20px; padding-left: 8px; }
.pill-row { display: flex; gap: 10px; flex-wrap: wrap; }

.pill {
  border: 1.5px solid rgba(255,255,255,0.75);
  padding: 7px 20px;
  border-radius: 100px;
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #fff;
  white-space: nowrap;
  transition: background 0.2s;
}
.pill:hover { background: rgba(255,255,255,0.1); }

.divider-line {
  width: 1px;
  height: 280px;
  background: rgba(255,255,255,0.15);
  margin: 0 8px;
}

.right-col { padding-left: 48px; display: flex; flex-direction: column; gap: 24px; }

.role-row {
  display: flex;
  gap: 40px;
  font-size: 0.85rem;
  color: rgba(255,255,255,0.65);
}

.hello-title {
  font-family: 'Sora', sans-serif;
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 800;
  letter-spacing: -0.03em;
  color: #fff;
}

.bio-text { font-size: 0.95rem; line-height: 1.75; color: rgba(255,255,255,0.8); max-width: 420px; }
.location-text { font-size: 0.9rem; color: rgba(255,255,255,0.6); }

@media (max-width: 720px) {
  .about-inner { grid-template-columns: 1fr; }
  .divider-line { display: none; }
  .right-col { padding-left: 0; }
  .left-col { padding-right: 0; }
}

    /* divider */
    .section-divider {
      height: 2px;
      width: 80%;
      margin: 0 auto;
    }

    /* ── PROJECTS SECTION ── */
.projects-section {
  padding: 90px 48px;
  background: #000;
}

.projects-title {
  font-family: 'Sora', sans-serif;
  font-weight: 800;
  font-size: clamp(2rem, 5vw, 3.2rem);
  letter-spacing: -0.02em;
  color: #fff;
  text-align: center;
  margin-bottom: 56px;
}

.cards-grid {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.project-card {
  background: #fff;
  border-radius: 28px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

/* For all project images */
.card-screenshot {
  width: 100%;
  aspect-ratio: 16/9;
  object-fit: cover;
  display: block;
  filter: grayscale(100%);
  transition: filter 0.3s ease;
}

.project-card:hover .card-screenshot {
  filter: grayscale(0%);
}

/* Bookly specific - stays blurred */
/* Bookly specific - stays blurred on hover, but shows color */
.project-card.bookly-card .card-screenshot {
  filter: grayscale(100%) blur(4px);
}

.project-card.bookly-card:hover .card-screenshot {
  filter: grayscale(0%) blur(4px);
}

.card-body {
  padding: 24px 24px 28px;
  display: flex;
  flex-direction: column;
  flex: 1;
  gap: 4px;
}

.card-title {
  font-family: 'Sora', sans-serif;
  font-weight: 700;
  font-size: 1.35rem;
  color: #0a0a0a;
  letter-spacing: -0.02em;
}

.card-subtitle {
  font-size: 0.78rem;
  color: #777;
  font-weight: 400;
  margin-bottom: 2px;
}

.card-dev-badge {
  font-size: 0.75rem;
  font-weight: 600;
  color: #1a73e8;
}

.card-desc {
  font-size: 0.82rem;
  line-height: 1.65;
  color: #444;
  margin-top: 8px;
  flex: 1;
}

.card-actions {
  display: flex;
  gap: 10px;
  margin-top: 20px;
  flex-wrap: wrap;
}

.btn-card {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 38px;
  padding: 0 22px;
  border-radius: 100px;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.8rem;
  font-weight: 500;
  cursor: pointer;
  text-decoration: none;
  transition: transform 0.15s, opacity 0.15s;
  border: 1.5px solid #0a0a0a;
}

.btn-card:hover { transform: translateY(-1px); opacity: 0.85; }
.btn-card-ghost { background: transparent; color: #0a0a0a; }
.btn-card-filled { background: #0a0a0a; color: #fff; }

@media (max-width: 820px) {
  .cards-grid { grid-template-columns: 1fr; }
  .projects-section { padding: 70px 28px; }
}
/* ── CONTACT SECTION ── */
.contact-section {
  background: #000;
  padding: 6px 0;
}

.contact-inner {
  position: relative;
  overflow: hidden;
}

.contact-bg {
  position: absolute;
  inset: 0;
  background-image: url('img/contact_bg.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  z-index: 0;
}

.contact-bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1;
}

.contact-layout {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 480px;
  padding: 52px 56px 56px;
  gap: 40px;
  align-items: end;
}

.contact-left {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

.contact-info { display: flex; flex-direction: column; gap: 4px; }
.contact-info a, .contact-info span {
  font-size: 0.88rem; color: #111;
  text-decoration: none; font-weight: 400;
}
.contact-info a:hover { text-decoration: underline; }

.social-icons {
  display: flex; gap: 16px;
  margin-top: 20px; align-items: center;
}
.social-icons a { color: #111; font-size: 1.1rem; transition: opacity 0.2s; text-decoration: none; }
.social-icons a:hover { opacity: 0.6; }

.contact-heading {
  font-family: 'Sora', sans-serif;
  font-weight: 800;
  font-size: clamp(3.5rem, 8vw, 7rem);
  line-height: 0.92;
  letter-spacing: -0.04em;
  color: #0a0a0a;
  margin-top: auto;
}

.contact-right {
  display: flex; flex-direction: column;
  gap: 28px; padding-top: 8px;
}

.name-row { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }

.field { display: flex; flex-direction: column; gap: 6px; }

.field label { font-size: 0.82rem; color: #222; font-weight: 400; }

.field input, .field textarea {
  background: transparent;
  border: none;
  border-bottom: 1.5px solid #111;
  outline: none;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.9rem;
  color: #111;
  padding: 6px 0;
  width: 100%;
  resize: none;
  transition: border-color 0.2s;
}
.field input:focus, .field textarea:focus { border-bottom-color: #000; }
.field textarea { min-height: 48px; }

.submit-btn {
  align-self: flex-start;
  background: #0a0a0a; color: #fff;
  border: none; border-radius: 100px;
  padding: 12px 32px;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.88rem; font-weight: 500;
  cursor: pointer; letter-spacing: 0.02em;
  transition: transform 0.15s, opacity 0.15s;
}
.submit-btn:hover { transform: translateY(-1px); opacity: 0.85; }

@media (max-width: 700px) {
  .contact-layout { grid-template-columns: 1fr; padding: 36px 28px; }
  .contact-heading { font-size: 3.5rem; }
  .name-row { grid-template-columns: 1fr; }
}
/* Black spacer between contact and footer */
.spacer {
  background: #000;
  height: 60px;
  width: 100%;
}

@media (max-width: 768px) {
  .spacer {
    height: 40px;
  }
}
/* ── FOOTER SECTION ── */
.footer {
  position: relative;
  width: 100%;
  min-height: 350px;
  padding: 60px 48px 40px;
  overflow: hidden;
  color: white;
}

.footer-bg {
  position: absolute;
  inset: 0;
  background-image: url('img/hero.jpg');
  background-size: cover;
  background-position: center 30%;
  z-index: 0;
  filter: brightness(0.7);
}

.footer-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  z-index: 1;
}

.footer-content {
  position: relative;
  z-index: 2;
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
}

.footer-left {
  flex: 1;
}

.footer-logo {
  font-family: 'Sora', sans-serif;
  font-size: 1.8rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  margin-bottom: 20px;
  color: white;
}

.footer-links {
  display: flex;
  gap: 32px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}

.footer-links a {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  font-size: 0.9rem;
  transition: opacity 0.2s;
}

.footer-links a:hover {
  opacity: 0.7;
}

.copyright {
  color: rgba(255, 255, 255, 0.6);
  font-size: 0.8rem;
}

.footer-right {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 30px;
}

.footer-contact {
  text-align: right;
}

.footer-contact p {
  margin-bottom: 12px;
  font-size: 0.95rem;
  color: rgba(255, 255, 255, 0.85);
}

.footer-contact i {
  margin-right: 10px;
  width: 20px;
}

.footer-thanks h3 {
  font-family: 'Sora', sans-serif;
  font-size: 2.5rem;
  font-weight: 800;
  letter-spacing: -0.03em;
  color: white;
  text-align: right;
}

@media (max-width: 768px) {
  .footer {
    padding: 40px 28px 30px;
    min-height: auto;
  }
  
  .footer-content {
    flex-direction: column;
  }
  
  .footer-right {
    align-items: flex-start;
  }
  
  .footer-contact {
    text-align: left;
  }
  
  .footer-thanks h3 {
    text-align: left;
    font-size: 2rem;
  }
  
  .footer-links {
    gap: 20px;
  }
}
  </style>
</head>
<body>

  <!-- NAVIGATION -->
  <nav>
    <a href="#" class="nav-logo">BuildByHannah</a>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Resume</a></li>
      <li><a href="#">Blog</a></li>
    </ul>
  </nav>

  <!-- HERO SECTION (existing) -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <h1 class="hero-title">
        UI/UX + Website development.<br>
        One person. One workflow
      </h1>
      <p class="hero-sub">
        I design experiences users love and write the<br>
        code to make them real.
      </p>
      <div class="hero-actions">
        <a href="#" class="btn btn-light">Projects</a>
        <a href="#" class="btn btn-outline">Contact me</a>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION: based on the image.png content (ABOUT, Web Developer, UI/UX, Programmer, ME, HELLO, skills, location, etc) -->
<section class="about-section" id="about">
  <div class="about-inner">
    <div class="left-col">
      <div class="about-big-text">
        <div>ABOUT</div>
        <div class="me-line">
          <div class="profile-circle">
            <img src="img/profile.jpg" alt="Hannah">
          </div>
          <span>ME</span>
        </div>
      </div>
      <div class="pills-stack">
        <div class="pill-row">
          <span class="pill">Javascript</span>
          <span class="pill">Python</span>
        </div>
        <div class="pill-row">
          <span class="pill">Java</span>
          <span class="pill">PHP</span>
          <span class="pill">HTML / CSS</span>
        </div>
      </div>
    </div>

    <div class="divider-line"></div>

    <div class="right-col">
      <div class="role-row">
        <span>Web Developer</span>
        <span>UI/UX</span>
        <span>Programmer</span>
      </div>
      <div class="hello-title">HELLO.</div>
      <p class="bio-text">
        a UI/UX designer, programmer, and website developer rolled into one.
        I research how users actually behave, design interfaces that feel natural,
        then write clean code to make them real.
      </p>
      <p class="location-text">Based in the Philippines. Open to remote work and freelance.</p>
    </div>
  </div>
</section>

  <!-- optional thin divider (design touch) -->
  <div class="section-divider"></div>

  <section class="projects-section" id="projects">
  <h2 class="projects-title">MY PROJECTS</h2>
  <div class="cards-grid">

    <!-- Pharmacare -->
    <div class="project-card">
      <img src="img/pharmacare_ss.jpg" alt="Pharmacare screenshot" class="card-screenshot">
      <div class="card-body">
        <div class="card-title">Pharmacare</div>
        <div class="card-subtitle">E-commerce Website</div>
        <p class="card-desc">Pharmacare Hub is a healthcare platform that connects patients, caregivers, and pharmacies in real-time. It helps users search for medicine availability, set medication reminders, subscribe to stock alerts, and manage prescriptions — all in one place. For pharmacy staff, it provides inventory management tools, expiry tracking, and sales analytics.</p>
        <div class="card-actions">
          <a href="#" class="btn-card btn-card-ghost">Github</a>
          <a href="#" class="btn-card btn-card-filled">Live link</a>
        </div>
      </div>
    </div>

    <!-- Arc -->
    <div class="project-card">
      <img src="img/arc_ss.jpg" alt="Arc screenshot" class="card-screenshot">
      <div class="card-body">
        <div class="card-title">Arc.</div>
        <div class="card-subtitle">Event Scheduler</div>
        <p class="card-desc">ARC Event Scheduler is a desktop-based calendar and event management application that uses an AVL Tree data structure to organize and manage user schedules efficiently. The system solves disorganized event tracking, double-booking, and difficulty viewing upcoming commitments.</p>
        <div class="card-actions">
          <a href="#" class="btn-card btn-card-ghost">Github</a>
          <a href="#" class="btn-card btn-card-filled">Visit GUI</a>
        </div>
      </div>
    </div>

    <!-- Bookly -->
    <div class="project-card bookly-card">
      <img src="img/bookly_ss.jpg" alt="Bookly screenshot" class="card-screenshot">
      <div class="card-body">
        <div class="card-title">Bookly</div>
        <div class="card-subtitle">Personal Library Management</div>
        <div class="card-dev-badge">Under Development</div>
        <p class="card-desc">Bookly helps you organize, track, and rediscover the books you love. Whether you own 10 books or 1,000, Bookly keeps everything in one place — from what you've read, what you're currently reading, to what you want to read next. No more forgetting borrowed books or buying duplicates. Just pure book joy.</p>
        <div class="card-actions">
          <a href="#" class="btn-card btn-card-ghost">Github</a>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="contact-section" id="contact">
  <div class="contact-inner">
    <div class="contact-bg"></div>
    <div class="contact-layout" style="color: white;">

      <div class="contact-left">
        <div>
          <div class="contact-info">
            <span style="color: white;">09622365514</span>
            <a href="mailto:hannahgranada458@gmail.com" style="color: white;">hannahgranada458@gmail.com</a>
          </div>
          <div class="social-icons">
            <a href="#" style="color: white;"><i class="fab fa-github"></i></a>
            <a href="#" style="color: white;"><i class="fab fa-facebook-f"></i></a>
            <a href="#" style="color: white;"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="contact-heading" style="color: black;">LET'S GET<br>IN TOUCH</div>
      </div>

      <div class="contact-right">
        <div class="name-row">
          <div class="field">
            <label style="color: white;">First Name</label>
            <input type="text" style="color: white; border-bottom-color: white;">
          </div>
          <div class="field">
            <label style="color: white;">Last Name</label>
            <input type="text" style="color: white; border-bottom-color: white;">
          </div>
        </div>
        <div class="field">
          <label style="color: white;">Email</label>
          <input type="email" style="color: white; border-bottom-color: white;">
        </div>
        <div class="field">
          <label style="color: white;">Message</label>
          <textarea rows="3" style="color: white; border-bottom-color: white;"></textarea>
        </div>
        <button class="submit-btn">Submit</button>
      </div>

    </div>
  </div>
</section>

<!-- Black spacer -->
<div class="spacer"></div>

<!-- FOOTER SECTION -->
<footer class="footer">
  <div class="footer-bg"></div>
  <div class="footer-overlay"></div>
  <div class="footer-content">
    <div class="footer-left">
      <h2 class="footer-logo">BuildByHannah</h2>
      <div class="footer-links">
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Projects</a>
        <a href="#">Blog</a>
      </div>
      <p class="copyright">© 2026 BuildByHannah. All right reserved.</p>
    </div>
    <div class="footer-right">
      <div class="footer-contact">
        <p><i class="fas fa-phone"></i> 09622365514</p>
        <p><i class="fas fa-envelope"></i> hannahgranada458@gmail.com</p>
      </div>
      <div class="footer-thanks">
        <h3>THANK YOU</h3>
      </div>
    </div>
  </div>
</footer>

  <!-- Simple script for smooth interaction and consistent nav link behaviour -->
  <script>
    (function() {
      // Smooth scroll for "About" link
      const aboutLink = document.querySelector('.nav-links a[href="#about"]');
      if (aboutLink) {
        aboutLink.addEventListener('click', (e) => {
          e.preventDefault();
          const aboutSection = document.getElementById('about');
          if (aboutSection) {
            aboutSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      }
      
      // Other nav links can have subtle demo feedback (consistent)
      const navItems = document.querySelectorAll('.nav-links a:not([href="#about"])');
      navItems.forEach(link => {
        link.addEventListener('click', (e) => {
          const text = link.innerText.trim();
          if (text === 'Home') {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
          } else if (text === 'Contact' || text === 'Resume' || text === 'Blog') {
            e.preventDefault();
            showFloatingMessage(`📬 ${text} section — coming soon. Let’s connect!`);
          }
        });
      });

      // Buttons in hero section 
      const projectsBtn = document.querySelector('.hero-actions .btn-light');
      const contactBtnHero = document.querySelector('.hero-actions .btn-outline');
      
      if (projectsBtn) {
        projectsBtn.addEventListener('click', (e) => {
          e.preventDefault();
          showFloatingMessage('✨ Portfolio projects — launching new case studies soon.');
        });
      }
      
      if (contactBtnHero) {
        contactBtnHero.addEventListener('click', (e) => {
          e.preventDefault();
          showFloatingMessage('📧 hannah@buildbyhannah.com — Let’s create something great.');
        });
      }

      function showFloatingMessage(msg) {
        const existing = document.querySelector('.toast-notification');
        if(existing) existing.remove();
        
        const toast = document.createElement('div');
        toast.className = 'toast-notification';
        toast.innerText = msg;
        toast.style.position = 'fixed';
        toast.style.bottom = '28px';
        toast.style.left = '50%';
        toast.style.transform = 'translateX(-50%)';
        toast.style.backgroundColor = 'rgba(0,0,0,0.85)';
        toast.style.backdropFilter = 'blur(12px)';
        toast.style.color = '#f5d742';
        toast.style.padding = '10px 24px';
        toast.style.borderRadius = '40px';
        toast.style.fontSize = '0.85rem';
        toast.style.fontFamily = "'DM Sans', sans-serif";
        toast.style.fontWeight = '500';
        toast.style.zIndex = '2000';
        toast.style.border = '1px solid rgba(245,215,66,0.3)';
        toast.style.pointerEvents = 'none';
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.2s ease';
        document.body.appendChild(toast);
        setTimeout(() => toast.style.opacity = '1', 20);
        setTimeout(() => {
          toast.style.opacity = '0';
          setTimeout(() => toast.remove(), 300);
        }, 2200);
      }
    })();
  </script>
</body>
</html>