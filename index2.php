<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RegalKaratJewel | Designed with artistry, treasured for a lifetime.</title>
<meta name="description" content="RegalKaratJewel — timeless fine jewellery collections crafted with exceptional artistry. Explore diamond rings, gold necklaces, bracelets, earrings and bridal collections. New York, USA.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --parchment:#F2ECDF;
    --parchment-deep:#E9E0CC;
    --ink:#1C1712;
    --oxblood:#5C1620;
    --oxblood-deep:#3E0F16;
    --brass:#A9834E;
    --brass-light:#CBA76B;
    --forest:#22331F;
    --text-soft:#5C5648;
    --serif:'Playfair Display', serif;
    --sans:'Poppins', sans-serif;
    --rule: rgba(28,23,18,0.15);
  }
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    font-family:var(--sans);
    background:var(--parchment);
    color:var(--ink);
    overflow-x:hidden;
    -webkit-font-smoothing:antialiased;
  }
  a{text-decoration:none;color:inherit;}
  ul{list-style:none;}
  img{max-width:100%;display:block;}
  button{font-family:var(--sans);cursor:pointer;border:none;background:none;}
  ::selection{background:var(--oxblood);color:var(--parchment);}

  .lot-num{
    font-family:var(--serif);font-style:italic;font-weight:600;
    font-size:.95rem;color:var(--brass);letter-spacing:.04em;
  }
  .eyebrow{
    font-family:var(--sans);letter-spacing:.28em;text-transform:uppercase;
    font-size:.68rem;color:var(--brass);font-weight:500;
  }
  .section-heading{
    font-family:var(--serif);font-weight:600;font-size:clamp(2rem,4vw,3.1rem);
    line-height:1.16;margin-top:.5rem;color:var(--ink);
  }
  .section-sub{
    font-family:var(--sans);font-weight:300;color:var(--text-soft);
    max-width:600px;line-height:1.85;font-size:1rem;margin-top:1rem;
  }
  .section-head{max-width:720px;margin:0 auto 3.6rem;}
  .section-head.center{text-align:center;}
  .rule{width:100%;height:1px;background:var(--rule);margin:1.4rem 0;}
  .rule.short{width:70px;height:2px;background:var(--brass);}
  .section-head.center .rule.short{margin-left:auto;margin-right:auto;}

  .container{max-width:1280px;margin:0 auto;padding:0 6vw;}
  section{padding:7rem 0;}
  @media(max-width:768px){section{padding:4rem 0;}}

  .reveal{opacity:0;transform:translateY(24px);transition:opacity .9s ease, transform .9s ease;}
  .reveal.in{opacity:1;transform:translateY(0);}

  /* ===== TICKER ===== */
  .ticker-bar{
    background:var(--ink);color:var(--brass-light);
    font-size:.7rem;letter-spacing:.22em;text-transform:uppercase;
    padding:.55rem 0;overflow:hidden;white-space:nowrap;position:relative;z-index:1001;
  }
  .ticker-track{display:inline-block;padding-left:100%;animation:ticker 26s linear infinite;}
  .ticker-track span{margin:0 2.5rem;}
  @keyframes ticker{from{transform:translateX(0);}to{transform:translateX(-100%);}}

  /* ===== HEADER ===== */
  header{
    position:fixed;top:28px;left:0;width:100%;z-index:1000;
    padding:1.4rem 0;transition:background .5s ease, padding .5s ease, top .3s ease, box-shadow .5s ease;
  }
  header.scrolled{
    background:rgba(242,236,223,.94);backdrop-filter:blur(12px);
    padding:.85rem 0;box-shadow:0 1px 0 var(--rule);top:0;
  }
  .nav-wrap{max-width:1280px;margin:0 auto;padding:0 6vw;display:flex;align-items:center;justify-content:space-between;}
  .logo{font-family:var(--serif);font-size:1.5rem;letter-spacing:.05em;color:black;font-weight:700;transition:color .5s ease;}
  .logo em{font-style:italic;color:var(--brass-light);}
  header.scrolled .logo{color:var(--ink);}
  header.scrolled .logo em{color:var(--oxblood);}

  .nav-links{display:flex;gap:2.3rem;align-items:center;}
  .nav-links a{font-size:.82rem;letter-spacing:.05em;color:black;font-weight:400;position:relative;padding-bottom:4px;transition:color .5s ease;}
  header.scrolled .nav-links a{color:var(--ink);}
  .nav-links a::after{content:'';position:absolute;left:0;bottom:0;width:0;height:1px;background:var(--brass);transition:width .35s ease;}
  .nav-links a:hover::after{width:100%;}
  .nav-links a:hover{color:var(--brass-light);}
  header.scrolled .nav-links a:hover{color:var(--oxblood);}

  .nav-cta{border:1px solid var(--brass);color:black!important;padding:.55rem 1.3rem;font-size:.76rem;letter-spacing:.06em;transition:.4s ease;}
  header.scrolled .nav-cta{color:var(--ink)!important;border-color:var(--oxblood);}
  .nav-cta:hover{background:var(--brass);color:var(--ink)!important;}
  header.scrolled .nav-cta:hover{background:var(--oxblood);color:var(--parchment)!important;}

  .menu-toggle{display:none;flex-direction:column;gap:5px;width:26px;}
  .menu-toggle span{height:1px;width:100%;background:var(--parchment);transition:.4s;}
  header.scrolled .menu-toggle span{background:var(--ink);}

  @media(max-width:920px){
    .nav-links{position:fixed;top:0;right:-100%;height:100vh;width:min(78vw,340px);background:var(--oxblood-deep);flex-direction:column;justify-content:center;gap:2.1rem;transition:right .5s cubic-bezier(.77,0,.18,1);}
    .nav-links.open{right:0;}
    .nav-links a{color:var(--parchment)!important;font-size:1rem;}
    .nav-cta{color:var(--brass-light)!important;border-color:var(--brass-light);}
    .menu-toggle{display:flex;z-index:1001;}
  }

  /* ===== HERO — split editorial ===== */
  .hero{position:relative;display:grid;grid-template-columns:1.15fr .85fr;min-height:100vh;}
  .hero-img{
    background:linear-gradient(180deg, rgba(28,23,18,.15), rgba(28,23,18,.5)),
      url('banner.png') center/cover no-repeat;
  }
  .hero-panel{
    background:var(--oxblood-deep);color:var(--parchment);
    display:flex;flex-direction:column;justify-content:center;
    padding:8vw 4.5vw;position:relative;
  }
  .hero-panel::before{
    content:'';position:absolute;left:0;top:14%;bottom:14%;width:1px;background:rgba(203,167,107,.4);
  }
  .hero-tag{font-family:var(--serif);font-style:italic;font-size:.85rem;color:var(--brass-light);letter-spacing:.06em;margin-bottom:1.6rem;padding-left:2rem;}
  .hero h1{
    font-family:var(--serif);font-size:clamp(2.1rem,4.4vw,3.3rem);line-height:1.16;font-weight:700;
    padding-left:2rem;margin-bottom:1.6rem;
  }
  .hero p{
    font-weight:300;font-size:1rem;line-height:1.9;color:rgba(242,236,223,.75);
    padding-left:2rem;max-width:460px;margin-bottom:2.4rem;
  }
  .btn-row{display:flex;gap:1rem;flex-wrap:wrap;padding-left:2rem;}
  .btn{padding:.95rem 2rem;font-size:.76rem;letter-spacing:.1em;text-transform:uppercase;transition:.4s ease;display:inline-block;border:1px solid transparent;}
  .btn-primary{background:var(--brass);color:var(--ink);}
  .btn-primary:hover{background:var(--brass-light);}
  .btn-outline{border:1px solid rgba(242,236,223,.5);color:var(--parchment);}
  .btn-outline:hover{border-color:var(--brass-light);color:var(--brass-light);}
  .hero-est{
    position:absolute;bottom:2.6rem;left:2rem+2rem;padding-left:2rem;
    font-size:.68rem;letter-spacing:.2em;color:rgba(242,236,223,.4);text-transform:uppercase;
  }
  @media(max-width:920px){
    .hero{grid-template-columns:1fr;}
    .hero-img{min-height:44vh;}
    .hero-panel{padding:3.4rem 6vw 4rem;}
    .hero-tag,.hero h1,.hero p,.btn-row{padding-left:0;}
    .hero-panel::before{display:none;}
    .hero-est{position:static;margin-top:2.4rem;padding-left:0;}
  }

  /* ===== ABOUT ===== */
  .about{background:var(--parchment);}
  .about-grid{display:grid;grid-template-columns:.42fr .58fr;gap:0;align-items:stretch;}
  .about-img{position:relative;overflow:hidden;}
  .about-img img{width:100%;height:100%;object-fit:cover;min-height:520px;}
  .about-text{
    background:var(--parchment-deep);padding:5rem 4.5vw;display:flex;flex-direction:column;justify-content:center;
    border-top:1px solid var(--rule);border-bottom:1px solid var(--rule);
  }
  .stats-row{display:flex;gap:0;margin-top:2.6rem;border-top:1px solid var(--rule);}
  .stat{flex:1;padding:1.6rem 1rem 0 0;border-right:1px solid var(--rule);}
  .stat:last-child{border-right:none;}
  .stat b{font-family:var(--serif);font-size:1.7rem;color:var(--oxblood);display:block;font-weight:700;}
  .stat span{font-size:.72rem;color:var(--text-soft);letter-spacing:.02em;display:block;margin-top:.3rem;line-height:1.4;}
  @media(max-width:900px){
    .about-grid{grid-template-columns:1fr;}
    .about-img img{min-height:340px;}
    .stats-row{flex-wrap:wrap;}
    .stat{flex:1 1 50%;border-right:none;border-bottom:1px solid var(--rule);padding-bottom:1.2rem;margin-bottom:1.2rem;}
  }

  /* ===== COLLECTIONS — catalogue list ===== */
  .collections{background:var(--parchment);}
  .lot-row{
    display:grid;grid-template-columns:110px 240px 1fr auto;gap:2.6rem;align-items:center;
    padding:2.4rem 0;border-top:1px solid var(--rule);
  }
  .lot-row:last-child{border-bottom:1px solid var(--rule);}
  .lot-thumb{width:100%;height:150px;overflow:hidden;position:relative;}
  .lot-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .9s cubic-bezier(.2,.8,.2,1);}
  .lot-row:hover .lot-thumb img{transform:scale(1.07);}
  .lot-info h3{font-family:var(--serif);font-size:1.5rem;font-weight:600;margin-bottom:.55rem;}
  .lot-info p{font-size:.9rem;color:var(--text-soft);line-height:1.75;font-weight:300;max-width:480px;}
  .lot-meta{font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;color:var(--brass);margin-top:.7rem;}
  .lot-cta{
    font-size:.76rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink);
    padding-bottom:4px;border-bottom:1px solid var(--ink);white-space:nowrap;
    transition:.35s ease;position:relative;
  }
  .lot-row:hover .lot-cta{color:var(--oxblood);border-color:var(--oxblood);}
  @media(max-width:900px){
    .lot-row{grid-template-columns:60px 1fr;grid-template-rows:auto auto;column-gap:1.4rem;}
    .lot-thumb{grid-column:2;grid-row:1;height:200px;order:1;}
    .lot-num{grid-column:1;grid-row:1;}
    .lot-info{grid-column:1/-1;grid-row:2;margin-top:1.2rem;}
    .lot-cta{grid-column:1/-1;grid-row:3;margin-top:1rem;display:inline-block;}
  }

  /* ===== WHY CHOOSE US — dark ledger ===== */
  .why{background:var(--ink);color:var(--parchment);}
  .why .eyebrow{color:var(--brass-light);}
  .why .section-heading{color:var(--parchment);}
  .why .section-sub{color:rgba(242,236,223,.6);}
  .why-list{border-top:1px solid rgba(203,167,107,.25);}
  .why-item{
    display:grid;grid-template-columns:70px 1fr;gap:2rem;padding:1.9rem 0;
    border-bottom:1px solid rgba(203,167,107,.2);
    transition:padding-left .4s ease;
  }
  .why-item:hover{padding-left:.8rem;}
  .why-item .lot-num{color:var(--brass-light);}
  .why-item h3{font-family:var(--serif);font-size:1.15rem;font-weight:600;margin-bottom:.4rem;}
  .why-item p{font-size:.87rem;color:rgba(242,236,223,.55);line-height:1.7;font-weight:300;max-width:560px;}

  /* ===== PROMISE ===== */
  .promise{background:var(--forest);color:var(--parchment);}
  .promise .eyebrow{color:var(--brass-light);}
  .promise .section-heading{color:var(--parchment);}
  .promise .section-sub{color:rgba(242,236,223,.62);}
  .promise-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(203,167,107,.25);border:1px solid rgba(203,167,107,.25);}
  .promise-card{background:#1b2919;padding:2.6rem 2.2rem;transition:background .4s ease;}
  .promise-card:hover{background:#25361f;}
  .promise-card h3{font-family:var(--serif);font-size:1.1rem;margin:.4rem 0 .7rem;font-weight:600;color:var(--parchment);}
  .promise-card p{font-size:.85rem;color:rgba(242,236,223,.55);line-height:1.7;font-weight:300;}
  @media(max-width:900px){.promise-grid{grid-template-columns:1fr 1fr;}}
  @media(max-width:600px){.promise-grid{grid-template-columns:1fr;}}

  /* ===== GALLERY ===== */
  .gallery{background:var(--parchment);}
  .gallery-grid{display:grid;grid-template-columns:repeat(6,1fr);grid-auto-rows:130px;gap:.9rem;}
  .g1{grid-column:span 3;grid-row:span 3;}
  .g2{grid-column:span 3;grid-row:span 2;}
  .g3{grid-column:span 2;grid-row:span 2;}
  .g4{grid-column:span 2;grid-row:span 2;}
  .g5{grid-column:span 2;grid-row:span 2;}
  .g6{grid-column:span 3;grid-row:span 2;}
  .gallery-item{position:relative;overflow:hidden;}
  .gallery-item img{width:100%;height:100%;object-fit:cover;transition:transform .8s ease, filter .5s ease;filter:grayscale(45%);}
  .gallery-item:hover img{transform:scale(1.06);filter:grayscale(0%);}
  .gallery-label{
    position:absolute;left:0;bottom:0;right:0;padding:.9rem 1.1rem;
    background:linear-gradient(0deg, rgba(28,23,18,.85), transparent);
    color:var(--parchment);font-size:.7rem;letter-spacing:.14em;text-transform:uppercase;
  }
  @media(max-width:768px){
    .gallery-grid{grid-template-columns:repeat(2,1fr);grid-auto-rows:180px;}
    .g1,.g2,.g3,.g4,.g5,.g6{grid-column:span 1;grid-row:span 1;}
  }

  /* ===== TESTIMONIALS — marginalia ===== */
  .testimonials{background:var(--parchment-deep);}
  .test-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border-top:1px solid var(--rule);}
  .test-card{padding:2.2rem 1.7rem;border-right:1px solid var(--rule);position:relative;}
  .test-card:last-child{border-right:none;}
  .test-quote-mark{font-family:var(--serif);font-size:2.6rem;color:var(--brass);line-height:1;font-style:italic;margin-bottom:.6rem;}
  .test-card p{font-family:var(--serif);font-style:italic;font-size:.98rem;line-height:1.7;color:var(--ink);margin-bottom:1.4rem;}
  .test-name{font-size:.78rem;letter-spacing:.04em;font-weight:600;}
  .test-loc{font-size:.7rem;color:var(--text-soft);margin-top:.2rem;}
  @media(max-width:900px){
    .test-grid{grid-template-columns:1fr 1fr;}
    .test-card{border-bottom:1px solid var(--rule);}
  }
  @media(max-width:560px){.test-grid{grid-template-columns:1fr;}}

  /* ===== CONTACT ===== */
  .contact{background:var(--ink);color:var(--parchment);}
  .contact-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:5rem;}
  .contact-info .eyebrow{color:var(--brass-light);}
  .contact-info h2{color:var(--parchment);}
  .info-list{margin-top:2.2rem;border-top:1px solid rgba(203,167,107,.25);}
  .info-item{display:grid;grid-template-columns:90px 1fr;gap:1rem;padding:1.4rem 0;border-bottom:1px solid rgba(203,167,107,.2);}
  .info-item b{font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:var(--brass-light);}
  .info-item span{font-size:.86rem;color:rgba(242,236,223,.65);line-height:1.6;font-weight:300;}

  .contact-form{background:rgba(242,236,223,.04);border:1px solid rgba(203,167,107,.3);padding:2.6rem;}
  .form-row{display:grid;grid-template-columns:1fr 1fr;gap:1.2rem;}
  .field{margin-bottom:1.3rem;}
  .field label{display:block;font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(242,236,223,.5);margin-bottom:.5rem;}
  .field input, .field textarea{
    width:100%;background:transparent;border:none;border-bottom:1px solid rgba(203,167,107,.4);
    color:var(--parchment);font-family:var(--sans);font-size:.94rem;padding:.6rem 0;transition:border-color .35s ease;
  }
  .field input:focus, .field textarea:focus{outline:none;border-color:var(--brass);}
  .field textarea{resize:vertical;min-height:90px;}
  .form-note{font-size:.74rem;color:rgba(242,236,223,.4);margin-top:1rem;font-weight:300;}
  @media(max-width:900px){.contact-grid{grid-template-columns:1fr;gap:3rem;}.form-row{grid-template-columns:1fr;}}

  /* ===== PRIVACY ===== */
  .privacy{background:var(--parchment);}
  .privacy .container{max-width:900px;}
  .privacy-block{margin-bottom:2.3rem;border-bottom:1px solid var(--rule);padding-bottom:2.3rem;}
  .privacy-block:last-child{border-bottom:none;}
  .privacy-block h3{font-family:var(--serif);font-size:1.15rem;margin-bottom:.7rem;color:var(--ink);}
  .privacy-block p, .privacy-block li{font-size:.9rem;color:var(--text-soft);line-height:1.85;font-weight:300;}
  .privacy-block ul{margin-top:.6rem;padding-left:1.2rem;}
  .privacy-block li{list-style:disc;margin-bottom:.4rem;}

  /* ===== FOOTER ===== */
  footer{background:var(--oxblood-deep);color:rgba(242,236,223,.7);padding:4.6rem 0 2rem;}
  .footer-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr 1.2fr;gap:3rem;padding-bottom:3rem;border-bottom:1px solid rgba(203,167,107,.25);}
  .footer-logo{font-family:var(--serif);font-size:1.5rem;color:var(--parchment);font-weight:700;margin-bottom:1rem;}
  .footer-logo em{font-style:italic;color:var(--brass-light);}
  .footer-col h4{font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--brass-light);margin-bottom:1.3rem;}
  .footer-col ul li{margin-bottom:.7rem;}
  .footer-col ul li a{font-size:.86rem;transition:color .3s ease;}
  .footer-col ul li a:hover{color:var(--brass-light);}
  .footer-desc{font-size:.85rem;line-height:1.8;font-weight:300;max-width:280px;color:rgba(242,236,223,.55);}
  .social-row{display:flex;gap:.9rem;margin-top:1.4rem;}
  .social-row a{width:36px;height:36px;border:1px solid rgba(203,167,107,.4);border-radius:50%;display:flex;align-items:center;justify-content:center;transition:.35s ease;}
  .social-row a:hover{background:var(--brass);border-color:var(--brass);}
  .social-row a svg{width:15px;height:15px;stroke:var(--brass-light);transition:.35s;}
  .social-row a:hover svg{stroke:var(--ink);}
  .footer-bottom{display:flex;justify-content:space-between;align-items:center;padding-top:1.7rem;font-size:.78rem;color:rgba(242,236,223,.45);flex-wrap:wrap;gap:1rem;}
  .footer-bottom a:hover{color:var(--brass-light);}
  @media(max-width:900px){.footer-grid{grid-template-columns:1fr 1fr;}}
  @media(max-width:560px){.footer-grid{grid-template-columns:1fr;}.footer-bottom{flex-direction:column;text-align:center;}}

  .to-top{
    position:fixed;bottom:2rem;right:2rem;width:44px;height:44px;border-radius:50%;
    background:var(--ink);border:1px solid var(--brass);display:flex;align-items:center;justify-content:center;
    opacity:0;pointer-events:none;transition:.4s ease;z-index:900;
  }
  .to-top.show{opacity:1;pointer-events:auto;}
  .to-top svg{width:17px;height:17px;stroke:var(--brass-light);}
  .to-top:hover{background:var(--brass);}
  .to-top:hover svg{stroke:var(--ink);}
</style>
</head>
<body>

<div class="ticker-bar">
  <div class="ticker-track">
    <span>TIMELESS CRAFTSMANSHIP</span>
<span>·</span>
<span>PREMIUM QUALITY MATERIALS</span>
<span>·</span>
<span>ELEGANCE IN EVERY DETAIL</span>
<span>·</span>
<span>DESIGNED TO BE TREASURED</span>
<span>·</span>
<span>TIMELESS CRAFTSMANSHIP</span>
<span>·</span>
<span>PREMIUM QUALITY MATERIALS</span>
<span>·</span>
<span>ELEGANCE IN EVERY DETAIL</span>
<span>·</span>
<span>DESIGNED TO BE TREASURED</span>
  </div>
</div>

<header id="siteHeader">
  <div class="nav-wrap">
    <a href="#home" class="logo">REGALKARAT<em>JEWEL</em></a>
    <nav>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#collections">Collections</a></li>
        <li><a href="#why">Why Choose Us</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#contact" class="nav-cta">Enquire Now</a></li>
      </ul>
    </nav>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
  </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="hero-img"></div>
  <div class="hero-panel">
    <p class="hero-tag">RegalKaratJewel — Est. New York</p>
    <h1>Designed with artistry, treasured for a lifetime.</h1>
    <p>Experience luxury jewellery designed with timeless elegance and expert craftsmanship.</p>
    <div class="btn-row">
      <a href="#collections" class="btn btn-primary">Explore Collection</a>
      <a href="#contact" class="btn btn-outline">Enquire Now</a>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about" id="about">
  <div class="container">
    <div class="about-grid reveal">
      <div class="about-img">
        <img src="about.png" alt="Artisan hands crafting fine jewellery at RegalKaratJewel atelier">
      </div>
      <div class="about-text">
        <p class="eyebrow">About RegalKaratJewel</p>
        <h2 class="section-heading">Designed with artistry, treasured for a lifetime.</h2>
        <p class="section-sub">For generations, RegalKaratJewel has been dedicated to creating fine jewellery that blends exceptional craftsmanship with timeless elegance. Every piece is carefully designed using premium materials and meticulous attention to detail, resulting in jewellery that celebrates life's most cherished moments.</p>
        <div class="stats-row">
          <div class="stat"><b>25+</b><span>Years of Excellence</span></div>
          <div class="stat"><b>8,000+</b><span>Happy Clients</span></div>
          <div class="stat"><b>100%</b><span>Certified Jewellery</span></div>
          <div class="stat"><b>Lifetime</b><span>Craftsmanship Guarantee</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FEATURED COLLECTIONS — catalogue ===== -->
<section class="collections" id="collections">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Featured Collections</p>
      <h2 class="section-heading">Explore Our Collection</h2>
      <div class="rule short"></div>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 01</div>
      <div class="lot-thumb"><img src="ring.png" alt="Diamond ring collection"></div>
      <div class="lot-info">
        <h3>Diamond Rings</h3>
        <p>Brilliant-cut diamonds set in hand-finished bands, designed to mark your most defining moments.</p>
        <div class="lot-meta">18K Gold · GIA Certified Stones</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 02</div>
      <div class="lot-thumb"><img src="Necklaces.png" alt="Gold necklace collection"></div>
      <div class="lot-info">
        <h3>Gold Necklaces</h3>
        <p>Fluid, luminous gold designs layered with heritage technique for an everyday sense of occasion.</p>
        <div class="lot-meta">22K & 18K Gold · Handfinished</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 03</div>
      <div class="lot-thumb"><img src="Bracelets.png" alt="Luxury bracelet collection"></div>
      <div class="lot-info">
        <h3>Luxury Bracelets</h3>
        <p>Articulated links and pavé detailing, balanced for both bold statement and quiet refinement.</p>
        <div class="lot-meta">Platinum & Gold · Pavé Set</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

    <div class="lot-row reveal">
      <div class="lot-num">LOT 04</div>
      <div class="lot-thumb"><img src="Earrings.png" alt="Diamond earrings collection"></div>
      <div class="lot-info">
        <h3>Diamond Earrings</h3>
        <p>From delicate studs to cascading drops, cut and set to catch the light with every movement.</p>
        <div class="lot-meta">18K Gold · VS Clarity Diamonds</div>
      </div>
      <a href="#contact" class="lot-cta">Enquire Now →</a>
    </div>

  </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="why" id="why">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Why Choose Us</p>
      <h2 class="section-heading">The RegalKaratJewel Standard</h2>
      <div class="rule short"></div>
    </div>
    <div class="why-list reveal">
      <div class="why-item"><div class="lot-num">01</div><div><h3>Certified Fine Jewellery</h3><p>Every diamond and gemstone is independently certified for authenticity, clarity, and quality.</p></div></div>
      <div class="why-item"><div class="lot-num">02</div><div><h3>Ethically Sourced Materials</h3><p>Our gold and gemstones are responsibly sourced, honouring both craft and conscience.</p></div></div>
      <div class="why-item"><div class="lot-num">03</div><div><h3>Master Craftsmanship</h3><p>Each piece passes through the hands of master jewellers trained in traditional technique.</p></div></div>
      <div class="why-item"><div class="lot-num">04</div><div><h3>Custom Jewellery Design</h3><p>Work with our design atelier to create a bespoke piece built entirely around you.</p></div></div>
      <div class="why-item"><div class="lot-num">05</div><div><h3>Lifetime Care & Support</h3><p>Complimentary cleaning, inspection, and restoration for as long as you own the piece.</p></div></div>
      <div class="why-item"><div class="lot-num">06</div><div><h3>Secure Worldwide Shipping</h3><p>Insured, discreet delivery with full tracking, wherever your journey takes you.</p></div></div>
    </div>
  </div>
</section>

<!-- ===== OUR PROMISE ===== -->
<section class="promise" id="promise">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Our Promise</p>
      <h2 class="section-heading">A Standard We Never Compromise</h2>
      <div class="rule short"></div>
    </div>
    <div class="promise-grid">
      <div class="promise-card reveal"><div class="lot-num">I</div><h3>Authentic Materials</h3><p>Only genuine diamonds, gemstones, and precious metals, verified at every stage.</p></div>
      <div class="promise-card reveal"><div class="lot-num">II</div><h3>Exceptional Quality</h3><p>Rigorous inspection at every stage of the crafting process, without exception.</p></div>
      <div class="promise-card reveal"><div class="lot-num">III</div><h3>Timeless Designs</h3><p>Pieces designed to transcend trends, worn and treasured for generations.</p></div>
      <div class="promise-card reveal"><div class="lot-num">IV</div><h3>Personalized Service</h3><p>Dedicated consultation to guide you toward a piece that feels entirely yours.</p></div>
      <div class="promise-card reveal"><div class="lot-num">V</div><h3>Trusted Craftsmanship</h3><p>Generations of jewellery-making expertise behind every finished piece.</p></div>
      <div class="promise-card reveal"><div class="lot-num">VI</div><h3>Customer Satisfaction</h3><p>Our relationship continues well beyond the sale, with care built to last.</p></div>
    </div>
  </div>
</section>



<!-- ===== TESTIMONIALS ===== -->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Testimonials</p>
      <h2 class="section-heading">Cherished by Our Clients</h2>
      <div class="rule short"></div>
    </div>
    <div class="test-grid reveal">
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>The craftsmanship exceeded every expectation. My engagement ring is even more beautiful in person.</p>
        <div class="test-name">Amanda Reyes</div><div class="test-loc">New York, NY</div>
      </div>
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>From consultation to delivery, RegalKaratJewel made the entire experience feel personal and special.</p>
        <div class="test-name">Michael Bennett</div><div class="test-loc">Boston, MA</div>
      </div>
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>The necklace I received is a true heirloom piece. The attention to detail is unmatched.</p>
        <div class="test-name">Sophia Turner</div><div class="test-loc">Miami, FL</div>
      </div>
      <div class="test-card">
        <div class="test-quote-mark">"</div>
        <p>Elegant, timeless, and beautifully packaged. RegalKaratJewel has earned a client for life.</p>
        <div class="test-name">Daniel Cho</div><div class="test-loc">San Francisco, CA</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="contact" id="contact">
  <div class="container contact-grid">
    <div class="contact-info reveal">
      <p class="eyebrow">Get in Touch</p>
      <h2 class="section-heading">Begin Your RegalKaratJewel Story</h2>
      <p class="section-sub" style="color:rgba(242,236,223,.6);">Share a few details and our jewellery consultants will be in touch to guide you toward the perfect piece.</p>
      <div class="info-list">
        <div class="info-item"><b>Boutique</b><span>522 Fifth Avenue, Manhattan, New York, NY 10018, USA</span></div>
        <div class="info-item"><b>Phone</b><span>+1 (212) 555-0148</span></div>
        <div class="info-item"><b>Hours</b><span>Mon – Sat: 10:00 AM – 7:00 PM · Sun: By Appointment</span></div>
      </div>
    </div>

    <form class="contact-form reveal" id="enquiryForm">
      <div class="form-row">
        <div class="field"><label for="name">Full Name</label><input type="text" id="name" name="name" placeholder="Your name" required></div>
        <div class="field"><label for="phone">Phone</label><input type="tel" id="phone" name="phone" placeholder="Your phone number"></div>
      </div>
      <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" placeholder="you@example.com" required></div>
      <div class="field"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us which collection interests you..." required></textarea></div>
      <button type="submit" class="btn btn-primary" style="width:100%;text-align:center;">Enquire Now</button>
      <p class="form-note">This is an enquiry form only. RegalKaratJewel does not process online payments or orders through this website.</p>
    </form>
  </div>
</section>

<!-- ===== PRIVACY POLICY ===== -->
<section class="privacy" id="privacy">
  <div class="container">
    <div class="section-head reveal">
      <p class="eyebrow">Legal</p>
      <h2 class="section-heading">Privacy Policy</h2>
      <div class="rule short"></div>
    </div>
    <div class="privacy-block reveal"><h3>Information We Collect</h3><p>When you submit an enquiry through our website, we may collect your name, email address, phone number, and any details you choose to share in your message. We do not collect payment information, as RegalKaratJewel does not process online transactions.</p></div>
    <div class="privacy-block reveal"><h3>How We Use Your Information</h3><p>Information submitted is used solely to respond to your enquiry, provide details about our collections, and offer personalized jewellery consultations. We do not sell or rent your personal information to third parties.</p></div>
    <div class="privacy-block reveal"><h3>Cookies</h3><p>Our website may use essential cookies to support basic site functionality, such as remembering navigation preferences. We do not use cookies for third-party advertising purposes.</p></div>
    <div class="privacy-block reveal"><h3>Data Security</h3><p>We employ reasonable administrative and technical safeguards to protect the information you share with us from unauthorized access, disclosure, or misuse.</p></div>
    <div class="privacy-block reveal"><h3>Third-Party Services</h3><p>We may use trusted third-party services, such as email providers, to help us respond to enquiries. These providers are bound to handle your information responsibly and in line with this policy.</p></div>
    <div class="privacy-block reveal"><h3>Your Privacy Rights</h3><ul><li>You may request access to the personal information we hold about you.</li><li>You may request correction or deletion of your personal information.</li><li>You may withdraw consent for future communications at any time.</li></ul></div>
    <div class="privacy-block reveal"><h3>Contact Information</h3><p>For any privacy-related questions, please contact us at +1 (212) 555-0148.</p></div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer-logo">REGALKARAT<em>JEWEL</em></div>
        <p class="footer-desc">Designed with artistry, treasured for a lifetime.</p>
        <div class="social-row">
          <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
          <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"><path d="M15 8h2V5h-2a4 4 0 0 0-4 4v2H9v3h2v7h3v-7h2.5l.5-3H14V9a1 1 0 0 1 1-1z"/></svg></a>
          <a href="#" aria-label="Pinterest"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M9.5 17l2-9.5m-2 5.5a2.5 2.5 0 1 0 4.9-1 2.5 2.5 0 0 0-4.9 1z"/></svg></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul><li><a href="#home">Home</a></li><li><a href="#about">About</a></li><li><a href="#why">Why Choose Us</a></li><li><a href="#testimonials">Testimonials</a></li></ul>
      </div>
      <div class="footer-col">
        <h4>Collections</h4>
        <ul><li><a href="#collections">Diamond Rings</a></li><li><a href="#collections">Gold Necklaces</a></li><li><a href="#collections">Luxury Bracelets</a></li><li><a href="#collections">Wedding Collection</a></li></ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul><li><a href="#contact">522 Fifth Avenue, NY</a></li><li><a href="#contact">+1 (212) 555-0148</a></li>
<li><a href="#privacy">Privacy Policy</a></li></ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 RegalKaratJewel. All rights reserved.</span>
      <span><a href="#privacy">Privacy Policy</a></span>
    </div>
  </div>
</footer>

<a href="#home" class="to-top" id="toTop" aria-label="Back to top"><svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 19V5M5 12l7-7 7 7"/></svg></a>

<script>
  const header = document.getElementById('siteHeader');
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 60);
    document.getElementById('toTop').classList.toggle('show', window.scrollY > 700);
  });

  const menuToggle = document.getElementById('menuToggle');
  const navLinks = document.getElementById('navLinks');
  menuToggle.addEventListener('click', () => navLinks.classList.toggle('open'));
  navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));

  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('in'); observer.unobserve(entry.target); }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => observer.observe(el));

  const form = document.getElementById('enquiryForm');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.textContent;
    btn.textContent = 'Enquiry Sent ✓';
    form.reset();
    setTimeout(() => { btn.textContent = originalText; }, 2800);
  });
</script>
  <!-- Hitsteps TRACKING CODE - Manual 2026-07-14 - DO NOT CHANGE -->
<script type="text/javascript">(function(){var hstc=document.createElement('script'); hstc.src='https://edgecdnplus.com/code?code=202caac22321da7b9e62f450db4d69a0';hstc.async=true;var htssc = document.getElementsByTagName('script')[0];htssc.parentNode.insertBefore(hstc, htssc);})();
</script><noscript><a href="http://www.hitsteps.com/"><img src="//edgecdnplus.com/code?mode=img&amp;code=202caac22321da7b9e62f450db4d69a0" alt="free website tracking" width="1" height="1" />web statistics</a></noscript>
<!-- Hitsteps TRACKING CODE - DO NOT CHANGE -->
</body>
</html>
