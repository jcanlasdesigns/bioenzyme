<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Bio Enzyme | 100% Pure Organic — 4x Enzyme Elixirs</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #FDFBF7;
      font-family: 'Inter', sans-serif;
      color: #1E3323;
      overflow-x: hidden;
    }

    h1, h2, h3, .logo-font {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 600;
      letter-spacing: -0.02em;
    }

    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 48px;
    }

    html {
      scroll-behavior: smooth;
    }

    .custom-cursor {
      width: 28px;
      height: 28px;
      background: rgba(80, 140, 70, 0.25);
      border-radius: 50%;
      position: fixed;
      pointer-events: none;
      z-index: 9999;
      backdrop-filter: blur(6px);
      border: 1.5px solid rgba(100, 180, 80, 0.6);
      transition: transform 0.08s linear;
    }

    header {
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: calc(100% - 60px);
      max-width: 1360px;
      z-index: 1000;
      background: rgba(255, 252, 242, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 100px;
      border: 1px solid rgba(100, 150, 80, 0.3);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
      transition: all 0.3s;
    }

    .nav-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 32px;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-image {
      width: 44px;
      height: 44px;
      background: linear-gradient(135deg, #3E8E4A, #79C46B);
      border-radius: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 6px 14px rgba(60, 110, 60, 0.25);
    }

    .logo-image img {
      width: 28px;
      height: 28px;
      filter: brightness(0) invert(1);
    }

    .logo-text h2 {
      font-size: 1.5rem;
      background: linear-gradient(135deg, #2D6A3B, #6FB358);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .logo-text p {
      font-size: 0.7rem;
      letter-spacing: 1px;
      color: #6D8662;
    }

    .nav-links {
      display: flex;
      gap: 36px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 500;
      color: #2C4D2E;
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
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after, .nav-links a.active::after {
      width: 100%;
    }

    .btn-shop {
      background: #1E4226;
      color: white !important;
      padding: 8px 28px;
      border-radius: 60px;
      font-weight: 600;
      transition: all 0.2s;
    }

    .btn-shop:hover {
      background: #3E7A4A;
      transform: scale(1.02);
      box-shadow: 0 6px 14px rgba(30, 66, 38, 0.2);
    }

    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 6px;
      z-index: 1001;
    }

    .hamburger span {
      width: 28px;
      height: 2px;
      background: #2C4D2E;
      transition: all 0.3s ease;
      border-radius: 2px;
    }

    .mobile-menu {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: rgba(255, 252, 242, 0.98);
      backdrop-filter: blur(24px);
      z-index: 2000;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 32px;
      transform: translateY(-100%);
      transition: transform 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }

    .mobile-menu.active {
      transform: translateY(0);
    }

    .mobile-menu a {
      text-decoration: none;
      font-size: 1.8rem;
      font-weight: 600;
      color: #2C4D2E;
      padding: 12px 0;
      transition: 0.2s;
      font-family: 'Space Grotesk', sans-serif;
    }

    .mobile-menu a:hover {
      color: #5DA05A;
      transform: scale(1.05);
    }

    .mobile-menu .btn-shop-mobile {
      background: #1E4226;
      color: white;
      padding: 14px 40px;
      border-radius: 60px;
      font-size: 1.2rem;
      margin-top: 16px;
    }

    .close-menu {
      position: absolute;
      top: 32px;
      right: 32px;
      font-size: 40px;
      cursor: pointer;
      color: #2C4D2E;
      font-weight: 300;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 140px 0 80px;
      position: relative;
      overflow: hidden;
    }

    .hero-bg-wave {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 40%;
      background: radial-gradient(ellipse at 20% 80%, rgba(170, 220, 120, 0.2), transparent);
      pointer-events: none;
    }

    .hero-grid {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 50px;
    }

    .hero-content {
      flex: 1;
      position: relative;
      z-index: 10;
    }

    .badge-fresh {
      background: #E5F5DD;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 20px;
      border-radius: 60px;
      font-size: 0.8rem;
      font-weight: 700;
      color: #367A46;
      margin-bottom: 24px;
      border: 1px solid #B8DCAA;
    }

    .hero-content h1 {
      font-size: 4.2rem;
      line-height: 1.1;
      margin-bottom: 24px;
    }

    .hero-content .highlight {
      color: #4B8C3F;
      border-bottom: 3px solid #B9E0A4;
    }

    .hero-content p {
      font-size: 1.15rem;
      line-height: 1.5;
      color: #4F6148;
      margin-bottom: 36px;
      max-width: 90%;
    }

    .hero-buttons {
      display: flex;
      gap: 18px;
      flex-wrap: wrap;
      margin-bottom: 48px;
    }

    .btn-primary {
      background: #2D6B38;
      border: none;
      padding: 14px 34px;
      border-radius: 60px;
      font-weight: 600;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 6px 12px rgba(45, 107, 56, 0.2);
    }

    .btn-primary:hover {
      background: #438F51;
      transform: translateY(-3px);
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid #9CCC8A;
      padding: 14px 34px;
      border-radius: 60px;
      font-weight: 600;
      color: #2C6037;
      transition: 0.2s;
      cursor: pointer;
    }

    .hero-stats {
      display: flex;
      gap: 40px;
    }

    .stat h3 {
      font-size: 1.8rem;
      font-weight: 700;
    }

    .hero-visual {
      flex: 1;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 540px;
      perspective: 900px;
      z-index: 5;
    }

    .image-stack {
      position: relative;
      width: 100%;
      max-width: 620px;
      height: 500px;
      margin: 0 auto;
    }

    .stack-img {
      position: absolute;
      transition: all 0.35s cubic-bezier(0.2, 0.9, 0.4, 1.2);
      object-fit: cover;
      will-change: transform, opacity;
    }

    .stack-img-back {
      width: 120%;
      left: 7%;
      top: 8%;
      z-index: 1;
      opacity: 0.75;
      filter: brightness(0.96);
      transform: scale(0.92);
    }

    .stack-img-left {
      width: 38%;
      left: 2%;
      bottom: 8%;
      z-index: 3;
      top: auto;
    }
    .stack-img-center {
      width: 50%;
      left: 28%;
      bottom: 2%;
      z-index: 4;
      top: auto;
    }
    .stack-img-right {
      width: 38%;
      right: 2%;
      bottom: 20%;
      z-index: 2;
      top: auto;
    }

    .image-stack:hover .stack-img {
      filter: brightness(1.02) saturate(1.04);
      transition: 0.3s;
    }

    .section {
      padding: 100px 0;
    }

    .section-title {
      font-size: 2.8rem;
      text-align: center;
      margin-bottom: 16px;
    }

    .section-sub {
      text-align: center;
      font-size: 1.05rem;
      color: #6E8263;
      margin-bottom: 60px;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
    }

    .product-card {
      background: white;
      border-radius: 40px;
      padding: 0 0 28px 0;
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      border: 1px solid #F0E9DE;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02);
      text-align: center;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .product-card:hover {
      transform: translateY(-15px) scale(1.02);
      border-color: #C7E3B6;
      box-shadow: 0 40px 50px -25px rgba(60, 110, 50, 0.3);
    }

    .product-img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .product-card:hover .product-img {
      transform: scale(1.05);
    }

    .product-card h3 {
      margin: 24px 0 8px;
      padding: 0 16px;
    }

    .product-card p {
      padding: 0 20px;
      flex-grow: 1;
    }

    .price {
      font-size: 28px;
      font-weight: 700;
      color: #317A3F;
      margin: 16px 0;
    }

    .product-card .btn-outline {
      margin: 0 auto 20px auto;
      display: inline-block;
      width: auto;
      min-width: 160px;
    }

    .video-section {
      background: linear-gradient(145deg, #F4F9EF, #FDF9F2);
      border-radius: 64px;
      margin: 20px 20px;
      padding: 70px 0;
    }

    .video-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 32px;
      justify-content: center;
    }

    .video-card {
      width: 340px;
      background: rgba(255, 255, 245, 0.9);
      backdrop-filter: blur(4px);
      border-radius: 36px;
      overflow: hidden;
      transition: all 0.35s ease;
      border: 1px solid #E2EAD9;
    }

    .video-card:hover {
      transform: translateY(-10px) scale(1.02);
      border-color: #B9DBA5;
    }

    .video-wrapper {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%;
      background: #CAE0BC;
    }

    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .testimonial-info {
      padding: 20px;
    }

    .stars {
      color: #F5B642;
      margin: 8px 0;
    }

    .cta-modern {
      background: #1E4226;
      border-radius: 64px;
      padding: 64px 40px;
      text-align: center;
      color: white;
      transition: transform 0.3s;
    }

    footer {
      background: #1B2A1A;
      color: #CBE2C1;
      padding: 48px 0 32px;
      border-radius: 40px 40px 0 0;
      margin-top: 60px;
    }

    .footer-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
      margin-bottom: 40px;
    }

    .footer-col {
      flex: 1;
      min-width: 180px;
    }

    .footer-col h4 {
      font-size: 1.2rem;
      margin-bottom: 20px;
      color: #E0F0D0;
      font-weight: 600;
    }

    .footer-col p, .footer-col a {
      color: #CBE2C1;
      text-decoration: none;
      line-height: 1.8;
      transition: color 0.2s;
    }

    .footer-col a:hover {
      color: #A8D89C;
    }

    .social-links {
      display: flex;
      gap: 18px;
      margin-top: 16px;
      flex-wrap: wrap;
    }

    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(200, 220, 180, 0.15);
      border-radius: 50%;
      transition: all 0.2s;
      font-size: 1.2rem;
    }

    .social-links a:hover {
      background: #5A9E4E;
      transform: translateY(-3px);
      color: white;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 30px;
      border-top: 1px solid #3A5A36;
      font-size: 0.8rem;
    }

    /* ===== MOBILE RESPONSIVE with CIRCLE TOGGLE BUTTON AT BOTTOM ===== */
    @media (max-width: 1000px) {
      .container { padding: 0 28px; }
      .hero-content h1 { font-size: 2.8rem; }
      .hero-content p { max-width: 100%; }
      
      .nav-links { display: none; }
      .hamburger { display: flex; }
      
      .hero-visual {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        min-height: 100%;
        margin: 0;
        opacity: 1;
        pointer-events: none;
        z-index: 1;
      }
      
      .image-stack {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.85);
        width: 100%;
        height: auto;
        max-width: 480px;
        margin: 0;
      }
      
      .stack-img { box-shadow: none !important; border-radius: 32px !important; border: none !important; }
      .stack-img-back { width: 700px; left: -20%; top: -400px; transform: scale(1); opacity: 0.6; z-index: 1; }
      .stack-img-left { width: 45%; left: -2%; bottom: 5%; z-index: 3; opacity: 0.9; }
      .stack-img-center { width: 50%; left: 26%; bottom: 0%; z-index: 4; opacity: 0.95; }
      .stack-img-right { width: 45%; right: -2%; bottom: 15%; z-index: 2; opacity: 0.9; }
      
      /* Hero content - initially hidden on mobile */
      .hero-content {
        text-align: center;
        z-index: 10;
        position: relative;
        background: rgba(253, 251, 247, 0.92);
        backdrop-filter: blur(12px);
        border-radius: 48px;
        padding: 28px 24px;
        margin: 20px 0;
        width: 100%;
        transition: opacity 0.4s ease, transform 0.4s ease, padding 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
        pointer-events: none;
      }
      
      /* When visible */
      .hero-content.visible {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
      }
      
      /* Circle toggle button at bottom center */
      .circle-toggle-btn {
        position: fixed;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%);
        width: 56px;
        height: 56px;
        background: #2D6B38;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 100;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.2s ease;
        border: 2px solid rgba(255, 255, 245, 0.5);
        color: white;
        font-size: 1.4rem;
      }
      
      .circle-toggle-btn:hover {
        background: #438F51;
        transform: translateX(-50%) scale(1.05);
      }
      
      .hero-buttons { justify-content: center; }
      .hero-stats { justify-content: center; flex-wrap: wrap; gap: 24px; }
      .hero-grid { gap: 0; position: relative; min-height: 100vh; }
      .badge-fresh { background: rgba(229, 245, 221, 0.95); backdrop-filter: blur(1px); }
      .hero-content p { color: #2A3D25; font-weight: 500; font-size: 1rem; }
      .stat h3 { font-size: 1.6rem; }
      
      .footer-grid { flex-direction: column; gap: 30px; }
      .footer-col { text-align: center; }
      .social-links { justify-content: center; }
    }

    @media (max-width: 600px) {
      .hero-content h1 { font-size: 2.2rem; }
      .hero-content { padding: 20px 16px; }
      .image-stack { transform: translate(-50%, -50%) scale(0.75); max-width: 880px; }
      .stack-img-left { width: 48%; }
      .stack-img-right { width: 38%; top: -500px; }
      .stack-img-center { width: 52%; left: 25%; }
      .circle-toggle-btn { width: 50px; height: 50px; bottom: 20px; font-size: 1.2rem; }
    }
    
    @media (max-width: 1000px) and (orientation: landscape) {
      .image-stack { transform: translate(-50%, -50%) scale(0.65); max-width: 850px; }
      .hero-content { padding: 20px 24px; }
      .circle-toggle-btn { bottom: 16px; width: 48px; height: 48px; }
    }
  </style>
</head>
<body>

<div class="custom-cursor"></div>

<header>
  <div class="nav-flex">
    <div class="logo-area">
      <div class="logo-image">
        <img src="https://placehold.co/100x100/FFFFFF/2D6A3B?text=🌿" alt="Bio Enzyme Logo">
      </div>
      <div class="logo-text">
        <h2>BIO·ENZYME</h2>
        <p>100% organic • living culture</p>
      </div>
    </div>
    <div class="nav-links">
      <a href="#home">Home</a>
      <a href="#products">Products</a>
      <a href="#testimonials">Video stories</a>
      <a href="#shop" class="btn-shop">Shop now →</a>
    </div>
    <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>

<div class="mobile-menu" id="mobileMenu">
  <div class="close-menu" id="closeMenu">&times;</div>
  <a href="#home">Home</a>
  <a href="#products">Products</a>
  <a href="#testimonials">Video stories</a>
  <a href="#shop" class="btn-shop-mobile">Shop now →</a>
</div>

<main>
  <section id="home" class="hero">
    <div class="hero-bg-wave"></div>
    <div class="container hero-grid">
      <div class="hero-content" id="heroContent">
        <div class="badge-fresh"><i class="fas fa-droplet"></i> 4x enzyme synergy • wild & organic</div>
        <h1>pure <span class="highlight">bio enzyme</span><br>alive & organic</h1>
        <p>Wild-fermented living elixir for your daily ritual. Transform water, food, and vitality — zero additives, zero compromise.</p>
        <div class="hero-buttons">
          <button class="btn-primary" onclick="alert('Discover the freshness of TURA enzyme')"><i class="fas fa-leaf"></i> Explore enzyme</button>
          <button class="btn-outline" onclick="alert('Watch how enzymes come alive →')"><i class="fab fa-youtube"></i> Watch film</button>
        </div>
        <div class="hero-stats">
          <div class="stat"><h3>15k+</h3><p>happy customers</p></div>
          <div class="stat"><h3>100%</h3><p>plant based</p></div>
          <div class="stat"><h3>0%</h3><p>sugar / preservatives</p></div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="image-stack" id="imageStack">
          <img class="stack-img stack-img-back" src="splash.png" alt="Organic enzyme background essence">
          <img class="stack-img stack-img-left" src="bottle-2.png" alt="Citrus enzyme bottle">
          <img class="stack-img stack-img-center" src="bottle-1.png" alt="Green enzyme elixir">
          <img class="stack-img stack-img-right" src="bottle-3.png" alt="Apple cider enzyme">
        </div>
      </div>
    </div>
  </section>

  <section id="products" class="section">
    <div class="container">
      <h2 class="section-title">enzyme elixirs & food blends</h2>
      <div class="section-sub">crafted with fermentation wisdom • each drop alive with probiotics</div>
      <div class="products-grid">
        <div class="product-card">
          <img class="product-img" src="https://placehold.co/600x500/E8F2E2/3A7645?text=CITRUS+ZEST" alt="Citrus enzyme">
          <h3>Citrus Zest Splash</h3>
          <p>Orange, lemon, ginger — bright digestive enzyme concentrate.</p>
          <div class="price">$32</div>
          <button class="btn-outline" style="border-color:#9ACC88;" onclick="alert('Citrus enzyme added')">Add to cart →</button>
        </div>
        <div class="product-card">
          <img class="product-img" src="https://placehold.co/600x500/EFE6D8/5B8C4E?text=APPLE+CIDER" alt="Apple cider">
          <h3>Raw Apple Cider</h3>
          <p>With 'mother' enzymes. Raw, unfiltered, organic apple magic.</p>
          <div class="price">$28</div>
          <button class="btn-outline" style="border-color:#9ACC88;" onclick="alert('Apple Cider added')">Add to cart →</button>
        </div>
        <div class="product-card">
          <img class="product-img" src="https://placehold.co/600x500/D9E8D0/3A6B3A?text=GREEN+POWDER" alt="Green powder">
          <h3>Green Ferment Powder</h3>
          <p>Spirulina, wheatgrass, digestive enzymes — superfood blend.</p>
          <div class="price">$46</div>
          <button class="btn-outline" style="border-color:#9ACC88;" onclick="alert('Green powder added')">Add to cart →</button>
        </div>
        <div class="product-card">
          <img class="product-img" src="https://placehold.co/600x500/F5E6D4/A86F4B?text=HIBISCUS" alt="Hibiscus elixir">
          <h3>Hibiscus Bloom Elixir</h3>
          <p>Floral + antioxidant rich enzyme for glow and gut health.</p>
          <div class="price">$36</div>
          <button class="btn-outline" style="border-color:#9ACC88;" onclick="alert('Hibiscus added')">Add to cart →</button>
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials" class="video-section">
    <div class="container">
      <h2 class="section-title">stories in motion • enzyme love</h2>
      <div class="section-sub">real people, real transformation — watch their experience with our bio enzymes</div>
      <div class="video-grid">
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/YQHsXMglC9A?rel=0&modestbranding=1" title="Testimonial 1" allowfullscreen></iframe>
          </div>
          <div class="testimonial-info">
            <h4>Sophia Chen <span style="font-weight: normal;">@guthealthsoph</span></h4>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p><i class="fas fa-quote-left"></i> My bloating vanished within a week. I start every morning with citrus enzyme — game changer!</p>
          </div>
        </div>
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/5P3HeQk8dM4?rel=0" title="Testimonial 2" allowfullscreen></iframe>
          </div>
          <div class="testimonial-info">
            <h4>Marcus V. — Farm-to-table Chef</h4>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p><i class="fas fa-quote-left"></i> I use the green enzyme powder in dressings & smoothies — unmatched freshness.</p>
          </div>
        </div>
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/k7V_vCQsntY?rel=0" title="Testimonial 3" allowfullscreen></iframe>
          </div>
          <div class="testimonial-info">
            <h4>Priya Sharma — Yoga & Wellness</h4>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
            <p><i class="fas fa-quote-left"></i> Pure energy, alive enzymes. My digestion has never felt so balanced.</p>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 48px;">
        <button class="btn-primary" onclick="alert('Watch more inspiring videos on our YouTube channel')"><i class="fab fa-youtube"></i> See more video testimonials</button>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top: 20px;">
    <div class="container">
      <div class="cta-modern">
        <i class="fas fa-seedling" style="font-size: 48px; opacity: 0.9; margin-bottom: 16px; display: inline-block;"></i>
        <h2 style="font-size: 2.2rem;">100% pure • lab tested • wild fermentation</h2>
        <p style="max-width: 550px; margin: 16px auto;">Join the enzyme revolution — organic, regenerative, and alive.</p>
        <button class="btn-outline" style="background: white; color:#1E4226; border:none; margin-top: 16px;" onclick="alert('Get your starter kit now!')">Shop all products →</button>
      </div>
    </div>
  </section>
</main>

<footer id="shop">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <div class="logo-area" style="margin-bottom: 16px; justify-content: flex-start;">
          <div class="logo-image" style="background: #5A9E4E;">
            <img src="https://placehold.co/100x100/FFFFFF/2D6A3B?text=🌿" alt="logo">
          </div>
          <div class="logo-text"><h2 style="color:#E0F0D0;">BIO·ENZYME</h2><p style="color:#B1D6A0;">100% organic food & drink</p></div>
        </div>
        <p>Enzymes for life — pure, potent, planet-friendly.</p>
      </div>
      <div class="footer-col">
        <h4>Discover</h4>
        <p><a href="#">Our story</a></p>
        <p><a href="#">Wholesale</a></p>
        <p><a href="#">Lab reports</a></p>
        <p><a href="#">Sustainability</a></p>
      </div>
      <div class="footer-col">
        <h4>Support</h4>
        <p><a href="#">FAQ</a></p>
        <p><a href="#">Shipping</a></p>
        <p><a href="#">Returns</a></p>
        <p><a href="#">Contact us</a></p>
      </div>
      <div class="footer-col">
        <h4>Follow us</h4>
        <div class="social-links">
          <a href="#" aria-label="Facebook" onclick="alert('Visit our Facebook page →')"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="X (Twitter)" onclick="alert('Follow us on X →')"><i class="fab fa-x-twitter"></i></a>
          <a href="#" aria-label="Instagram" onclick="alert('Follow us on Instagram →')"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="TikTok" onclick="alert('Follow us on TikTok →')"><i class="fab fa-tiktok"></i></a>
          <a href="#" aria-label="Messenger" onclick="alert('Chat with us on Messenger →')"><i class="fab fa-facebook-messenger"></i></a>
        </div>
        <p style="margin-top: 20px;"><i class="fas fa-envelope"></i> hello@bioenzyme.com</p>
        <p><i class="fas fa-phone-alt"></i> +1 (800) 123-ENZYME</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 BIO-ENZYME — pure organic drink & food enzyme. Crafted with living cultures.</p>
    </div>
  </div>
</footer>

<!-- Circle Toggle Button (Mobile only) -->
<div class="circle-toggle-btn" id="circleToggleBtn">
  <i class="fas fa-chevron-up"></i>
</div>

<script>
  // ===== CIRCLE TOGGLE BUTTON FOR HERO CONTENT (MOBILE ONLY) =====
  const toggleBtn = document.getElementById('circleToggleBtn');
  const heroContent = document.getElementById('heroContent');
  let isContentVisible = false; // Initially hidden on mobile

  // Only run on mobile view (width <= 1000px)
  function initMobileToggle() {
    if (window.innerWidth <= 1000) {
      // Initially hero content is hidden
      heroContent.classList.remove('visible');
      if (toggleBtn) toggleBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
      isContentVisible = false;
      
      // Add click event to toggle button
      if (toggleBtn) {
        toggleBtn.onclick = function(e) {
          e.stopPropagation();
          if (isContentVisible) {
            // Hide content
            heroContent.classList.remove('visible');
            toggleBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
            isContentVisible = false;
          } else {
            // Show content
            heroContent.classList.add('visible');
            toggleBtn.innerHTML = '<i class="fas fa-chevron-down"></i>';
            isContentVisible = true;
          }
        };
      }
    } else {
      // On desktop, ensure hero content is always visible and button hidden
      if (heroContent) heroContent.classList.add('visible');
      if (toggleBtn) toggleBtn.style.display = 'none';
    }
  }

  // Hamburger Menu Logic
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  const closeMenu = document.getElementById('closeMenu');

  function openMenu() {
    mobileMenu.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMenuFunc() {
    mobileMenu.classList.remove('active');
    document.body.style.overflow = '';
  }

  hamburger.addEventListener('click', openMenu);
  closeMenu.addEventListener('click', closeMenuFunc);
  
  const mobileLinks = mobileMenu.querySelectorAll('a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      closeMenuFunc();
      const targetId = link.getAttribute('href');
      if (targetId && targetId !== "#" && targetId !== "#shop") {
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });

  const cursor = document.querySelector('.custom-cursor');
  if (cursor && window.innerWidth > 1000) {
    document.addEventListener('mousemove', (e) => {
      cursor.style.left = e.clientX - 14 + 'px';
      cursor.style.top = e.clientY - 14 + 'px';
    });
  } else if (cursor && window.innerWidth <= 1000) {
    cursor.style.display = 'none';
  }

  gsap.registerPlugin(ScrollTrigger);
  gsap.utils.toArray('.product-card, .video-card, .cta-modern, .section-title, .section-sub').forEach((el) => {
    gsap.from(el, {
      scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none reverse' },
      opacity: 0, y: 50, duration: 0.8, ease: 'power2.out'
    });
  });

  function initAnimations() {
    const isMobileNow = window.innerWidth <= 1000;
    gsap.killTweensOf('.stack-img-back, .stack-img-left, .stack-img-center, .stack-img-right, .image-stack');
    
    if (!isMobileNow) {
      gsap.set('.stack-img-back', { scale: 0.6, opacity: 0, y: 30, rotation: -2 });
      gsap.set('.stack-img-left', { scale: 0.65, opacity: 0, x: -40, rotation: -6 });
      gsap.set('.stack-img-center', { scale: 0.65, opacity: 0, y: 50, rotation: 2 });
      gsap.set('.stack-img-right', { scale: 0.65, opacity: 0, x: 40, rotation: 5 });

      const masterTimeline = gsap.timeline({ defaults: { duration: 1.1, ease: "back.out(0.65)" } });
      masterTimeline
        .to('.stack-img-back', { scale: 0.94, opacity: 0.9, y: 0, rotation: 0, duration: 1.2 }, 0)
        .to('.stack-img-left', { scale: 1, opacity: 1, x: 0, rotation: 0, duration: 1.1 }, 0.25)
        .to('.stack-img-center', { scale: 1, opacity: 1, y: 0, rotation: 0, duration: 1.1 }, 0.45)
        .to('.stack-img-right', { scale: 1, opacity: 1, x: 0, rotation: 0, duration: 1.1 }, 0.65)
        .to('.image-stack', { y: -6, duration: 2.8, repeat: -1, yoyo: true, ease: "sine.inOut" }, "+=0.3");
    } else {
      gsap.set('.stack-img-back', { scale: 0.8, opacity: 0, y: 30 });
      gsap.set('.stack-img-left', { scale: 0.8, opacity: 0, x: -40, rotation: -5 });
      gsap.set('.stack-img-center', { scale: 0.8, opacity: 0, y: 40, rotation: 3 });
      gsap.set('.stack-img-right', { scale: 0.8, opacity: 0, x: 40, rotation: 5 });
      
      const mobileTimeline = gsap.timeline({ defaults: { duration: 0.8, ease: "back.out(0.7)" } });
      mobileTimeline
        .to('.stack-img-back', { scale: 1, opacity: 0.6, y: 0, rotation: 0, duration: 0.8 }, 0)
        .to('.stack-img-left', { scale: 1, opacity: 0.9, x: 0, rotation: 0, duration: 0.75 }, 0.25)
        .to('.stack-img-center', { scale: 1, opacity: 0.95, y: 0, rotation: 0, duration: 0.75 }, 0.5)
        .to('.stack-img-right', { scale: 1, opacity: 0.9, x: 0, rotation: 0, duration: 0.75 }, 0.75);
      
      setTimeout(() => {
        gsap.to('.image-stack', { y: -4, duration: 3, repeat: -1, yoyo: true, ease: "sine.inOut" });
      }, 1000);
    }
  }
  
  initAnimations();
  initMobileToggle();
  
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      initAnimations();
      initMobileToggle();
      // Reset visibility state
      if (window.innerWidth <= 1000 && heroContent && !heroContent.classList.contains('visible')) {
        // Keep hidden by default
        heroContent.classList.remove('visible');
        if (toggleBtn) toggleBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
        isContentVisible = false;
      } else if (window.innerWidth > 1000 && heroContent) {
        heroContent.classList.add('visible');
        if (toggleBtn) toggleBtn.style.display = 'none';
      } else if (window.innerWidth <= 1000 && toggleBtn) {
        toggleBtn.style.display = 'flex';
      }
    }, 250);
  });

  window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 30) {
      header.style.background = 'rgba(255, 252, 242, 0.95)';
      header.style.backdropFilter = 'blur(16px)';
    } else {
      header.style.background = 'rgba(255, 252, 242, 0.85)';
    }
  });

  document.querySelectorAll('.nav-links a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === "#" || targetId === "") return;
      const target = document.querySelector(targetId);
      if (target && targetId !== '#shop') {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
</script>
</body>
</html>