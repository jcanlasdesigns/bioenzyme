<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Bio Enzyme | 100% Organic Living</title>
  <!-- Google Fonts: fresh & clean organic vibe -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
  <!-- Font Awesome 6 (free icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #FEFAF5;
      font-family: 'Inter', sans-serif;
      color: #2C3E2F;
      scroll-behavior: smooth;
    }

    h1, h2, h3, .logo-text {
      font-family: 'Playfair Display', serif;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 32px;
    }

    /* ===== HEADER / NAV ===== */
    header {
      background: rgba(255, 252, 245, 0.96);
      backdrop-filter: blur(4px);
      position: sticky;
      top: 0;
      z-index: 100;
      border-bottom: 1px solid #E2E0D4;
      padding: 16px 0;
    }

    .nav-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    /* custom logo from reference: "100% TURA Premium enzyme" inspired badge */
    .logo-icon {
      background: #3C6E47;
      width: 52px;
      height: 52px;
      border-radius: 60% 40% 50% 50% / 45% 50% 50% 55%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 6px 14px rgba(60, 110, 71, 0.2);
    }

    .logo-icon span {
      font-size: 28px;
      font-weight: 700;
      color: #F9E5A7;
      font-family: 'Playfair Display', serif;
    }

    .logo-text h2 {
      font-size: 1.7rem;
      letter-spacing: -0.3px;
      color: #2C5A2E;
    }

    .logo-text p {
      font-size: 0.75rem;
      letter-spacing: 2px;
      font-weight: 500;
      color: #7C6E4B;
    }

    .nav-links {
      display: flex;
      gap: 32px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 500;
      color: #2C3E2F;
      transition: 0.2s;
      font-size: 1rem;
    }

    .nav-links a:hover, .nav-links a.active {
      color: #568F5E;
      border-bottom: 2px solid #93C47D;
      padding-bottom: 4px;
    }

    .btn-organic {
      background-color: #568F5E;
      color: white !important;
      padding: 8px 20px;
      border-radius: 40px;
      border: none;
      transition: 0.2s;
    }

    .btn-organic:hover {
      background-color: #3C6E47;
      transform: translateY(-2px);
    }

    /* hero */
    .hero {
      padding: 70px 0 60px;
      background: linear-gradient(135deg, #FFF8ED 0%, #F4EDE1 100%);
    }

    .hero-grid {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
    }

    .hero-content {
      flex: 1;
    }

    .hero-badge {
      background: #E9F0E4;
      display: inline-block;
      padding: 6px 14px;
      border-radius: 40px;
      font-size: 0.8rem;
      font-weight: 600;
      color: #3C6E47;
      margin-bottom: 20px;
    }

    .hero-content h1 {
      font-size: 3.4rem;
      line-height: 1.2;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .highlight {
      color: #4A7C5C;
      border-bottom: 3px solid #C3E0B0;
    }

    .hero-content p {
      font-size: 1.1rem;
      line-height: 1.5;
      margin-bottom: 32px;
      color: #4A5B44;
      max-width: 90%;
    }

    .hero-stats {
      display: flex;
      gap: 32px;
      margin-bottom: 32px;
    }

    .stat h3 {
      font-size: 1.8rem;
      font-weight: 700;
      font-family: 'Playfair Display';
    }

    .hero-image {
      flex: 1;
      background: #E2DCCF;
      border-radius: 48px;
      min-height: 320px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url('https://placehold.co/600x450/E9E2D4/FFFFFF?text=🍃+100%+Natural+Enzyme');
      background-size: cover;
      background-position: center;
      box-shadow: 0 20px 35px -12px rgba(0,0,0,0.1);
      position: relative;
    }
    /* decorative overlay */
    .hero-image::after {
      content: "🌿 100% PURE";
      position: absolute;
      bottom: 20px;
      right: 20px;
      background: rgba(60, 110, 71, 0.8);
      backdrop-filter: blur(4px);
      padding: 6px 14px;
      border-radius: 40px;
      color: white;
      font-size: 0.8rem;
      font-weight: 600;
    }

    /* products section */
    .section {
      padding: 80px 0;
    }

    .section-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 600;
      margin-bottom: 14px;
    }

    .section-sub {
      text-align: center;
      color: #6A7A60;
      margin-bottom: 48px;
      font-size: 1rem;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
      gap: 40px;
    }

    .product-card {
      background: white;
      border-radius: 32px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.03);
      transition: all 0.25s ease;
      border: 1px solid #F0E7DA;
      text-align: center;
      padding-bottom: 28px;
    }

    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 30px -12px rgba(60, 70, 40, 0.12);
      border-color: #D1DFC0;
    }

    .product-img {
      height: 230px;
      background: #F7F1E6;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 72px;
    }

    .product-card h3 {
      margin: 20px 0 8px;
      font-size: 1.7rem;
    }

    .product-desc {
      padding: 0 20px;
      color: #5D6E53;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }

    .price {
      font-weight: 700;
      font-size: 1.4rem;
      color: #3C6E47;
      margin-bottom: 18px;
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid #568F5E;
      padding: 8px 24px;
      border-radius: 40px;
      font-weight: 600;
      color: #3C6E47;
      transition: 0.2s;
      cursor: pointer;
      font-family: inherit;
    }

    .btn-outline:hover {
      background: #568F5E;
      color: white;
    }

    /* VIDEO TESTIMONIALS SECTION */
    .testimonial-section {
      background: #F1EFE7;
    }

    .video-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .video-card {
      background: #FFFCF8;
      border-radius: 28px;
      overflow: hidden;
      width: 320px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.05);
      transition: 0.2s;
    }

    .video-wrapper {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%; /* 16:9 ratio */
      background: #2B3B26;
    }

    .video-wrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .testimonial-meta {
      padding: 20px 18px;
    }

    .testimonial-meta h4 {
      font-family: 'Playfair Display';
      font-size: 1.2rem;
      margin-bottom: 6px;
    }

    .stars {
      color: #F4B942;
      margin: 8px 0;
      letter-spacing: 2px;
    }

    .quote {
      font-style: italic;
      font-size: 0.9rem;
      color: #4F5C47;
      margin-top: 8px;
    }

    /* CTA + enzyme badge */
    .cta-area {
      background: #3C6E47;
      color: white;
      text-align: center;
      padding: 60px 20px;
      border-radius: 60px;
      margin: 30px 0 20px;
    }

    .cta-area h2 {
      font-size: 2rem;
    }

    .btn-white {
      background: white;
      color: #3C6E47;
      border: none;
      padding: 12px 36px;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1rem;
      margin-top: 20px;
      display: inline-block;
      transition: 0.2s;
    }

    .btn-white:hover {
      background: #FFECCF;
      transform: scale(1.02);
    }

    footer {
      background: #E5DFD2;
      padding: 40px 0;
      text-align: center;
      color: #3D4F35;
      font-size: 0.85rem;
    }

    @media (max-width: 800px) {
      .nav-flex {
        flex-direction: column;
      }
      .hero-content h1 {
        font-size: 2.4rem;
      }
      .hero-content p {
        max-width: 100%;
      }
      .container {
        padding: 0 20px;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="container nav-flex">
    <div class="logo-area">
      <div class="logo-icon">
        <span>🌱</span>
      </div>
      <div class="logo-text">
        <h2>TURA<span style="font-weight:400"> Premium</span></h2>
        <p>100% PURE ENZYME • ORGANIC LIVING</p>
      </div>
    </div>
    <div class="nav-links">
      <a href="#home" class="active">Home</a>
      <a href="#products">Products</a>
      <a href="#testimonials">Testimonials</a>
      <a href="#contact" class="btn-organic">Shop Now</a>
    </div>
  </div>
</header>

<main>
  <!-- hero section -->
  <section id="home" class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <div class="hero-badge"><i class="fas fa-leaf"></i> 100% Certified Organic</div>
        <h1>Nature’s living <span class="highlight">bio enzyme</span> for vitality & wellness</h1>
        <p>Pure fermentation crafted from organic fruits, wild botanicals & raw earth minerals. Drink clean, eat pure, live enzyme‑rich.</p>
        <div class="hero-stats">
          <div class="stat"><h3>15+</h3><p>Years Heritage</p></div>
          <div class="stat"><h3>100%</h3><p>Plant-Based</p></div>
          <div class="stat"><h3>0%</h3><p>Preservatives</p></div>
        </div>
        <button class="btn-outline" style="background:#568F5E; color:white; border:none;" onclick="alert('Welcome to TURA enzyme family! Explore our shop.')">Explore collection <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="hero-image">
        <!-- decorative image background with text overlay -->
      </div>
    </div>
  </section>

  <!-- PRODUCTS OFFERED section -->
  <section id="products" class="section">
    <div class="container">
      <h2 class="section-title">🌾 our enzyme elixirs</h2>
      <div class="section-sub">crafted with traditional fermentation • 100% raw & alive</div>
      <div class="products-grid">
        <!-- product 1 -->
        <div class="product-card">
          <div class="product-img">🍊🍃</div>
          <h3>Citrus Zest + Enzyme</h3>
          <div class="product-desc">Wild fermented oranges, lemons & ginger root. Bright digestive support.</div>
          <div class="price">$32 <span style="font-size:0.8rem;">/ 500ml</span></div>
          <button class="btn-outline" onclick="alert('Added Citrus Enzyme to bag 🍊')">Add to cart</button>
        </div>
        <!-- product 2 -->
        <div class="product-card">
          <div class="product-img">🍎🌿</div>
          <h3>Apple Cider Living</h3>
          <div class="product-desc">Raw organic apple enzyme with “mother”. Probiotic rich & tangy.</div>
          <div class="price">$28 <span style="font-size:0.8rem;">/ 500ml</span></div>
          <button class="btn-outline" onclick="alert('Added Apple Cider Living Enzyme')">Add to cart</button>
        </div>
        <!-- product 3 -->
        <div class="product-card">
          <div class="product-img">🌺🍯</div>
          <h3>Hibiscus Bloom Enzyme</h3>
          <div class="product-desc">Floral, antioxidant boost. Hibiscus + raw honey infusion.</div>
          <div class="price">$34 <span style="font-size:0.8rem;">/ 500ml</span></div>
          <button class="btn-outline" onclick="alert('Added Hibiscus Bloom Enzyme')">Add to cart</button>
        </div>
        <!-- product 4 -->
        <div class="product-card">
          <div class="product-img">🥬💧</div>
          <h3>Greens Ferment Powder</h3>
          <div class="product-desc">Spirulina, wheatgrass & digestive enzymes – sprinkle on food or drink.</div>
          <div class="price">$45 <span style="font-size:0.8rem;">/ 200g</span></div>
          <button class="btn-outline" onclick="alert('Added Greens Ferment Powder')">Add to cart</button>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO TESTIMONIALS SECTION (embedded with YouTube demo & authentic vibe) -->
  <section id="testimonials" class="testimonial-section section">
    <div class="container">
      <h2 class="section-title">🎥 real stories • video testimonials</h2>
      <div class="section-sub">Hear from our community how TURA enzymes transformed their wellness journey</div>
      <div class="video-grid">
        <!-- Video Card 1: embed a genuine short testimonial (example video placeholder but actual genuine content) -->
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?start=5&autoplay=0&rel=0&modestbranding=1" 
                    title="Testimonial 1 - enzyme wellness" allowfullscreen></iframe>
          </div>
          <div class="testimonial-meta">
            <h4>✨ Maria S. <span style="font-weight:normal; font-size:0.8rem;">@marias.organiclife</span></h4>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <div class="quote">“Since switching to TURA enzyme drink, my digestion and energy have never been better! 100% pure magic.”</div>
          </div>
        </div>
        <!-- Video Card 2: embed an authentic looking nature/wellness video (example using a fermentation clip) -->
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/5P3HeQk8dM4?rel=0" 
                    title="Testimonial 2 - daily enzyme ritual" allowfullscreen></iframe>
          </div>
          <div class="testimonial-meta">
            <h4>🌿 David Chen — Chef & Wellness Coach</h4>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <div class="quote">“TURA enzymes are the core of my kitchen. From smoothies to salad dressings – incredible flavor & life.”</div>
          </div>
        </div>
        <!-- Video Card 3: testimonial style with a nature vibe -->
        <div class="video-card">
          <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/k7V_vCQsntY?rel=0" 
                    title="Client testimonial - pure organic enzyme" allowfullscreen></iframe>
          </div>
          <div class="testimonial-meta">
            <h4>🍃 Anita R. — Yoga Instructor</h4>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
            <div class="quote">“This enzyme is a game-changer for my gut health. Light, refreshing, and truly alive. Love it!”</div>
          </div>
        </div>
      </div>
      <div style="text-align:center; margin-top: 40px;">
        <button class="btn-outline" style="border-color:#568F5E;" onclick="alert('Watch more testimonials on our YouTube channel 🌱')"><i class="fab fa-youtube"></i> More video stories</button>
      </div>
    </div>
  </section>

  <!-- why bio enzyme + 100% guarantee -->
  <section class="section">
    <div class="container">
      <div class="cta-area">
        <i class="fas fa-certificate" style="font-size: 48px; opacity: 0.8;"></i>
        <h2>100% pure • no additives • lab tested</h2>
        <p style="max-width: 600px; margin: 16px auto;">Every batch is fermented for 6+ months using traditional Korean and European methods. Vegan, gluten-free, and certified organic enzyme concentrates.</p>
        <a href="#" class="btn-white" onclick="alert('Get your TURA enzyme starter kit!')">Shop the complete bundle →</a>
      </div>

      <!-- extra product offering: drink & food ideas -->
      <div style="margin-top: 70px;">
        <h2 class="section-title" style="font-size: 1.8rem;">🍽️ enzyme for food & drinks</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center; margin-top: 30px;">
          <div style="background: #FCF8F0; border-radius: 24px; padding: 20px 28px; width: 250px; text-align: center;">
            <i class="fas fa-blender" style="font-size: 40px; color: #568F5E;"></i>
            <h3 style="margin: 10px 0;">Smoothies</h3>
            <p style="font-size: 0.85rem;">Add 1 tbsp of enzyme elixir for gut-boosting smoothies</p>
          </div>
          <div style="background: #FCF8F0; border-radius: 24px; padding: 20px 28px; width: 250px; text-align: center;">
            <i class="fas fa-salad" style="font-size: 40px; color: #568F5E;"></i>
            <h3 style="margin: 10px 0;">Salad Dressings</h3>
            <p style="font-size: 0.85rem;">Enzyme infused vinaigrette – raw & delicious</p>
          </div>
          <div style="background: #FCF8F0; border-radius: 24px; padding: 20px 28px; width: 250px; text-align: center;">
            <i class="fas fa-mug-hot" style="font-size: 40px; color: #568F5E;"></i>
            <h3 style="margin: 10px 0;">Warm Tonics</h3>
            <p style="font-size: 0.85rem;">Stir into hot water with lemon – daily wellness ritual</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer id="contact">
  <div class="container">
    <div class="logo-area" style="justify-content: center; margin-bottom: 24px;">
      <div class="logo-icon" style="background:#B0C48C;"><span>🌿</span></div>
      <div class="logo-text"><h2 style="color:#2C5A2E;">TURA Premium enzyme</h2><p>100% organic • food & drink revolution</p></div>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 32px; margin-bottom: 24px;">
      <a href="#" style="color:#3D4F35; text-decoration: none;">🌱 Our story</a>
      <a href="#" style="color:#3D4F35; text-decoration: none;">📦 Wholesale</a>
      <a href="#" style="color:#3D4F35; text-decoration: none;">🧪 Lab results</a>
      <a href="#" style="color:#3D4F35; text-decoration: none;">📞 Contact</a>
      <a href="#" style="color:#3D4F35; text-decoration: none;"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
    <p style="font-size: 0.75rem;">© 2025 TURA Bio-Enzyme — fermented with love, 100% pure organic drink & food enzyme. All rights reserved.</p>
    <p style="margin-top: 12px;"><i class="fas fa-leaf"></i> Certified Organic | Non-GMO | Plastic Neutral</p>
  </div>
</footer>

<!-- simple interactive enhancement -->
<script>
  // smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if(targetId === "#" || targetId === "") return;
      const targetElement = document.querySelector(targetId);
      if(targetElement) {
        e.preventDefault();
        targetElement.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // active link highlighting on scroll (basic)
  window.addEventListener('scroll', () => {
    let sections = document.querySelectorAll('section');
    let scrollPos = window.scrollY + 100;
    sections.forEach(section => {
      if(section.id && document.getElementById(section.id)) {
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
</script>
</body>
</html>