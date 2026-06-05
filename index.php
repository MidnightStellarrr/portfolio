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
      background: linear-gradient(90deg, transparent, rgba(245,215,66,0.3), transparent);
      width: 80%;
      margin: 0 auto;
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