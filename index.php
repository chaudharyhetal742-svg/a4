<?php
/**
 * CorduroyFlight — Official Web Portal & Tailoring Showcase
 * @package CorduroyFlight
 * @version 3.5.0
 */
declare(strict_types=1);

$siteTitle = "CorduroyFlight | Heavy-Wale Aviator Jackets & Pilot Outerwear";
$metaDescription = "Engineered corduroy flight jackets constructed with 8-wale English cotton, genuine shearling storm collars, and solid brass hardware.";
$canonicalUrl = "https://corduroyflight.com/";
$currentYear = (int)date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($siteTitle); ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($siteTitle); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="assets/images/hero_corduroy_flight_jacket.jpg">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="favicon.ico">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
</head>
<body>

<header class="site-header">
  <div class="reading-progress-bar"></div>
  <div class="container header-inner">
    <a href="index.php" class="site-logo">
      <div class="logo-symbol">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/></svg>
      </div>
      <span>CorduroyFlight</span>
    </a>
    <nav class="site-nav">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="about.html" class="nav-link ">Heritage</a>
      <a href="index.php#editions" class="nav-link">Flight Editions</a>
      <a href="index.php#anatomy" class="nav-link">Anatomy</a>
      <a href="index.php#sizing" class="nav-link">Sizing Guide</a>
      <a href="blog.html" class="nav-link ">Flight Journal</a>
      <a href="contact.html" class="nav-link ">Contact</a>
    </nav>
    <div class="header-actions">
      <a href="index.php#editions" class="btn btn-primary btn-sm">Explore Jackets</a>
      <button class="mobile-toggle" aria-label="Toggle Menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>
<div class="drawer-backdrop"></div>
<div class="mobile-drawer">
  <div>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem;">
      <span style="font-weight:800;font-size:1.2rem;">CorduroyFlight</span>
      <button class="mobile-drawer-close" style="background:none;border:none;cursor:pointer;" aria-label="Close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div style="display:flex;flex-direction:column;gap:1rem;">
      <a href="index.php" class="nav-link">Home</a>
      <a href="about.html" class="nav-link">Heritage & Atelier</a>
      <a href="index.php#editions" class="nav-link">Flight Editions</a>
      <a href="index.php#anatomy" class="nav-link">Jacket Anatomy</a>
      <a href="index.php#sizing" class="nav-link">Sizing Calibration</a>
      <a href="blog.html" class="nav-link">Flight Journal</a>
      <a href="contact.html" class="nav-link">Contact</a>
      <hr style="border:none;border-top:1px solid #e2e8f0;margin:0.5rem 0;">
      <a href="privacy-policy.html" style="font-size:0.85rem;color:#64748b;">Privacy Policy</a>
      <a href="terms-and-conditions.html" style="font-size:0.85rem;color:#64748b;">Terms of Service</a>
      <a href="disclaimer.html" style="font-size:0.85rem;color:#64748b;">Disclaimer</a>
      <a href="cookie-policy.html" style="font-size:0.85rem;color:#64748b;">Cookie Policy</a>
    </div>
  </div>
</div>

<main>
  <!-- SECTION 1: HERO -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">8-Wale English Cotton & Genuine Shearling</div>
          <h1 class="hero-title">Vintage Flight Heritage.<br><span class="text-highlight">Corduroy Aviator</span> Outerwear.</h1>
          <p class="hero-desc">Bridging open-cockpit military warmth with tailored urban versatility. Heavy-wale corduroy jackets engineered with shearling wind collars, bi-swing shoulder gussets, and solid brass hardware.</p>
          <div class="hero-actions">
            <a href="#editions" class="btn btn-primary btn-lg">Explore Flight Editions</a>
            <a href="#anatomy" class="btn btn-secondary btn-lg">View Technical Anatomy</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <div class="stat-num">8<span>Wale</span></div>
              <div class="stat-label">Heavy Rib Density</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">480<span>GSM</span></div>
              <div class="stat-label">Wind-Block Cotton Weight</div>
            </div>
            <div class="stat-item">
              <div class="stat-num">#10<span>Brass</span></div>
              <div class="stat-label">Two-Way Talon Zipper</div>
            </div>
          </div>
        </div>
        <div>
          <div class="hero-image-wrapper">
            <img src="assets/images/hero_corduroy_flight_jacket.jpg" alt="Corduroy flight jacket with sherpa storm collar" width="600" height="520">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: HERITAGE & AVIATION PHILOSOPHY -->
  <section class="section section-alt" id="philosophy">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">Aviation Textile Heritage</div>
          <h2>From Open-Cockpit Biplanes to Modern Flight Decks</h2>
          <p>During the interwar aviation era of the 1930s, aviators required outerwear capable of resisting sub-zero cockpit slipstreams without the stiff encumbrance of unyielding cowhide. British and French test pilots adopted dense corduroy—a raised pile fabric originally developed for rugged sporting attire—due to its remarkable insulating air chambers and natural flexibility.</p>
          <div class="callout-box">
            "Corduroy was never merely a casual texture; it was an intentional wind-breaking textile engineered with raised ridges that trap boundary-layer thermal air."
          </div>
          <p>CorduroyFlight honors this aviator lineage by combining 480 GSM long-staple cotton corduroy with genuine shearling collar trims, creating jackets built to endure wind chills, cross-country flights, and harsh urban winters.</p>
        </div>
        <div>
          <div style="border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow-lg);">
            <img src="assets/images/vintage_flight_pilot_style.jpg" alt="Heritage aviator pilot flight jacket styling" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: 5-POINT ANATOMY -->
  <section class="section" id="anatomy">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Engineered Anatomy</div>
        <h2 class="section-title">Five Structural Pillars of Flight Jacket Tailoring</h2>
        <p class="section-subtitle">Every seam, flap, gusset, and rivet is calibrated to endure cockpit stress and deliver uncompromised upper-body mobility.</p>
      </div>
      <div class="anatomy-grid">
        <div class="anatomy-card">
          <span class="anatomy-number">01</span>
          <h3>Shearling Storm Throat Latch</h3>
          <p>Lined with plush 15mm Australian merino shearling with dual brass buckle fasteners that seal the neck opening against freezing wind drafts.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">02</span>
          <h3>Bi-Swing Action Back Pleats</h3>
          <p>Hidden telescopic shoulder gussets expand by 3.5 inches during forward arm extension, preventing hem ride-up while gripping steering controls.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">03</span>
          <h3>Dual-Entry Flap Cargo Pockets</h3>
          <p>Engineered with side-entry brushed moleskin hand-warmer pockets beneath buttoned flap compartments designed for maps and flight logs.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">04</span>
          <h3>Heavy 8-Wale Cotton Shell</h3>
          <p>Woven on vintage rapier looms with 480 GSM ring-spun cotton. The dense parallel cords break aerodynamic laminar wind without tearing.</p>
        </div>
        <div class="anatomy-card">
          <span class="anatomy-number">05</span>
          <h3>Diamond-Quilted Primaloft Core</h3>
          <p>Interior body lined with 100 GSM recycled Primaloft Gold thermal insulation encased in down-proof Japanese ripstop nylon.</p>
        </div>
        <div class="anatomy-card" style="background:var(--color-carbon-900);color:var(--color-white);">
          <span class="anatomy-number" style="color:rgba(255,255,255,0.2);">ISO</span>
          <h3 style="color:var(--color-white);">Solid Cast Brass Hardware</h3>
          <p style="color:var(--color-slate-300);">Two-way #10 antique brass zipper with oversized leather pull tab, operable with heavy winter flight gloves.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: SIGNATURE FLIGHT EDITIONS -->
  <section class="section section-alt" id="editions">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Signature Editions</div>
        <h2 class="section-title">Calibrated Flight Jacket Silhouettes</h2>
        <p class="section-subtitle">Choose from tailored aviator silhouettes tuned for different climatic regimes and travel requirements.</p>
      </div>
      <div class="collections-grid">
        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/featured_aviator_bomber.jpg" alt="A-2 Corduroy Aviator Bomber" loading="lazy">
            <span class="card-badge">Flight Iconic</span>
          </div>
          <div class="card-body">
            <h3>A-2 Corduroy Bomber</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">8-wale dark camel corduroy with ribbed wool storm cuffs, snap-down collar points, and interior concealed holster pocket.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$485.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Jacket</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/tailored_shearling_collar.jpg" alt="B-3 Arctic Shearling Flight Jacket" loading="lazy">
            <span class="card-badge">Extreme Arctic</span>
          </div>
          <div class="card-body">
            <h3>B-3 Arctic Shearling Flight</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">Heavyweight corduroy shell backed by full 20mm deep-pile shearling fleece. Designed for open airfields and deep sub-zero conditions.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$620.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Jacket</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/urban_flight_jacket_lifestyle.jpg" alt="G-1 Naval Aviator Flight Jacket" loading="lazy">
            <span class="card-badge">Naval Heritage</span>
          </div>
          <div class="card-body">
            <h3>G-1 Naval Aviator Jacket</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">Midnight navy corduroy with detachable mouton collar, bi-swing back, and dual gusseted underarm ventilation grommets.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$540.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Jacket</a>
            </div>
          </div>
        </div>

        <div class="collection-card">
          <div class="card-image-wrap">
            <img src="assets/images/aviator_silhouette_design.jpg" alt="MA-1 Minimalist Flight Jacket" loading="lazy">
            <span class="card-badge">Modern Tactical</span>
          </div>
          <div class="card-body">
            <h3>MA-1 Minimalist Flight</h3>
            <p style="font-size:0.9rem;color:var(--color-slate-600);margin:0.75rem 0;">12-wale needlecord with baseball collar, emergency rescue orange quilted lining, and utility cigarette arm sleeve pocket.</p>
            <div class="card-footer">
              <span style="font-weight:800;font-size:1.15rem;">$450.00</span>
              <a href="contact.html" class="btn btn-outline btn-sm">Order Jacket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: WALE MATRIX & TEXTILE COMPARISON -->
  <section class="section" id="materials">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Textile Comparison</div>
        <h2 class="section-title">Corduroy Wale Matrix: Ridge Physics Explained</h2>
        <p class="section-subtitle">Wale count indicates the number of distinct cord ridges per linear inch. Here is how corduroy grades compare in outerwear performance.</p>
      </div>
      <div class="matrix-container">
        <table class="matrix-table">
          <thead>
            <tr>
              <th>Corduroy Grade</th>
              <th>Cords Per Inch</th>
              <th>Fabric Weight</th>
              <th>Wind-Block Capacity</th>
              <th>Drape & Texture</th>
              <th>Recommended Outerwear Use</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Elephant / Jumbo Wale</strong></td>
              <td>4 to 6 Wale</td>
              <td>520 GSM</td>
              <td>Extreme (Dense Cushion)</td>
              <td>Heavy, sculptural drape</td>
              <td>Oversized winter overcoats</td>
            </tr>
            <tr>
              <td><strong>Standard Flight Wale (Our Standard)</strong></td>
              <td>8 Wale</td>
              <td>480 GSM</td>
              <td>Superior (Optimal Boundary Air)</td>
              <td>Structured, rugged, supple</td>
              <td>A-2 and B-3 aviator flight jackets</td>
            </tr>
            <tr>
              <td><strong>Medium Needlecord</strong></td>
              <td>12 to 14 Wale</td>
              <td>350 GSM</td>
              <td>Moderate (Light breeze)</td>
              <td>Fluid, velvety, tailored</td>
              <td>Lightweight transitional jackets</td>
            </tr>
            <tr>
              <td><strong>Baby / Pinwale</strong></td>
              <td>16 to 21 Wale</td>
              <td>240 GSM</td>
              <td>Low (Permeable)</td>
              <td>Shirt-weight, soft</td>
              <td>Lining trims and pocketing</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 6: WIND-TUNNEL & THERMAL EFFICIENCY -->
  <section class="section section-alt" id="thermal">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="section-kicker">Thermal Aerodynamics</div>
          <h2>Micro-Air Boundaries and Wind Resistance</h2>
          <p>Flat woven fabrics allow fast-moving airstreams to glide smoothly across their exterior, drawing surface heat away through forced convection. In contrast, corduroy features three-dimensional vertical cut-pile tufts.</p>
          <p>When high-velocity wind encounters the ridged valleys of an 8-wale corduroy jacket, micro-vortices form within each channel. These vortices decelerate the wind speed at the fabric boundary layer, trapping a protective cushion of warm air directly above the weave. Independent wind-tunnel testing verifies that our 480 GSM corduroy shell reduces wind-chill heat loss by 38% compared to standard smooth canvas.</p>
        </div>
        <div>
          <div style="border-radius:var(--radius-xl);overflow:hidden;box-shadow:var(--shadow-xl);">
            <img src="assets/images/pilot_jacket_field_test.jpg" alt="Wind-tunnel flight jacket field testing" loading="lazy">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: LABORATORY TELEMETRY & HARDWARE -->
  <section class="section section-dark" id="telemetry">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker" style="background:rgba(217,119,6,0.2);color:#fde68a;border-color:rgba(217,119,6,0.4);">Aviation Telemetry</div>
        <h2 class="section-title">Tested for Sub-Zero Flight Performance</h2>
        <p class="section-subtitle">Every flight jacket undergoes tensile pull, seam rip-stop, and zero-temperature flexibility verification.</p>
      </div>
      <div class="telemetry-grid">
        <div class="telemetry-card">
          <div class="telemetry-metric">480 GSM</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Pure Cotton Shell</div>
          <p style="font-size:0.85rem;">Woven with 100% long-staple ring-spun cotton for unmatched durability and weather protection.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">15 mm</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Merino Shearling Collar</div>
          <p style="font-size:0.85rem;">Authentic wool shearling throat latch provides natural thermo-regulation and skin comfort.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">220 N</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Seam Burst Resistance</div>
          <p style="font-size:0.85rem;">Triple-stitched lap seams prevent blowouts during intense movement and flight maneuvers.</p>
        </div>
        <div class="telemetry-card">
          <div class="telemetry-metric">#10 Brass</div>
          <div style="font-weight:700;margin-bottom:0.5rem;">Anticorrosive Zipper</div>
          <p style="font-size:0.85rem;">Heavy-duty cast brass teeth resist oxidation from salt spray, humidity, and freezing mist.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: FIELD DISPATCH REPORTS -->
  <section class="section" id="reviews">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Field Reports</div>
        <h2 class="section-title">Verified Aviator & Traveler Dispatches</h2>
        <p class="section-subtitle">Real reports from pilots, overland explorers, and outdoor photographers testing our jackets across extreme weather conditions.</p>
      </div>
      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p>"I wore the B-3 Corduroy Flight jacket during a winter flight tour over the Canadian Rockies. The shearling collar blocked freezing cross-cockpit drafts completely, and the corduroy has developed an incredible vintage patina."</p>
          </div>
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid #e2e8f0;">
            <strong>Capt. Arthur Sterling</strong><br>
            <span style="font-size:0.8rem;color:#64748b;">Bush Pilot & Aerial Surveyor, Alaska</span>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p>"The bi-swing action back pleats make all the difference. Most heavy winter jackets restrict arm mobility when driving or handling gear. The CorduroyFlight A-2 gives you complete freedom of movement without riding up."</p>
          </div>
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid #e2e8f0;">
            <strong>Harrison Vance</strong><br>
            <span style="font-size:0.8rem;color:#64748b;">Automotive Journalist & Endurance Driver</span>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars">★★★★★</div>
            <p>"The tailoring details are magnificent. The moleskin-lined handwarmer pockets, the solid brass zipper, and the heavy 8-wale cotton make this the finest winter outerwear piece I have ever owned. Truly bespoke quality."</p>
          </div>
          <div style="margin-top:1.5rem;padding-top:1rem;border-top:1px solid #e2e8f0;">
            <strong>Julian Moreau</strong><br>
            <span style="font-size:0.8rem;color:#64748b;">Architectural Historian, Montreal</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: SIZING & FIT CALIBRATION -->
  <section class="section section-alt" id="sizing">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Sizing Calibration</div>
        <h2 class="section-title">Flight Jacket Sizing & Layering Matrix</h2>
        <p class="section-subtitle">Our jackets are tailored with an authentic aviator fit—roomy through the chest and shoulders, tapered slightly at the waist.</p>
      </div>
      <div class="matrix-container">
        <table class="sizing-table">
          <thead>
            <tr>
              <th>Jacket Size</th>
              <th>Chest Circumference</th>
              <th>Shoulder Width</th>
              <th>Sleeve Length</th>
              <th>Back Length</th>
              <th>Recommended Body Weight</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Small (38)</strong></td>
              <td>38 – 40 in (96–101 cm)</td>
              <td>18.5 in (47 cm)</td>
              <td>25.5 in (65 cm)</td>
              <td>26.0 in (66 cm)</td>
              <td>135 – 155 lbs (61–70 kg)</td>
            </tr>
            <tr>
              <td><strong>Medium (40)</strong></td>
              <td>40 – 42 in (101–106 cm)</td>
              <td>19.2 in (49 cm)</td>
              <td>26.0 in (66 cm)</td>
              <td>26.5 in (67 cm)</td>
              <td>155 – 175 lbs (70–79 kg)</td>
            </tr>
            <tr>
              <td><strong>Large (42)</strong></td>
              <td>42 – 44 in (106–112 cm)</td>
              <td>20.0 in (51 cm)</td>
              <td>26.5 in (67 cm)</td>
              <td>27.0 in (68 cm)</td>
              <td>175 – 200 lbs (79–90 kg)</td>
            </tr>
            <tr>
              <td><strong>X-Large (44)</strong></td>
              <td>44 – 46 in (112–117 cm)</td>
              <td>20.8 in (53 cm)</td>
              <td>27.0 in (68 cm)</td>
              <td>27.5 in (70 cm)</td>
              <td>200 – 225 lbs (90–102 kg)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 10: EDITORIAL JOURNAL -->
  <section class="section" id="journal">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Flight Journal</div>
        <h2 class="section-title">Aviation History & Outerwear Tailoring</h2>
        <p class="section-subtitle">Deep dive technical articles exploring pilot jackets, corduroy textile physics, shearling care, and military tailoring standards.</p>
      </div>
      <div class="blog-grid">
        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/corduroy_rib_wale_macro.jpg" alt="Physics of 8-Wale Corduroy in Outerwear" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div style="font-size:0.8rem;color:#d97706;font-weight:700;margin-bottom:0.5rem;">TEXTILE SCIENCE • 10 MIN READ</div>
            <h3 style="font-size:1.2rem;margin-bottom:0.5rem;"><a href="blog/the-physics-of-8-wale-corduroy-in-aviation-outerwear.html">The Physics of 8-Wale Corduroy in Aviation Outerwear</a></h3>
            <p style="font-size:0.9rem;color:#64748b;margin-bottom:1rem;">How vertical cord pile channels decelerate laminar wind and create insulating thermal boundaries.</p>
            <a href="blog/the-physics-of-8-wale-corduroy-in-aviation-outerwear.html" style="color:#d97706;font-weight:700;font-size:0.9rem;">Read Full Guide &rarr;</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/tailored_shearling_collar.jpg" alt="Shearling Collar Storm Latch Engineering" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div style="font-size:0.8rem;color:#d97706;font-weight:700;margin-bottom:0.5rem;">AVIATION HISTORY • 9 MIN READ</div>
            <h3 style="font-size:1.2rem;margin-bottom:0.5rem;"><a href="blog/shearling-collar-and-storm-latch-engineering-in-flight-jackets.html">Shearling Collar and Storm Latch Engineering in Flight Jackets</a></h3>
            <p style="font-size:0.9rem;color:#64748b;margin-bottom:1rem;">The evolution of high-altitude cockpit neck protection from RAF biplanes to B-3 bombers.</p>
            <a href="blog/shearling-collar-and-storm-latch-engineering-in-flight-jackets.html" style="color:#d97706;font-weight:700;font-size:0.9rem;">Read Full Guide &rarr;</a>
          </div>
        </div>

        <div class="blog-card">
          <div class="blog-card-media">
            <img src="assets/images/vintage_cockpit_aviator.jpg" alt="The Evolution of Military Aviator Silhouettes" loading="lazy">
          </div>
          <div class="blog-card-body">
            <div style="font-size:0.8rem;color:#d97706;font-weight:700;margin-bottom:0.5rem;">MILITARY ARCHIVE • 9 MIN READ</div>
            <h3 style="font-size:1.2rem;margin-bottom:0.5rem;"><a href="blog/the-evolution-of-military-aviator-silhouettes-from-a2-to-b3.html">The Evolution of Military Aviator Silhouettes: From A-2 to B-3</a></h3>
            <p style="font-size:0.9rem;color:#64748b;margin-bottom:1rem;">Comparing pocket geometry, sleeve articulation, and bi-swing backs in twentieth-century military outerwear.</p>
            <a href="blog/the-evolution-of-military-aviator-silhouettes-from-a2-to-b3.html" style="color:#d97706;font-weight:700;font-size:0.9rem;">Read Full Guide &rarr;</a>
          </div>
        </div>
      </div>
      <div style="text-align:center;margin-top:2.5rem;">
        <a href="blog.html" class="btn btn-secondary">View All 6 Publications &rarr;</a>
      </div>
    </div>
  </section>

  <!-- SECTION 11: ACCORDION FAQ -->
  <section class="section section-alt" id="faq">
    <div class="container">
      <div class="section-header">
        <div class="section-kicker">Knowledge Base</div>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Everything you need to know about corduroy outerwear maintenance, rain resistance, and custom tailoring.</p>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">
            <span>Is corduroy warm enough for freezing winter conditions?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Yes. Our flight jackets feature a heavy 480 GSM 8-wale cotton shell backed by 100 GSM Primaloft Gold thermal insulation and genuine shearling storm collars. They are comfort-rated down to -10°C (14°F) with standard layering.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>Can a corduroy flight jacket be worn in wet rain and snow?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Our corduroy jackets are treated with an eco-friendly water-repellent finish that causes light rain and snow to bead and roll off. For heavy torrential downpours, natural cotton will absorb water over time, so an umbrella or technical hardshell is advised.</p>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span>How should I clean and maintain my corduroy jacket?</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Because of the shearling collar and structured internal interfacing, professional dry cleaning by a specialist familiar with leather and heavy outerwear is recommended once per season. Minor surface dust can be removed using a natural bristle garment brush.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 12: BESPOKE CTA -->
  <section class="section">
    <div class="container">
      <div class="cta-banner">
        <div class="section-kicker" style="background:rgba(255,255,255,0.15);color:#fff;border-color:rgba(255,255,255,0.3);">Mercer Street Atelier Dispatch</div>
        <h2>Commission Your Bespoke Flight Jacket</h2>
        <p>Subscribe for quarterly aviation tailoring chronicles, limited fabric release notifications, and private showroom invitations at 181 Mercer Street.</p>
        <form class="cta-form">
          <input type="email" class="cta-input" required aria-label="Email address" value="pilot@corduroyflight.com">
          <button type="submit" class="btn btn-primary">Join Flight Log</button>
        </form>
      </div>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="site-logo">
          <div class="logo-symbol">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/></svg>
          </div>
          <span>CorduroyFlight</span>
        </a>
        <p>CorduroyFlight builds heavy-wale cotton flight jackets engineered with authentic shearling storm collars, solid brass two-way zippers, and quilted thermal linings. Tailored heritage outerwear inspired by military aviation history.</p>
      </div>
      <div class="footer-col">
        <h4>Aviation Outerwear</h4>
        <ul class="footer-links">
          <li><a href="index.php">Home Dispatch</a></li>
          <li><a href="about.html">Atelier & Heritage</a></li>
          <li><a href="index.php#editions">Flight Jacket Editions</a></li>
          <li><a href="index.php#anatomy">Jacket Engineering</a></li>
          <li><a href="index.php#sizing">Sizing Calibration</a></li>
          <li><a href="blog.html">Aviation Journal</a></li>
          <li><a href="contact.html">Concierge Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal Standards</h4>
        <ul class="footer-links">
          <li><a href="privacy-policy.html">Privacy Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
          <li><a href="disclaimer.html">Outerwear Disclaimer</a></li>
          <li><a href="cookie-policy.html">Cookie Policy</a></li>
          <li><a href="sitemap.xml">XML Sitemap</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Atelier Headquarters</h4>
        <div style="margin-bottom:0.75rem;font-size:0.9rem;">
          <strong>Address:</strong><br>
          181 Mercer Street, New York, NY 10012, United States
        </div>
        <div style="margin-bottom:0.75rem;font-size:0.9rem;">
          <strong>Telephone:</strong><br>
          +1-888-777-5845
        </div>
        <div style="font-size:0.9rem;">
          <strong>Dispatch:</strong><br>
          hangar@corduroyflight.com
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 CorduroyFlight. All rights reserved. Precision-engineered corduroy flight outerwear.</p>
      <div style="display:flex;gap:1.5rem;">
        <a href="privacy-policy.html">Privacy</a>
        <a href="terms-and-conditions.html">Terms</a>
        <a href="disclaimer.html">Disclaimer</a>
        <a href="cookie-policy.html">Cookies</a>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/main.js"></script>

</body>
</html>
