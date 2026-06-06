<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BuildByHannah — Blog</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --white: #ffffff;
      --black: #0a0a0a;
      --gray: #a0a0a0;
      --nav-height: 64px;
      --accent: #909090;
      --card-bg: rgba(20, 20, 22, 0.7);
      --border: rgba(255,255,255,0.12);
    }

    html { scroll-behavior: smooth; }

    body {
      background: var(--black);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      overflow-x: hidden;
    }

    /* ── NAV ── */
    nav {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: var(--nav-height);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 48px;
      z-index: 100;
      background: rgba(10, 10, 10, 0.82);
      backdrop-filter: blur(2px);
      border-bottom: 1px solid rgba(255,255,255,0.06);
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
    .nav-logo:hover { opacity: 0.8; }

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
    .nav-links a:hover { opacity: 1; }
    .nav-links a.active { opacity: 1; border-bottom: 1.5px solid var(--accent); padding-bottom: 2px; }

    /* ── BLOG HERO ── */
    .blog-hero {
      position: relative;
      min-height: 90vh;
      padding: 0 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
      animation: fadeUp 0.9s cubic-bezier(0.16,1,0.3,1) both;
    }
    .blog-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url('img/hero.jpg');
      background-size: cover;
      background-position: center 30%;
      filter: brightness(0.55);
      z-index: 0;
    }
    .blog-hero-content {
      position: relative;
      z-index: 2;
      max-width: 860px;
      margin: 0 auto;
      color: var(--white);
    }
    .blog-hero-title {
      font-family: 'Sora', sans-serif;
      font-weight: 800;
      font-size: clamp(3rem, 7vw, 5rem);
      letter-spacing: -0.04em;
      line-height: 0.92;
      color: var(--white);
      margin-bottom: 28px;
    }
    .blog-hero-sub {
      font-size: 1rem;
      line-height: 1.7;
      color: rgba(255,255,255,0.75);
      max-width: 640px;
      margin: 0 auto 32px;
    }
    .hero-cta {
      display: inline-flex;
      gap: 14px;
      flex-wrap: wrap;
      justify-content: center;
    }
    .hero-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 46px;
      padding: 0 28px;
      border-radius: 999px;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      text-decoration: none;
      transition: transform 0.2s ease, opacity 0.2s;
      white-space: nowrap;
      color: var(--white);
      border: 1.5px solid rgba(255,255,255,0.7);
      background: rgba(0,0,0,0.35);
    }
    .hero-btn:hover {
      transform: translateY(-2px);
      opacity: 0.9;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .blog-hero-eyebrow {
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 20px;
    }

    .blog-hero-title {
      font-family: 'Sora', sans-serif;
      font-weight: 800;
      font-size: clamp(3.5rem, 8vw, 7rem);
      letter-spacing: -0.04em;
      line-height: 0.92;
      color: var(--white);
      margin-bottom: 28px;
    }

    .blog-hero-sub {
      font-size: 1rem;
      line-height: 1.7;
      color: rgba(255,255,255,0.6);
      max-width: 560px;
    }

    .upcoming-card {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 24px;
      padding: 40px 40px 44px;
      max-width: 900px;
      margin: 0 auto;
      text-align: center;
    }
    .upcoming-card h2 {
      font-family: 'Sora', sans-serif;
      font-size: clamp(2rem, 4vw, 3rem);
      letter-spacing: -0.03em;
      margin-bottom: 18px;
      color: #fff;
    }
    .upcoming-card p {
      font-size: 1rem;
      line-height: 1.8;
      color: rgba(255,255,255,0.72);
      max-width: 680px;
      margin: 0 auto;
    }

    .filter-pill {
      border: 1.5px solid rgba(255,255,255,0.3);
      padding: 7px 20px;
      border-radius: 100px;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.7);
      cursor: pointer;
      transition: background 0.2s, border-color 0.2s, color 0.2s;
      background: transparent;
      white-space: nowrap;
    }
    .filter-pill:hover,
    .filter-pill.active {
      background: var(--white);
      border-color: var(--white);
      color: var(--black);
    }
    .filter-pill.active {
      background: var(--accent);
      border-color: var(--accent);
      color: var(--black);
    }

    /* ── FEATURED POST ── */
    .featured-section {
      padding: 0 48px 64px;
      max-width: 1100px;
      margin: 0 auto;
      animation: fadeUp 0.9s 0.2s cubic-bezier(0.16,1,0.3,1) both;
    }

    .featured-card {
      background: var(--white);
      border-radius: 28px;
      overflow: hidden;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      min-height: 380px;
      cursor: pointer;
      transition: transform 0.25s ease;
    }
    .featured-card:hover { transform: translateY(-4px); }

    .featured-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      filter: grayscale(100%);
      transition: filter 0.35s ease;
      min-height: 320px;
    }
    .featured-card:hover .featured-img { filter: grayscale(0%); }

    .featured-body {
      padding: 44px 44px 40px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background: #fff;
    }

    .featured-badge {
      display: inline-block;
      background: var(--accent);
      color: var(--black);
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 5px 14px;
      border-radius: 100px;
      align-self: flex-start;
      margin-bottom: 20px;
    }

    .featured-title {
      font-family: 'Sora', sans-serif;
      font-weight: 800;
      font-size: clamp(1.5rem, 2.5vw, 2.1rem);
      letter-spacing: -0.03em;
      color: var(--black);
      line-height: 1.15;
      margin-bottom: 16px;
    }

    .featured-excerpt {
      font-size: 0.88rem;
      line-height: 1.7;
      color: #555;
      flex: 1;
      margin-bottom: 28px;
    }

    .post-meta {
      display: flex;
      align-items: center;
      gap: 16px;
    }
    .post-meta-date {
      font-size: 0.78rem;
      color: #888;
      font-weight: 400;
    }
    .post-meta-read {
      font-size: 0.78rem;
      color: #888;
      font-weight: 400;
    }
    .post-meta-dot { width: 3px; height: 3px; border-radius: 50%; background: #ccc; }

    .read-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--black);
      text-decoration: none;
      letter-spacing: 0.01em;
      margin-top: 20px;
      transition: gap 0.2s;
    }
    .read-link:hover { gap: 12px; }
    .read-link i { font-size: 0.75rem; }

    /* ── POSTS GRID ── */
    .posts-section {
      padding: 40px 48px 90px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .posts-section-label {
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.4);
      margin-bottom: 28px;
      padding-bottom: 16px;
      border-bottom: 1px solid var(--border);
    }

    .posts-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .post-card {
      background: var(--white);
      border-radius: 24px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      cursor: pointer;
      transition: transform 0.22s ease;
      animation: fadeUp 0.7s cubic-bezier(0.16,1,0.3,1) both;
    }
    .post-card:hover { transform: translateY(-4px); }

    .post-card:nth-child(1) { animation-delay: 0.05s; }
    .post-card:nth-child(2) { animation-delay: 0.12s; }
    .post-card:nth-child(3) { animation-delay: 0.19s; }
    .post-card:nth-child(4) { animation-delay: 0.26s; }
    .post-card:nth-child(5) { animation-delay: 0.33s; }
    .post-card:nth-child(6) { animation-delay: 0.40s; }

    .post-card-img {
      width: 100%;
      aspect-ratio: 16/9;
      object-fit: cover;
      display: block;
      filter: grayscale(100%);
      transition: filter 0.3s ease;
    }
    .post-card:hover .post-card-img { filter: grayscale(0%); }

    .post-card-body {
      padding: 22px 22px 26px;
      display: flex;
      flex-direction: column;
      flex: 1;
      gap: 6px;
    }

    .post-tag {
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #888;
      margin-bottom: 2px;
    }

    .post-card-title {
      font-family: 'Sora', sans-serif;
      font-weight: 700;
      font-size: 1.05rem;
      letter-spacing: -0.02em;
      color: var(--black);
      line-height: 1.3;
      margin-bottom: 6px;
    }

    .post-card-excerpt {
      font-size: 0.8rem;
      line-height: 1.65;
      color: #555;
      flex: 1;
    }

    .post-card-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 18px;
    }

    .post-card-date { font-size: 0.74rem; color: #999; }

    .post-card-arrow {
      width: 30px; height: 30px;
      border-radius: 50%;
      background: var(--black);
      display: flex; align-items: center; justify-content: center;
      color: white; font-size: 0.65rem;
      transition: background 0.2s, transform 0.2s;
      flex-shrink: 0;
    }
    .post-card:hover .post-card-arrow {
      background: var(--accent);
      color: var(--black);
      transform: rotate(-45deg);
    }

    /* ── NEWSLETTER STRIP ── */
    .newsletter-section {
      padding: 0 48px 90px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .newsletter-inner {
      background: var(--white);
      border-radius: 28px;
      padding: 48px 56px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      flex-wrap: wrap;
    }

    .newsletter-text h3 {
      font-family: 'Sora', sans-serif;
      font-weight: 800;
      font-size: clamp(1.6rem, 3vw, 2.4rem);
      letter-spacing: -0.03em;
      color: var(--black);
      margin-bottom: 8px;
    }
    .newsletter-text p {
      font-size: 0.9rem;
      color: #666;
      line-height: 1.6;
    }

    .newsletter-form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
    }

    .newsletter-input {
      background: transparent;
      border: none;
      border-bottom: 1.5px solid #222;
      outline: none;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      color: var(--black);
      padding: 8px 0;
      width: 260px;
      transition: border-color 0.2s;
    }
    .newsletter-input::placeholder { color: #aaa; }
    .newsletter-input:focus { border-bottom-color: var(--black); }

    .newsletter-btn {
      background: var(--black);
      color: var(--white);
      border: none;
      border-radius: 100px;
      padding: 12px 28px;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      cursor: pointer;
      letter-spacing: 0.02em;
      transition: transform 0.15s, opacity 0.15s;
      white-space: nowrap;
    }
    .newsletter-btn:hover { transform: translateY(-1px); opacity: 0.85; }

    /* ── FOOTER ── */
    .spacer { background: #000; height: 60px; width: 100%; }

    footer {
      position: relative;
      width: 100%;
      min-height: 320px;
      padding: 60px 48px 40px;
      overflow: hidden;
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
      background: rgba(0,0,0,0.6);
      z-index: 1;
    }

    .footer-content {
      position: relative;
      z-index: 2;
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 40px;
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
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      font-size: 0.9rem;
      transition: opacity 0.2s;
    }
    .footer-links a:hover { opacity: 0.7; }

    .copyright { color: rgba(255,255,255,0.5); font-size: 0.8rem; }

    .footer-right {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 24px;
    }

    .footer-thanks h3 {
      font-family: 'Sora', sans-serif;
      font-size: 2.5rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      color: white;
    }

    .social-icons-footer {
      display: flex;
      gap: 20px;
    }
    .social-icons-footer a {
      color: white;
      font-size: 1.3rem;
      transition: color 0.2s, transform 0.2s;
      text-decoration: none;
    }
    .social-icons-footer a:hover {
      color: var(--accent);
      transform: translateY(-2px);
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .posts-grid { grid-template-columns: repeat(2, 1fr); }
      .featured-card { grid-template-columns: 1fr; }
      .featured-img { min-height: 220px; max-height: 260px; }
    }

    @media (max-width: 620px) {
      nav { padding: 0 24px; }
      .blog-hero, .filter-bar, .featured-section, .posts-section, .newsletter-section { padding-left: 24px; padding-right: 24px; }
      .posts-grid { grid-template-columns: 1fr; }
      .newsletter-inner { padding: 32px 28px; }
      .newsletter-input { width: 100%; }
      footer { padding: 40px 24px 30px; }
      .footer-right { align-items: flex-start; }
      .footer-thanks h3 { font-size: 1.8rem; }
    }
  </style>
</head>
<body>

  <!-- NAVIGATION -->
  <nav>
    <a href="index.php" class="nav-logo">BuildByHannah</a>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php#about">About</a></li>
      <li><a href="index.php#contact">Contact</a></li>
      <li><a href="index.php#projects">Projects</a></li>
      <li><a href="blog.php" class="active">Blog</a></li>
    </ul>
  </nav>

  <!-- BLOG HERO -->
  <section class="blog-hero">
    <div class="blog-hero-content">
      <p class="blog-hero-eyebrow">Thoughts &amp; Writing</p>
      <h1 class="blog-hero-title">THE BLOG.</h1>
      <p class="blog-hero-sub">Upcoming posts on design, development, and building digital products. Stay tuned — new content is coming soon.</p>
    </div>
  </section>

  <!-- UPCOMING BLOGS -->
  <section class="posts-section">
    <p class="posts-section-label">New content coming soon</p>
    <div class="upcoming-card">
      <h2>Upcoming blogs</h2>
      <p>Right now this page is being filled with ideas. Check back soon for thoughtful posts about UI/UX, web development, and project case studies.</p>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-bg"></div>
    <div class="footer-overlay"></div>
    <div class="footer-content">
      <div>
        <h2 class="footer-logo">BuildByHannah</h2>
        <div class="footer-links">
          <a href="index.php">Home</a>
          <a href="index.php#about">About</a>
          <a href="index.php#contact">Contact</a>
          <a href="index.php#projects">Projects</a>
          <a href="blog.php">Blog</a>
        </div>
        <p class="copyright">© 2026 BuildByHannah. All rights reserved.</p>
      </div>
      <div class="footer-right">
        <div class="social-icons-footer">
          <a href="https://github.com/MidnightStellarrr" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
          <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-thanks">
          <h3>THANK YOU</h3>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Filter pills
    const pills = document.querySelectorAll('.filter-pill');
    pills.forEach(pill => {
      pill.addEventListener('click', () => {
        pills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');
        // In a real implementation this would filter posts
        const category = pill.textContent.trim();
        if (category !== 'All') {
          showToast(`Filtering by ${category} — coming soon!`);
        }
      });
    });

    // Toast
    function showToast(msg) {
      const existing = document.querySelector('.toast-notification');
      if (existing) existing.remove();
      const toast = document.createElement('div');
      toast.className = 'toast-notification';
      toast.innerText = msg;
      Object.assign(toast.style, {
        position: 'fixed',
        bottom: '28px',
        left: '50%',
        transform: 'translateX(-50%)',
        backgroundColor: 'rgba(0,0,0,0.85)',
        backdropFilter: 'blur(12px)',
        color: '#f5d742',
        padding: '10px 24px',
        borderRadius: '40px',
        fontSize: '0.85rem',
        fontFamily: "'DM Sans', sans-serif",
        fontWeight: '500',
        zIndex: '2000',
        border: '1px solid rgba(245,215,66,0.3)',
        pointerEvents: 'none',
        opacity: '0',
        transition: 'opacity 0.2s ease',
        whiteSpace: 'nowrap',
      });
      document.body.appendChild(toast);
      setTimeout(() => toast.style.opacity = '1', 20);
      setTimeout(() => {
        toast.style.opacity = '0';
        setTimeout(() => toast.remove(), 300);
      }, 2200);
    }
  </script>
</body>
</html>