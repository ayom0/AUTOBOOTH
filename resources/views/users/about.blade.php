<!DOCTYPE html>
<html lang="en">


<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Renev - Modern Creative Digital Agency HTML Template</title>

     <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="assets/img/logo/fav-logo1.png" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
</head>
<body class="body-bg1">

<!--===== PRELOADER STARTS =======-->
<div id="preloader">
  <div id="loader"></div>
</div>
<!--===== PRELOADER ENDS =======-->


<div class="procus-cursor" style="transform: translate3d(calc(-50% + 1919px), calc(-50% + 787px), 0px);"></div>
<div class="procus-cursor2" style="left: 551px; top: 918px;"></div>
<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
     <div class="progress-wrap">
       <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
       </svg>
     </div>
   </div>
 <!--===== PROGRESS ENDS=======-->

<!--=====HEADER START=======-->
@include('users.components.header2')
<!--=====HEADER END =======-->

  <!--===== SIDEBAR STARTS=======-->
<div class="header-search-form-wrapper">
  <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
  <div class="header-search-container">
      <form role="search" class="search-form">
      <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
      <button type="submit" class="search-submit"><img src="assets/img/icons/search1.svg" alt=""></button>
      </form>
  </div>
</div>
<div class="body-overlay"></div>
<div class="header-site-icon">
  <div class="slide-bar slide-bar1">
    <div class="sidebar-info">
         <div class="sidebar-logo">
              <a href="index-2.html">
                   <img src="assets/img/logo/logo1.png" alt="logo">
              </a>
              <div class="close-mobile-menu">
                   <a><i class="fa-solid fa-xmark"></i></a>
              </div>
         </div>
         <div class="sidebar-content">
              <ul>
                   <li><a href="index-2.html">Home</a></li>
                   <li><a href="about.html">About Us</a></li>
                   <li><a href="service.html">service</a></li>
                   <li><a href="project.html">Project</a></li>
                   <li><a href="blog.html">Blogs</a></li>
                   <li><a href="contact.html">Contact</a></li>
              </ul>
         </div>
         <div class="space32"></div>
         <div class="btn-area">
              <a href="contact.html" class="vl-btn1" style="overflow: hidden;">Get in touch now</a>
         </div>
         <div class="space40"></div>
         <div class="social-link-area">
              <h3 class="sidebar-heading">Social Links</h3>
              <ul>
                   <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                   </li>
              </ul>
         </div>
         <div class="space40"></div>
         <div class="form-area">
              <h3>Subscribe To Newsletter</h3>
              <form>
                   <input type="text" placeholder="Email Address*">
                   <button type="submit" class="vl-btn1" style="overflow: hidden;">subscribe</button>
              </form>
         </div>
    </div>
  </div>
  <div class="body-overlay"></div>
</div>
<!--===== SIDEBAR ENDS STARTS=======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage1-menu">
  <div class="vl-offcanvas">
    <div class="vl-offcanvas-wrapper">
        <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
            <div class="vl-offcanvas-logo">
                <a href="index-2.html"><img src="assets/img/logo/logo1.png" alt=""></a>
            </div>
            <div class="vl-offcanvas-close">
               <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>

        <div class="vl-offcanvas-menu d-lg-none mb-40">
            <nav></nav>
        </div>

        <div class="space20"></div>
        <div class="vl-offcanvas-info">
            <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
            <div class="space20"></div>
            <span><a href="#"> <i class="fa-regular fa-envelope"></i> +57 9954 6476</a></span>
            <span><a href="#"><i class="fa-solid fa-phone"></i> hello@exdos.com</a></span>
            <span><a href="#"><i class="fa-solid fa-location-dot"></i> Bhemeara,Kushtia</a></span>
        </div>
        <div class="space20"></div>
        <div class="vl-offcanvas-social">
            <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
            <div class="space20"></div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
         </div>

    </div>
</div>
<div class="vl-offcanvas-overlay"></div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="inner-section-area body-bg2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="hero-header-area">
          <h1>About Us</h1>
          <div class="space32"></div>
          <h4><a href="index-2.html">Home</a> <i class="fa-solid fa-angle-right"></i> <a href="#">About Us</a></h4>
        </div>
      </div>
      <div class="col-lg-5"></div>
      <div class="col-lg-3">
        <div class="imges-header">
          <div class="img1">
            <img src="assets/img/all-images/hero/hero-img1.png" alt="" class="keyframe6">
          </div>
          <div class="arrow">
            <a href="contact.html">
              <img src="assets/img/elements/elements2.png" alt="" class="keyframe5">
              <img src="assets/img/icons/arrow1.svg" alt="" class="arrow1">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="space30"></div>
  </div>
</div>


<div class="slider1-section-area">
  <div class="marquee-wrap">
    <div class="marquee-text">
      <div class="brand-single-box">
        <h3>POSE <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>HAPPY <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>SELF SERVICE PHOTOBOOTH <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>KLIK <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
        <h3>POSE <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>HAPPY <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>SELF SERVICE PHOTOBOOTH <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>KLIK <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
        <h3>POSE <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>HAPPY <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>SELF SERVICE PHOTOBOOTH <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>KLIK <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    

    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about1-section-area sp6">
  
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="images">
          <div class="img1 reveal">
            <img src="assets/img/all-images/about/about-img1.png" alt="">
          </div>
          <img src="assets/img/elements/elements8.png" alt="" class="elements8">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-header heading1">
          <h5 data-aos="fade-left" data-aos-duration="800"><img src="assets/img/icons/lingkaran2.png" alt=""> TENTANG KAMI</h5>
          <div class="space20"></div>
          <h2 class="text-anime-style-3">Who We Are?</h2>
          <div class="space16"></div>
          <p data-aos="fade-left" data-aos-duration="900">Kita itu Photobooth X, teman terbaikmu buat bikin momen seru jadi lebih berkesan! Dari pesta ulang tahun sampai acara keren di mal, kita selalu ready kasih pengalaman foto paling asik.</p>
          <div class="space32"></div>
          <div class="bg-progress" data-aos="fade-left" data-aos-duration="1000">
            <div class="progress-bar">
              <label>Visi</label>
              <ul>
                <li><Span><img src="assets/img/icons/centang.png" alt="">Jadi photobooth yang selalu bikin kamu pengen foto terus!</Span></li>
              </ul>
              
          </div>
      
          <div class="progress-bar m-0">
              <label>Misi</label>
              <ul>
                <li><Span><img src="assets/img/icons/centang.png" alt="">Nyediain teknologi foto yang kekinian banget.</Span></li>
                <li><Span><img src="assets/img/icons/centang.png" alt="">Bikin semua acara jadi lebih meriah.</Span></li>
                <li><Span><img src="assets/img/icons/centang.png" alt="">Support vibes seru dengan desain dan tema yang fleksibel.</Span></li>
              </ul>
              
          </div>
    
          </div>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100"> 
            <a href="contact.html" class="vl-btn1" style="overflow: hidden;">Schedule a Consultation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="vl-keunggulan-1-area sp7" >
  <div class="container">
     <div class="row">
        <div class="col-lg-7 m-auto">
           <div class="vl-keunggulan-1-section-box heading1 text-center space-margin60">
              <h5 class="vl-section-subtitle"><span><img src="assets/img/icons/lingkaran1.png" alt=""></span>Keunggulan</h5>
              <div class="space24"></div>
              <h2 class="vl-section-title text-anime-style-3">kEUNGGULAN AUTOBOOTH</h2>
           </div>
        </div>
     </div>
     <div class="row">
     <div class="features-container">
        <div class="feature-card orange">
            <div class="feature-icon">
            <img src="assets/img/elements/Vector.png" alt="Deskripsi gambar" width="34" height="34">

            </div>
            <h2 class="feature-title">CANGGIH & OTOMATIS</h2>
            <p class="feature-description">Nggak Perlu Operator, Cukup</p>
            <p class="feature-description">Sentuh Layar Dan Voila!</p>
        </div>
        
        <div class="feature-card blue">
            <div class="feature-icon">
            <img src="assets/img/elements/elements39.png" alt="Deskripsi gambar" width="44" height="44">
            </div>
            <h2 class="feature-title">FILTER KECE</h2>
            <p class="feature-description">Pilihan Tema Dan Filter Ala </p>
            <p class="feature-description">Selebgram.</p>
        </div>
        
        <div class="feature-card pink">
            <div class="feature-icon">
            <img src="assets/img/elements/elements38.png" alt="Deskripsi gambar" width="44" height="44">
            </div>
            <h2 class="feature-title">AKSES SUPER GAMPANG</h2>
            <p class="feature-description">Cetak langsung atau share ke sosmed dalam hitungan detik.</p>
        </div>
    </div>
     
     </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CASE AREA STARTS =======-->
<div class="portfolio1-section-area sp6">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="portfolio-header heading1 space-margin60">
          <h5><img src="assets/img/icons/lingkaran2.png" alt="">ALBUM KAMI</h5>
          <div class="space24"></div>
          <h2 class="text-anime-style-3">GALERI SINGKAT</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="portfolio-slider-area owl-carousel">
          <div class="portfolio-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/portfolio/galeri1.png" alt="">
            </div>
          </div>
          <div class="portfolio-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/portfolio/galeri2.png" alt="">
            </div>
          </div>
          <div class="portfolio-boxarea">
            <div class="img1">
              <img src="assets/img/all-images/portfolio/galeri3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CASE AREA ENDS =======-->







<!--===== TEAM AREA STARTS =======-->
<div class="team1-section-area sp6" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="team-header heading1 text-center space-margin60">
          <h5><img src="assets/img/icons/lingakaran1.png" alt="">BLOG DAN BERITA</h5>
          <div class="space24"></div>
          <h2 class="text-anime-style-3">Here's a Photobooth Business Opportunity for You</h2>
        </div>
      </div>
    </div>

    <div class="row">
  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
    <div class="team-author-boxarea">
      <img src="assets/img/elements/elements7.png" alt="" class="elements7 keyframe5">
      <div class="img1">
        <img src="assets/img/all-images/team/blog1.png">
      </div>
      <div class="content-area">
        <div class="content">
          <a href="team.html">Wedding Event</a>
        </div>
        <div class="share"></div>
      </div>
      <div class="list">
        <ul></ul>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
    <div class="team-author-boxarea">
      <img src="assets/img/elements/elements7.png" alt="" class="elements7 keyframe5">
      <div class="img1">
        <img src="assets/img/all-images/team/blog1.png">
      </div>
      <div class="content-area">
        <div class="content">
          <a href="team.html">Wedding Event</a>
        </div>
        <div class="share"></div>
      </div>
      <div class="list">
        <ul></ul>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
    <div class="team-author-boxarea">
      <img src="assets/img/elements/elements7.png" alt="" class="elements7 keyframe5">
      <div class="img1">
        <img src="assets/img/all-images/team/blog1.png">
      </div>
      <div class="content-area">
        <div class="content">
          <a href="team.html">Wedding Event</a>
        </div>
        <div class="share"></div>
      </div>
      <div class="list">
        <ul></ul>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
    <div class="team-author-boxarea">
      <img src="assets/img/elements/elements7.png" alt="" class="elements7 keyframe5">
      <div class="img1">
        <img src="assets/img/all-images/team/blog1.png">
      </div>
      <div class="content-area">
        <div class="content">
          <a href="team.html">Wedding Event</a>
        </div>
        <div class="share"></div>
      </div>
      <div class="list">
        <ul></ul>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
    <div class="team-author-boxarea">
      <img src="assets/img/elements/elements7.png" alt="" class="elements7 keyframe5">
      <div class="img1">
        <img src="assets/img/all-images/team/blog1.png">
      </div>
      <div class="content-area">
        <div class="content">
          <a href="team.html">Wedding Event</a>
        </div>
        <div class="share"></div>
      </div>
      <div class="list">
        <ul></ul>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
    <div class="team-author-boxarea">
      <img src="assets/img/elements/elements7.png" alt="" class="elements7 keyframe5">
      <div class="img1">
        <img src="assets/img/all-images/team/blog1.png">
      </div>
      <div class="content-area">
        <div class="content">
          <a href="team.html">Wedding Event</a>
        </div>
        <div class="share"></div>
      </div>
      <div class="list">
        <ul></ul>
      </div>
    </div>
  </div>
</div>

  </div>
</div>
<!--===== TEAM AREA ENDS =======-->

<div class="slider1-section-area">
  <div class="marquee-wrap">
    <div class="marquee-text">
      <div class="brand-single-box">
        <h3>POSE <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>HAPPY <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>SELF SERVICE PHOTOBOOTH <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>KLIK <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
        <h3>POSE <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>HAPPY <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>SELF SERVICE PHOTOBOOTH <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>KLIK <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
        <h3>POSE <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>HAPPY <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>SELF SERVICE PHOTOBOOTH <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    <div class="brand-single-box">
      <h3>KLIK <img src="assets/img/elements/elements5.png" alt=""></h3>
    </div>

    

    </div>
  </div>
</div>

<!--===== CTA AREA STARTS =======-->
@include('users.components.cta')
<!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
@include('users.components.footer')
<!--===== FOOTER AREA ENDS =======-->

<!--===== JS SCRIPT LINK =======-->
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/fontawesome.js"></script>
<script src="assets/js/plugins/aos.js"></script>
<script src="assets/js/plugins/counter.js"></script>
<script src="assets/js/plugins/gsap.min.js"></script>
<script src="assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="assets/js/plugins/Splitetext.js"></script>
<script src="assets/js/plugins/SmoothScroll.js"></script>
<script src="assets/js/plugins/sidebar.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/mobilemenu.js"></script>
<script src="assets/js/plugins/owlcarousel.min.js"></script>
<script src="assets/js/plugins/nice-select.js"></script>
<script src="assets/js/plugins/waypoints.js"></script>
<script src="assets/js/plugins/slick-slider.js"></script>
<script src="assets/js/plugins/circle-progress.js"></script>
<script src="assets/js/plugins/swiper.js"></script>
<script src="assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const bodyElement = document.body;

    // Periksa URL untuk menentukan apakah halaman adalah Home atau bukan
    const currentPath = window.location.pathname;

    if (currentPath === "/" || currentPath === "/home") {
        bodyElement.classList.add("on-homepage"); // Tambahkan kelas untuk halaman Home
    } else {
        bodyElement.classList.add("not-homepage"); // Tambahkan kelas untuk halaman lain
    }
});

</script>
</body>

<!-- Mirrored from html.vikinglab.agency/renev/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Mar 2025 04:45:40 GMT -->
</html>