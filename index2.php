<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>BIO-ENZYME | Future of Living Enzymes</title>
  <!-- Google Fonts: Modern, clean, futuristic yet organic -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #FCF9F4;
      font-family: 'Inter', sans-serif;
      color: #1E2F23;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    /* modern smooth scroll + custom cursor hint */
    ::selection {
      background: #B4E0A3;
      color: #1A3A22;
    }

    h1, h2, h3, .logo-font {
      font-family: 'Syne', sans-serif;
      font-weight: 700;
      letter-spacing: -0.02em;
    }

    .container {
      max-width: 1440px;
      margin: 0 auto;
      padding: 0 48px;
    }

    /* ---- glassmorphic header (figma style) ---- */
    header {
      position: fixed;
      top: 24px;
      left: 50%;
      transform: translateX(-50%);
      width: calc(100% - 48px);
      max-width: 1400px;
      z-index: 1000;
      background: rgba(255, 253, 245, 0.75);
      backdrop-filter: blur(16px);
      border-radius: 80px;
      border: 1px solid rgba(146, 196, 125, 0.3);
      box-shadow: 0 12px 32px -12px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
    }

    .nav-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 32px;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    /* modern morphing blob logo */
    .logo-blob {
      width: 48px;
      height: 48px;
      background: linear-gradient(135deg, #3C8C4A, #A7E0A0);
      border-radius: 38% 62% 44% 56% / 62% 38% 62% 38%;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: morph 8s ease-in-out infinite;
      box-shadow: 0 8px 20px rgba(60, 140, 74, 0.3);
    }

    @keyframes morph {
      0% { border-radius: 38% 62% 44% 56% / 62% 38% 62% 38%; }
      50% { border-radius: 56% 44% 68% 32% / 38% 54% 46% 62%; }
      100% { border-radius: 38% 62% 44% 56% / 62% 38% 62% 38%; }
    }

    .logo-blob span {
      font-size: 28px;
      font-weight: 800;
      color: white;
    }

    .logo-text h2 {
      font-size: 1.6rem;
      background: linear-gradient(120deg, #2A6B38, #5A9E4E);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    .logo-text p {
      font-size: 0.7rem;
      letter-spacing: 1px;
      color: #677A5E;
    }

    .nav-links {
      display: flex;
      gap: 40px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 500;
      color: #2A452A;
      transition: 0.2s;
      font-size: 0.95rem;
      position: relative;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -6px;
      left: 0;
      width: 0;
      height: 2px;
      background: #6BBF4A;
      transition: width 0.3s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .nav-links a:hover::after, .nav-links a.active::after {
      width: 100%;
    }

    .btn-pill {
      background: #1E4226;
      color: white !important;
      padding: 10px 28px;
      border-radius: 60px;
      font-weight: 600;
      transition: all 0.2s ease;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .btn-pill:hover {
      background: #3A7747;
      transform: scale(1.02);
      box-shadow: 0 8px 20px rgba(60, 140, 74, 0.3);
    }

    /* hero section 2026 */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 140px 0 80px;
      position: relative;
      overflow: hidden;
    }

    .hero-bg-glow {
      position: absolute;
      top: -20%;
      right: -10%;
      width: 70%;
      height: 100%;
      background: radial-gradient(circle, rgba(160, 216, 120, 0.2) 0%, rgba(252, 249, 244, 0) 70%);
      border-radius: 50%;
      z-index: -1;
      filter: blur(80px);
    }

    .hero-grid {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 60px;
    }

    .hero-content {
      flex: 1.2;
    }

    .chip {
      background: rgba(100, 160, 80, 0.15);
      backdrop-filter: blur(4px);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 18px;
      border-radius: 60px;
      font-size: 0.85rem;
      font-weight: 600;
      color: #2E6D3C;
      margin-bottom: 28px;
      border: 1px solid rgba(107, 191, 74, 0.4);
    }

    .hero-content h1 {
      font-size: 4.5rem;
      line-height: 1.1;
      margin-bottom: 24px;
      background: linear-gradient(125deg, #1A3520, #4D915A);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero-content p {
      font-size: 1.2rem;
      line-height: 1.5;
      color: #4A5D42;
      margin-bottom: 40px;
      max-width: 85%;
    }

    .cta-group {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: #1E4226;
      color: white;
      border: none;
      padding: 14px 36px;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 8px 14px rgba(30, 66, 38, 0.2);
    }

    .btn-primary:hover {
      background: #2D6A3B;
      transform: translateY(-3px);
    }

    .btn-outline-light {
      background: transparent;
      border: 1.5px solid #A4CF96;
      padding: 14px 36px;
      border-radius: 60px;
      font-weight: 600;
      color: #2C5A2E;
      transition: 0.2s;
    }

    .hero-stats {
      display: flex;
      gap: 42px;
      margin-top: 48px;
    }

    .stat-item h3 {
      font-size: 2rem;
      font-weight: 800;
    }

    /* floating product card (figma inspired) */
    .hero-image {
      flex: 1;
      position: relative;
      display: flex;
      justify-content: center;
    }

    .floating-card {
      background: rgba(255, 255, 248, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 42px;
      padding: 24px;
      width: 300px;
      border: 1px solid rgba(255,255,210,0.6);
      box-shadow: 0 25px 45px -12px rgba(0,0,0,0.2);
      transform: rotate(4deg);
      transition: transform 0.3s ease;
    }

    .floating-card:hover {
      transform: rotate(0deg) scale(1.02);
    }

    .badge-100 {
      background: #CBE9BA;
      border-radius: 60px;
      padding: 6px 12px;
      font-weight: 700;
      display: inline-block;
      font-size: 0.7rem;
    }

    /* products section - modern cards with hover parallax */
    .section {
      padding: 100px 0;
    }

    .section-title {
      font-size: 3rem;
      font-weight: 800;
      text-align: center;
      margin-bottom: 16px;
      letter-spacing: -0.02em;
    }

    .section-sub {
      text-align: center;
      font-size: 1.1rem;
      color: #6E7F63;
      margin-bottom: 60px;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
    }

    .product-card-modern {
      background: rgba(255, 253, 245, 0.9);
      backdrop-filter: blur(0px);
      border-radius: 48px;
      padding: 32px 24px;
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      border: 1px solid #EDE6D8;
      box-shadow: 0 10px 20px -5px rgba(0,0,0,0.02);
    }

    .product-card-modern:hover {
      transform: translateY(-12px);
      border-color: #C4E0B2;
      box-shadow: 0 30px 40px -20px rgba(60, 110, 71, 0.3);
      background: white;
    }

    .product-icon {
      font-size: 58px;
      margin-bottom: 20px;
    }

    .price-modern {
      font-size: 28px;
      font-weight: 800;
      color: #2C6E3A;
    }

    /* Video testimonials with slanted glass design */
    .testimonial-section {
      background: #F2F7EC;
      border-radius: 70px 70px 40px 40px;
      margin: 40px 20px;
      padding: 80px 0;
    }

    .video-showcase {
      display: flex;
      flex-wrap: wrap;
      gap: 32px;
      justify-content: center;
    }

    .video-glass {
      background: #FFFFFFCC;
      backdrop-filter: blur(8px);
      border-radius: 48px;
      width: 360px;
      overflow: hidden;
      transition: all 0.3s;
      border: 1px solid rgba(160, 200, 120, 0.5);
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.1);
    }

    .video-glass:hover {
      transform: scale(1.02);
      background: white;
    }

    .video-wrapper {
      position: relative;
      width: 100%;
      padding-bottom: 56%;
      background: #D9E6CF;
    }

    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .testimonial-caption {
      padding: 20px 24px;
    }

    .rating {
      color: #E7B42C;
      margin: 8px 0;
    }

    /* marquee effect for brand */
    .marquee {
      overflow: hidden;
      white-space: nowrap;
      background: #1E2F23;
      color: #DAF4CD;
      padding: 12px 0;
      font-weight: 500;
    }

    .marquee span {
      display: inline-block;
      padding-left: 20px;
      animation: scroll 25s linear infinite;
    }

    @keyframes scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    footer {
      background: #1A2A1C;
      color: #C7DCC0;
      padding: 60px 0 30px;
      border-radius: 48px 48px 0 0;
      margin-top: 60px;
    }

    @media (max-width: 1024px) {
      .container { padding: 0 24px; }
      .hero-content h1 { font-size: 3rem; }
      .nav-flex { padding: 10px 20px; }
    }
  </style>
</head>
<body>

<header>
  <div class="nav-flex">
    <div class="logo-area">
      <div class="logo-blob"><span>🌱</span></div>
      <div class="logo-text">
        <h2>BIO·ENZYME</h2>
        <p>100% organic • living culture</p>
      </div>
    </div>
    <div class="nav-links">
      <a href="#home" class="active">Home</a>
      <a href="#products">Elixirs</a>
      <a href="#testimonials">Stories</a>
      <a href="#shop" class="btn-pill">Shop now <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</header>

<main>
  <!-- Hero 2026 -->
  <section id="home" class="hero">
    <div class="hero-bg-glow"></div>
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="chip"><i class="fas fa-certificate"></i> Certified pure enzyme • 2026 harvest</div>
        <h1>living enzyme<br>for radical wellness</h1>
        <p>100% organic, raw fermented bio-enzymes — transform your water, meals, and life with nature’s most potent probiotics.</p>
        <div class="cta-group">
          <button class="btn-primary" onclick="alert('Explore the future of enzymes →')"><i class="fas fa-flask"></i> Discover collection</button>
          <button class="btn-outline-light" onclick="alert('Watch enzyme ritual video')"><i class="fab fa-youtube"></i> Watch film</button>
        </div>
        <div class="hero-stats">
          <div class="stat-item"><h3>10k+</h3><p>happy guts</p></div>
          <div class="stat-item"><h3>0%</h3><p>sugar added</p></div>
          <div class="stat-item"><h3>🌿</h3><p>wild fermented</p></div>
        </div>
      </div>
      <div class="hero-image">
        <div class="floating-card">
          <div class="badge-100"><i class="fas fa-leaf"></i> 100% PURE</div>
          <h3 style="margin: 16px 0 8px;">TURA Premium</h3>
          <p style="font-size: 0.8rem;">enzyme concentrate • probiotic rich</p>
          <div style="font-size: 28px; font-weight:800;">$32<span style="font-size: 12px;">/500ml</span></div>
          <button class="btn-primary" style="margin-top: 16px; padding: 8px 20px; font-size:0.8rem;" onclick="alert('Added TURA enzyme to cart')">Add +</button>
        </div>
      </div>
    </div>
  </section>

  <!-- marquee organic badge -->
  <div class="marquee">
    <span>🌿 100% organic fermentation • zero synthetics • wild enzymes • live probiotics • 🌿 100% organic fermentation • zero synthetics • wild enzymes • live probiotics • </span>
  </div>

  <!-- PRODUCTS section modern -->
  <section id="products" class="section">
    <div class="container">
      <h2 class="section-title">enzyme elixirs • future food</h2>
      <div class="section-sub">crafted in small batches, alive with beneficial bacteria & organic botanicals</div>
      <div class="products-grid">
        <div class="product-card-modern">
          <div class="product-icon">🍊⚡</div>
          <h3>Citrus Bio-Catalyst</h3>
          <p style="margin: 12px 0;">Organic lemon, orange peel + ginger — digestive fire in every drop.</p>
          <div class="price-modern">$29</div>
          <button class="btn-outline-light" style="margin-top: 20px; width:100%;" onclick="alert('Citrus enzyme added')">Quick shop →</button>
        </div>
        <div class="product-card-modern">
          <div class="product-icon">🍎🍯</div>
          <h3>Wild Apple Cider</h3>
          <p>Raw, unfiltered with mother enzymes. Smooth & tangy living tonic.</p>
          <div class="price-modern">$26</div>
          <button class="btn-outline-light" style="margin-top:20px; width:100%;" onclick="alert('Apple cider enzyme added')">Quick shop →</button>
        </div>
        <div class="product-card-modern">
          <div class="product-icon">🌿💧</div>
          <h3>Green Enzyme Powder</h3>
          <p>Spirulina, moringa, digestive enzymes — sprinkle on anything.</p>
          <div class="price-modern">$44</div>
          <button class="btn-outline-light" style="margin-top:20px; width:100%;" onclick="alert('Green enzyme powder added')">Quick shop →</button>
        </div>
        <div class="product-card-modern">
          <div class="product-icon">🌸🍃</div>
          <h3>Floral Bloom + Enzyme</h3>
          <p>Hibiscus, rose & raw enzyme blend. Beauty from within.</p>
          <div class="price-modern">$38</div>
          <button class="btn-outline-light" style="margin-top:20px; width:100%;" onclick="alert('Floral enzyme added')">Quick shop →</button>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO TESTIMONIALS section with modern glass cards + real organic storytelling -->
  <section id="testimonials" class="testimonial-section">
    <div class="container">
      <h2 class="section-title" style="color:#1F3523;">🎥 voices of the enzyme tribe</h2>
      <div class="section-sub">real results, real people — captured in motion</div>
      <div class="video-showcase">
        <!-- video 1 -->
        <div class="video-glass">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/YQHsXMglC9A?rel=0&modestbranding=1" title="Testimonial energy" allowfullscreen></iframe>
          </div>
          <div class="testimonial-caption">
            <h4>🌸 Julia M. <span style="font-weight:normal; font-size:0.8rem;">@juliawellness</span></h4>
            <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="quote">“I’ve never felt such clean energy. My skin glows and digestion is effortless since TURA enzyme.”</p>
          </div>
        </div>
        <!-- video 2 -->
        <div class="video-glass">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/5P3HeQk8dM4?rel=0" title="Fermentation expert" allowfullscreen></iframe>
          </div>
          <div class="testimonial-caption">
            <h4>👨‍🍳 Marco Solis — Chef</h4>
            <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="quote">“I use the green powder in dressings & marinades. It’s the purest enzyme I’ve tried.”</p>
          </div>
        </div>
        <!-- video 3 -->
        <div class="video-glass">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/k7V_vCQsntY?rel=0" title="Yoga and enzyme" allowfullscreen></iframe>
          </div>
          <div class="testimonial-caption">
            <h4>🧘 Priya K. — Yoga instructor</h4>
            <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
            <p class="quote">“My daily ritual: warm water with citrus enzyme — unmatched vitality.”</p>
          </div>
        </div>
      </div>
      <div style="text-align:center; margin-top: 48px;">
        <button class="btn-primary" onclick="alert('Watch full testimonial playlist on YouTube')"><i class="fab fa-youtube"></i> See all video stories →</button>
      </div>
    </div>
  </section>

  <!-- Extra: Enzyme food pairing (modern) -->
  <section class="section" style="padding-top: 20px;">
    <div class="container">
      <div style="background: linear-gradient(125deg, #F1F9EA, #FFF9EF); border-radius: 64px; padding: 56px 40px; text-align: center;">
        <h2 style="font-size: 2.3rem;">🍽️ enzyme for food & drinks</h2>
        <p style="max-width: 600px; margin: 16px auto;">Elevate smoothies, salad dressings, kombucha, and even baked goods with our living enzyme concentrates.</p>
        <div style="display: flex; gap: 32px; justify-content: center; flex-wrap: wrap; margin-top: 32px;">
          <span style="background:#fff; border-radius: 100px; padding: 8px 28px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"><i class="fas fa-apple-alt"></i> Smoothie booster</span>
          <span style="background:#fff; border-radius: 100px; padding: 8px 28px;"><i class="fas fa-seedling"></i> Salad elixir</span>
          <span style="background:#fff; border-radius: 100px; padding: 8px 28px;"><i class="fas fa-mug-hot"></i> Warm tonics</span>
        </div>
      </div>
    </div>
  </section>
</main>

<footer id="shop">
  <div class="container">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 40px; align-items: center;">
      <div>
        <div class="logo-area" style="margin-bottom: 20px;">
          <div class="logo-blob" style="width: 48px; height: 48px;"><span>⚡</span></div>
          <div class="logo-text"><h2 style="color:#E0F0D4;">BIO·ENZYME</h2><p style="color:#B1CFA4;">100% pure organic</p></div>
        </div>
        <p style="max-width: 260px;">Enzyme-powered living for a regenerative future.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <p><a href="#" style="color:#C7E0B4; text-decoration: none;">Shop all</a></p>
        <p><a href="#" style="color:#C7E0B4; text-decoration: none;">Wholesale</a></p>
        <p><a href="#" style="color:#C7E0B4; text-decoration: none;">Lab reports</a></p>
      </div>
      <div>
        <h4>Community</h4>
        <p><i class="fab fa-instagram"></i> @bioenzyme</p>
        <p><i class="fab fa-tiktok"></i> @enzyme.culture</p>
      </div>
    </div>
    <hr style="border-color:#3A5A36; margin: 40px 0 20px;">
    <p style="text-align: center; font-size:0.75rem;">© 2026 BIO-ENZYME — fermented with intention • 100% organic drink & food enzyme. All rights reserved.</p>
  </div>
</footer>

<script>
  // smooth scroll + active link highlight + header shrink on scroll
  window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
      header.style.background = 'rgba(255, 253, 245, 0.9)';
      header.style.backdropFilter = 'blur(20px)';
    } else {
      header.style.background = 'rgba(255, 253, 245, 0.75)';
    }

    // active nav
    let sections = document.querySelectorAll('section');
    let scrollPos = window.scrollY + 150;
    sections.forEach(section => {
      if(section.id) {
        let top = section.offsetTop;
        let height = section.offsetHeight;
        if(scrollPos >= top && scrollPos < top + height) {
          document.querySelectorAll('.nav-links a').forEach(link => {
            link.classList.remove('active');
            if(link.getAttribute('href') === '#'+section.id) {
              link.classList.add('active');
            }
          });
        }
      }
    });
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const target = this.getAttribute('href');
      if(target === "#" || target === "") return;
      const element = document.querySelector(target);
      if(element) {
        e.preventDefault();
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>
</body>
</html>