<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BuildByHannah</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

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
    }

    html, body {
      height: 100%;
      background: var(--black);
      color: var(--white);
      font-family: 'DM Sans', sans-serif;
      overflow-x: hidden;
    }

    /* ── NAV ── */
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
      /* subtle glass effect */
      background: rgba(10,10,10,0.25);
      backdrop-filter: blur(2px);
    }

    .nav-logo {
      font-family: 'Sora', sans-serif;
      font-weight: 700;
      font-size: 1rem;
      letter-spacing: -0.01em;
      color: var(--white);
      text-decoration: none;
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

    /* ── HERO ── */
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
      background-position: center;
      z-index: 0;
      /* very slight darkening on left for text legibility */
      filter: brightness(0.92);
    }

    /* gradient overlay — left side darker so text reads cleanly */
    .hero-bg::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(
        105deg,
        rgba(0,0,0,0.62) 0%,
        rgba(0,0,0,0.28) 50%,
        rgba(0,0,0,0.0) 100%
      );
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 640px;
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
}

/* On smaller screens, reduce font size so both lines fit */
@media (max-width: 600px) {
  .hero-title {
    font-size: 1.6rem;
    white-space: normal;
  }
}

    .hero-sub {
      font-family: 'DM Sans', sans-serif;
      font-size: clamp(0.9rem, 1.3vw, 1rem);
      font-weight: 300;
      line-height: 1.6;
      color: rgba(255,255,255,0.78);
      max-width: 360px;
      margin-bottom: 36px;
    }

    .hero-actions {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }

    /* Pill buttons */
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
      transition: transform 0.18s ease, opacity 0.18s ease, background 0.18s ease;
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
    }

    .btn-outline {
      background: transparent;
      color: var(--white);
      border: 1.5px solid rgba(255,255,255,0.75);
    }

    .btn-outline:hover {
      background: rgba(255,255,255,0.08);
      border-color: var(--white);
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 600px) {
      nav { padding: 0 24px; }
      .hero { padding: 0 24px 60px; }
    }
  </style>
</head>
<body>

  <!-- NAV -->
  <nav>
    <a href="#" class="nav-logo">BuildByHannah</a>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Resume</a></li>
      <li><a href="#">Blog</a></li>
    </ul>
  </nav>

  <!-- HERO -->
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

</body>
</html>