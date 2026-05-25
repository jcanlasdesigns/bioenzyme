// script.js - Unified JavaScript for Bio Enzyme website

// ==================== CART FUNCTIONALITY ====================
let cart = JSON.parse(localStorage.getItem('bio_cart')) || [];

function saveCart() {
  localStorage.setItem('bio_cart', JSON.stringify(cart));
  updateCartBadge();
  renderCartModal();
}

function updateCartBadge() {
  const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
  const badge = document.getElementById('cartFabBadge');
  if (badge) {
    badge.innerText = totalItems;
    badge.classList.add('pulse');
    setTimeout(() => badge.classList.remove('pulse'), 200);
  }
}

function addToCart(id, name, price) {
  const existing = cart.find(item => item.id === id);
  if (existing) {
    existing.quantity += 1;
  } else {
    cart.push({ id, name, price, quantity: 1 });
  }
  saveCart();
  const fab = document.getElementById('cartFab');
  if (fab) {
    fab.style.transform = 'scale(1.1)';
    setTimeout(() => { fab.style.transform = ''; }, 200);
  }
}

function updateQuantity(id, delta) {
  const index = cart.findIndex(i => i.id === id);
  if (index === -1) return;
  const newQty = cart[index].quantity + delta;
  if (newQty <= 0) {
    cart.splice(index, 1);
  } else {
    cart[index].quantity = newQty;
  }
  saveCart();
}

function removeItem(id) {
  cart = cart.filter(i => i.id !== id);
  saveCart();
}

function renderCartModal() {
  const container = document.getElementById('cartItemsContainer');
  const footerDiv = document.getElementById('cartFooter');
  if (!container) return;
  
  if (cart.length === 0) {
    container.innerHTML = '<div class="empty-cart-msg"><i class="fas fa-seedling" style="font-size: 2rem; margin-bottom: 12px; display: block;"></i>Your cart is empty.<br>Add some enzyme magic!</div>';
    if (footerDiv) footerDiv.style.display = 'none';
    return;
  }
  
  let html = '';
  let total = 0;
  cart.forEach(item => {
    const itemTotal = item.price * item.quantity;
    total += itemTotal;
    html += `
      <div class="cart-item" data-id="${item.id}">
        <div class="cart-item-info">
          <div class="cart-item-name">${item.name}</div>
          <div class="cart-item-price">₱${item.price} each</div>
        </div>
        <div class="cart-item-quantity">
          <button class="qty-btn dec-qty" data-id="${item.id}">−</button>
          <span class="cart-item-qty">${item.quantity}</span>
          <button class="qty-btn inc-qty" data-id="${item.id}">+</button>
        </div>
        <div class="cart-item-total">₱${itemTotal}</div>
        <div class="remove-item" data-id="${item.id}"><i class="fas fa-trash-alt"></i></div>
      </div>
    `;
  });
  container.innerHTML = html;
  if (footerDiv) footerDiv.style.display = 'block';
  const totalSpan = document.getElementById('cartTotalPrice');
  if (totalSpan) totalSpan.innerText = `₱${total}`;
  
  document.querySelectorAll('.dec-qty').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const id = parseInt(btn.getAttribute('data-id'));
      updateQuantity(id, -1);
    });
  });
  document.querySelectorAll('.inc-qty').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const id = parseInt(btn.getAttribute('data-id'));
      updateQuantity(id, 1);
    });
  });
  document.querySelectorAll('.remove-item').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const id = parseInt(btn.getAttribute('data-id'));
      removeItem(id);
    });
  });
}

// ==================== MODAL CONTROLS ====================
const modal = document.getElementById('cartModal');
const fabBtn = document.getElementById('cartFab');
const closeCartBtn = document.getElementById('closeCartBtn');

function openModal() {
  if (modal) {
    renderCartModal();
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal() {
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }
}

if (fabBtn) fabBtn.addEventListener('click', openModal);
if (closeCartBtn) closeCartBtn.addEventListener('click', closeModal);
if (modal) {
  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });
}

// Proceed to payment button - redirects to checkout.html
const proceedBtn = document.getElementById('proceedToPaymentBtn');
if (proceedBtn) {
  proceedBtn.addEventListener('click', () => {
    if (cart.length === 0) {
      alert('Your cart is empty. Add some products first!');
      return;
    }
    window.location.href = 'checkout.html';
  });
}

// ==================== HOMEPAGE ADD TO CART BUTTONS ====================
document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    const card = btn.closest('.product-card');
    if (card) {
      const id = parseInt(card.getAttribute('data-id'));
      const name = card.getAttribute('data-name');
      const price = parseInt(card.getAttribute('data-price'));
      addToCart(id, name, price);
    }
  });
});

// ==================== SHOP PAGE PRODUCTS ====================
const productsData = [
  { id: 1, name: "Citrus Zest Splash", desc: "Bright digestive enzyme concentrate with orange, lemon, ginger.", price: 32, category: "elixir", img: "item-1.png" },
  { id: 2, name: "Raw Apple Cider", desc: "With 'mother' enzymes. Raw, unfiltered, organic apple magic.", price: 28, category: "cider", img: "item-2.png" },
  { id: 3, name: "Green Ferment Powder", desc: "Spirulina, wheatgrass, digestive enzymes — superfood blend.", price: 46, category: "powder", img: "item-3.png" },
  { id: 4, name: "Hibiscus Bloom Elixir", desc: "Floral + antioxidant rich enzyme for glow and gut health.", price: 36, category: "elixir", img: "item-4.png" },
  { id: 5, name: "Turmeric Fire Tonic", desc: "Golden enzyme with turmeric, black pepper & wild honey.", price: 34, category: "elixir", img: "item-1.png" },
  { id: 6, name: "Berry Digest Spark", desc: "Mixed berry ferment for gentle digestion & antioxidant boost.", price: 31, category: "elixir", img: "item-2.png" },
  { id: 7, name: "Moringa Enzyme Powder", desc: "Leafy green superfood + plant enzymes for daily vitality.", price: 42, category: "powder", img: "item-3.png" },
  { id: 8, name: "Ginger Lime Fizz", desc: "Zesty living soda concentrate — probiotic & sugar-free.", price: 29, category: "elixir", img: "item-4.png" }
];

const productsGrid = document.getElementById('productsGrid');
if (productsGrid) {
  const filterBtns = document.querySelectorAll('.filter-btn');
  
  function renderProducts(category) {
    const filtered = category === 'all' ? productsData : productsData.filter(p => p.category === category);
    productsGrid.innerHTML = filtered.map(product => `
      <div class="product-card-shop" data-category="${product.category}">
        <img class="product-img-shop" src="${product.img}" alt="${product.name}">
        <h3>${product.name}</h3>
        <div class="product-desc">${product.desc}</div>
        <div class="price-shop">₱${product.price}</div>
        <button class="add-to-cart" data-id="${product.id}">Add to cart</button>
      </div>
    `).join('');
    
    document.querySelectorAll('.add-to-cart').forEach(btn => {
      btn.addEventListener('click', (e) => {
        const id = parseInt(btn.getAttribute('data-id'));
        const product = productsData.find(p => p.id === id);
        if (product) addToCart(id, product.name, product.price);
      });
    });
  }
  
  renderProducts('all');
  
  if (filterBtns) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const category = btn.getAttribute('data-category');
        renderProducts(category);
      });
    });
  }
}

// ==================== MOBILE MENU ====================
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');

if (hamburger) {
  hamburger.addEventListener('click', () => {
    if (mobileMenu) {
      mobileMenu.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  });
}
if (closeMenu) {
  closeMenu.addEventListener('click', () => {
    if (mobileMenu) {
      mobileMenu.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
}
document.querySelectorAll('.mobile-menu a').forEach(link => {
  link.addEventListener('click', () => {
    if (mobileMenu) {
      mobileMenu.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
});

// ==================== CUSTOM CURSOR ====================
const cursor = document.querySelector('.custom-cursor');
if (cursor && window.innerWidth > 1000) {
  document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.clientX - 14 + 'px';
    cursor.style.top = e.clientY - 14 + 'px';
  });
} else if (cursor) {
  cursor.style.display = 'none';
}

// ==================== GSAP ANIMATIONS ====================
if (typeof gsap !== 'undefined') {
  gsap.registerPlugin(ScrollTrigger);
  gsap.utils.toArray('.product-card, .video-card, .cta-modern, .section-title, .section-sub, .about-grid').forEach((el) => {
    gsap.from(el, {
      scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none reverse' },
      opacity: 0, y: 50, duration: 0.8, ease: 'power2.out'
    });
  });
}

// ==================== HERO IMAGE TOGGLE - IMAGES DISAPPEAR, TEXT TAKES FULL SPACE ====================
const heroVisual = document.getElementById('heroVisual');
const heroContent = document.getElementById('heroContent');
const heroSection = document.getElementById('home');
const toggleBtn = document.getElementById('circleToggleBtn');
let imagesVisible = true;
let animationInProgress = false;

function updateButtonVisibility() {
  if (!toggleBtn) return;
  if (window.innerWidth <= 1000 && heroSection) {
    const heroRect = heroSection.getBoundingClientRect();
    const isHeroInView = heroRect.top <= window.innerHeight / 2 && heroRect.bottom >= window.innerHeight / 4;
    if (isHeroInView && !animationInProgress) {
      toggleBtn.classList.add('visible');
    } else if (!animationInProgress) {
      toggleBtn.classList.remove('visible');
    }
  } else {
    toggleBtn.classList.remove('visible');
  }
}

function hideImages() {
  if (animationInProgress || !heroVisual || !heroContent) return;
  animationInProgress = true;
  
  // Hide images container
  heroVisual.classList.add('images-hidden');
  heroVisual.classList.remove('images-visible');
  
  // Add class to hero content for full width effect
  heroContent.classList.add('text-full');
  
  // Change button icon to show (chevron-up means show images again)
  toggleBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
  imagesVisible = false;
  
  if (typeof gsap !== 'undefined') {
    gsap.to(heroVisual, { 
      duration: 0.5, 
      maxHeight: 0,
      opacity: 0,
      ease: "power2.inOut", 
      onComplete: () => { 
        animationInProgress = false; 
        updateButtonVisibility(); 
      } 
    });
    gsap.to(heroContent, {
      duration: 0.5,
      y: -20,
      scale: 1.02,
      ease: "power2.out"
    });
  } else {
    setTimeout(() => { animationInProgress = false; }, 500);
  }
}

function showImages() {
  if (animationInProgress || !heroVisual || !heroContent) return;
  animationInProgress = true;
  
  // Show images container
  heroVisual.classList.remove('images-hidden');
  heroVisual.classList.add('images-visible');
  
  // Remove full width class from hero content
  heroContent.classList.remove('text-full');
  
  // Change button icon to hide (chevron-down means hide images)
  toggleBtn.innerHTML = '<i class="fas fa-chevron-down"></i>';
  imagesVisible = true;
  
  if (typeof gsap !== 'undefined') {
    gsap.to(heroVisual, { 
      duration: 0.5, 
      maxHeight: 400,
      opacity: 1,
      ease: "back.out(0.5)", 
      onComplete: () => { 
        animationInProgress = false; 
        updateButtonVisibility(); 
      } 
    });
    gsap.to(heroContent, {
      duration: 0.5,
      y: 0,
      scale: 1,
      ease: "power2.out"
    });
  } else {
    setTimeout(() => { animationInProgress = false; }, 500);
  }
}

function initMobileToggle() {
  if (!heroVisual || !heroContent) return;
  if (window.innerWidth <= 1000) {
    // Start with images visible
    heroVisual.classList.add('images-visible');
    heroVisual.classList.remove('images-hidden');
    heroContent.classList.remove('text-full');
    imagesVisible = true;
    if (toggleBtn) toggleBtn.innerHTML = '<i class="fas fa-chevron-down"></i>';
    updateButtonVisibility();
    if (toggleBtn) {
      toggleBtn.onclick = function(e) {
        e.stopPropagation();
        if (animationInProgress) return;
        if (imagesVisible) {
          hideImages();
        } else {
          showImages();
        }
      };
    }
  } else {
    heroVisual.classList.remove('images-hidden', 'images-visible');
    heroContent.classList.remove('text-full');
    if (toggleBtn) toggleBtn.classList.remove('visible');
  }
}

// Desktop animations for hero images
function initAnimations() {
  if (typeof gsap === 'undefined') return;
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
  }
}

if (document.getElementById('imageStack')) {
  initAnimations();
  initMobileToggle();
}

// ==================== SCROLL EVENT FOR HEADER ====================
window.addEventListener('scroll', () => {
  updateButtonVisibility();
  const header = document.querySelector('header');
  if (header) {
    if (window.scrollY > 30) {
      header.style.background = 'rgba(255, 252, 242, 0.95)';
      header.style.backdropFilter = 'blur(16px)';
    } else {
      header.style.background = 'rgba(255, 252, 242, 0.85)';
    }
  }
});

// ==================== RESIZE HANDLER ====================
let resizeTimer;
window.addEventListener('resize', () => {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    if (document.getElementById('imageStack')) {
      // Reset on resize
      if (window.innerWidth <= 1000) {
        heroVisual.classList.add('images-visible');
        heroVisual.classList.remove('images-hidden');
        heroContent.classList.remove('text-full');
        imagesVisible = true;
        if (toggleBtn) toggleBtn.innerHTML = '<i class="fas fa-chevron-down"></i>';
      } else {
        heroVisual.classList.remove('images-hidden', 'images-visible');
        heroContent.classList.remove('text-full');
        if (toggleBtn) toggleBtn.classList.remove('visible');
      }
      updateButtonVisibility();
    }
  }, 250);
});

// ==================== INITIALIZE CART BADGE ====================
updateCartBadge();

// ==================== SMOOTH SCROLL FOR NAV LINKS ====================
document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const href = this.getAttribute('href');
    if (href && href.includes('#') && !href.startsWith('shop') && !href.startsWith('checkout')) {
      e.preventDefault();
      const targetId = href.substring(href.indexOf('#'));
      const target = document.querySelector(targetId);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
        if (mobileMenu) mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
      }
    }
  });
});