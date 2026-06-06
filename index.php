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
  <link rel="stylesheet" href="css/index.css">

  <style>
  </style>
</head>
<body id="top">
  <div class="video-modal-overlay" id="videoModalOverlay" aria-hidden="true">
    <div class="video-modal" role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
      <button class="video-close" id="closeVideoBtn" aria-label="Close video">×</button>
      <video id="demoVideo" controls>
        <source src="" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>

  <!-- NAVIGATION -->
  <nav>
    <a href="#top" class="nav-logo">BuildByHannah</a>
    <ul class="nav-links">
      <li><a href="#top">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="blog.php">Blog</a></li>
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
        <a href="#projects" class="btn btn-light">Projects</a>
        <a href="#contact" class="btn btn-outline">Contact me</a>
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
        <p class="card-tech">HTML • CSS • Node.js • Laravel</p>
        <p class="card-desc">Pharmacare Hub is a healthcare platform that connects patients, caregivers, and pharmacies in real-time. It helps users search for medicine availability, set medication reminders, subscribe to stock alerts, and manage prescriptions — all in one place. For pharmacy staff, it provides inventory management tools, expiry tracking, and sales analytics.</p>
        <div class="card-actions">
          <a href="#" id="pharmVideoBtn" class="btn-card btn-card-filled">See video demonstration</a>
        </div>
      </div>
    </div>

    <!-- Arc -->
    <div class="project-card">
      <img src="img/arc_ss.jpg" alt="Arc screenshot" class="card-screenshot">
      <div class="card-body">
        <div class="card-title">Arc.</div>
        <div class="card-subtitle">Event Scheduler</div>
        <p class="card-tech">Java</p>
        <p class="card-desc">ARC Event Scheduler is a desktop-based calendar and event management application that uses an AVL Tree data structure to organize and manage user schedules efficiently. The system solves disorganized event tracking, double-booking, and difficulty viewing upcoming commitments.</p>
        <div class="card-actions">
          <a href="#" id="arcVideoBtn" class="btn-card btn-card-filled">See video demonstration</a>
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
    <div class="contact-layout">

      <div class="contact-left">
        <div>
          <div class="contact-info">
            <span>09622365514</span>
            <a href="mailto:hannahgranada458@gmail.com">hannahgranada458@gmail.com</a>
          </div>
          <div class="social-icons">
            <a href="https://github.com/MidnightStellarrr" style="color: white;"><i class="fab fa-github"></i></a>
            <a href="https://www.facebook.com/hannahloreen.granadainsta" style="color: white;"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/hannah_loreen_/" style="color: white;"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="contact-heading">LET'S GET<br>IN TOUCH</div>
      </div>

      <div class="contact-right">
        <?php if(isset($_GET['status'])): ?>
          <div class="form-message <?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>">
            <?php if($_GET['status'] === 'success'): ?>
              ✅ Message sent successfully! I&#39;ll get back to you soon.
            <?php else: ?>
              ❌ Failed to send message. Please try again or email me directly.
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <form method="POST" action="send_email.php" class="contact-form">
          <input type="hidden" name="subject" value="Portfolio website contact form">
          <div class="name-row">
            <div class="field">
              <label style="color: white;">First Name</label>
              <input type="text" name="first_name" required style="color: white; border-bottom-color: white;">
            </div>
            <div class="field">
              <label style="color: white;">Last Name</label>
              <input type="text" name="last_name" required style="color: white; border-bottom-color: white;">
            </div>
          </div>
          <div class="field">
            <label style="color: white;">Email</label>
            <input type="email" name="email" required style="color: white; border-bottom-color: white;">
          </div>
          <div class="field">
            <label style="color: white;">Message</label>
            <textarea rows="3" name="message" required style="color: white; border-bottom-color: white;"></textarea>
          </div>
          <button type="submit" class="submit-btn">Submit</button>
        </form>
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
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#projects">Projects</a>
        <a href="blog.php">Blog</a>
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
      const topLink = document.querySelector('.nav-links a[href="#top"]');
      const aboutLink = document.querySelector('.nav-links a[href="#about"]');
      const contactLink = document.querySelector('.nav-links a[href="#contact"]');
      const projectsBtn = document.querySelector('.hero-actions .btn-light');
      const contactBtnHero = document.querySelector('.hero-actions .btn-outline');
      const arcVideoBtn = document.getElementById('arcVideoBtn');
      const pharmVideoBtn = document.getElementById('pharmVideoBtn');
      const videoModalOverlay = document.getElementById('videoModalOverlay');
      const demoVideo = document.getElementById('demoVideo');
      const closeVideoBtn = document.getElementById('closeVideoBtn');

      function scrollToElement(selector) {
        const element = document.querySelector(selector);
        if (!element) return;
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }

      topLink?.addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });

      aboutLink?.addEventListener('click', function(event) {
        event.preventDefault();
        scrollToElement('#about');
      });

      contactLink?.addEventListener('click', function(event) {
        event.preventDefault();
        scrollToElement('#contact');
      });

      projectsBtn?.addEventListener('click', function(event) {
        event.preventDefault();
        scrollToElement('#projects');
      });

      contactBtnHero?.addEventListener('click', function(event) {
        event.preventDefault();
        scrollToElement('#contact');
      });

      function openVideo(sourcePath) {
        if (!videoModalOverlay || !demoVideo) return;
        const sourceElement = demoVideo.querySelector('source');
        if (sourceElement) {
          sourceElement.src = sourcePath;
        } else {
          demoVideo.src = sourcePath;
        }
        demoVideo.load();
        videoModalOverlay.classList.add('active');
        document.body.classList.add('blur-active');
        demoVideo.currentTime = 0;
        demoVideo.play().catch(() => {
          // Autoplay blocked; user can play manually.
        });
      }

      function closeVideo() {
        if (!videoModalOverlay || !demoVideo) return;
        videoModalOverlay.classList.remove('active');
        document.body.classList.remove('blur-active');
        demoVideo.pause();
        const sourceElement = demoVideo.querySelector('source');
        if (sourceElement) {
          sourceElement.src = '';
          demoVideo.load();
        } else {
          demoVideo.removeAttribute('src');
        }
      }

      arcVideoBtn?.addEventListener('click', function(event) {
        event.preventDefault();
        openVideo('vid/arc. demo.mp4');
      });

      pharmVideoBtn?.addEventListener('click', function(event) {
        event.preventDefault();
        openVideo('vid/pharmacare_demo.mp4');
      });

      closeVideoBtn?.addEventListener('click', closeVideo);

      videoModalOverlay?.addEventListener('click', function(event) {
        if (event.target === videoModalOverlay) {
          closeVideo();
        }
      });

      document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && videoModalOverlay.classList.contains('active')) {
          closeVideo();
        }
      });
    })();
  </script>
</body>
</html>