<?php
session_start();
$userLoggedIn = isset($_SESSION['user_id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GrowBox </title>

    <!-- Link bootstrap files --> 
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.js" > </script>

    <!-- bootstrap cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>

    <!-- Fav Icon -->
    <link rel="icon" href="/images/fav_icon_lightGreen.png" />

    <!-- Link style sheets -->
    <link rel="stylesheet" href="/css/A-style.css">

    <!-- Remix icon cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" />

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


</head>

<body class="#">

<div class="container">
    <!-- Nav Bars start -->
  <div class="container-fluid">
    <div class="container fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 py-0 mt-4 d-NavContainerFluid">
        <a class="navbar-brand" href="/index.html">
          <img src="/images/Logo.svg" alt="MainLogo" class="main-logo"  width="200px" height="55px" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link D-Active" href="/index.html"> Home </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/html/packages.html"> Packages </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/html/shop.html"> Shop  </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/html/blog.html"> Blog </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="\profile.php"> Profile </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/html/aboutUs.html"> About </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/html/contactUs.html"> Contact </a>
            </li>

          </ul>

          <div class="d-flex justify-content-center g-4">
              <!-- IDs added to the links for JavaScript to reference -->
                <a id="account-button" href="\login.php" >
                    <button class="D-Button-Primary text-center ">
                        Login
                    </button>
                </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- NavBar end -->

   



  <!-- Head Titles section -->
  <div class="container ">
    <div class="row A-title-head-section">
      <div class="col">

        <p class="A-SubTitle-text center-text"> Cultivate City Life </p>
        <p class="A-Title-text center-text"> Sprout & Thrive: Empowering </p>
        <p class="A-Title-text center-text"> Urban Gardeners </p>

      </div>
    </div>
  </div>

  <div class="container A-title-head-section head-para">
    <div class="row">
      <div class="col-md-6 offset-md-3 center-text">

        <p class="A-Title-Para center-text "> "Welcome to growBox, where urban farming meets innovation. Discover the joy of growing your own food in the heart of the city. Explore our resources, tutorials, and personalized recommendations to cultivate thriving gardens in urban spaces. Let's green up our cities together!". </p>


      </div>
    </div>

      <!-- End Head Titles section -->



      <div class="row text-center A-top-head g-5 col-md-center">

        <div class="col-md-4">
          <div class="content " >
            <img src="/images/home_images/Group 347.png" alt="image_1" class="A-head-img-sub-1 text-end A-img-head">
          </div>
        </div>

        <div class="col-md-4">
          <div class="content" >
            <img src="\images\markus-spiske-sFydXGrt5OA-unsplash.jpg" alt="image_2" class="A-head-img-main A-img-head" >
          </div>
        </div>

        <div class="col-md-4">
          <div class="content">
            <img src="/images/home_images/Group 348.png" alt="image_3" class="A-head-img-sub-2 A-img-head">
          </div>
        </div>

      </div>

    </div>
    </div>


  </div>
      <!--========================================-->
            <!-- End Head Titles section -->
      <!--========================================-->


      <!-- Package product home section -->

      <section class="A-Package-product-section col-md-6">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <div class="content A-image-align-right" >
                ,<img src="/images/home_images/product.png" alt="" class="A-product-img">
              </div>
            </div>

            <div class="col-md-6">
              <div class="content text-left A-product-home-title">

                <div class="A-product-home-title-main">
                    <h2 class="A-product-home-Title">Turning cities into gardens, nurturing sustainability, one plant at a time.</h2>
                </div>

                <div class="A-product-home-para-main">
                  <h2 class="A-product-home-para"> Lorem ipsum dolor sit amet consectetur. Ullamcorper tristique nisi ante habitant viverra nisl in nibh neque. gue tellus sit tellus est velit pretium et ultrices sed. Feugiat eget mauris pretium pellentesque scelerisque </h2>
                </div>

                              <!-- IDs added to the links for JavaScript to reference -->
                <div class="A-product-home-btn">
                  <a id="account-button" href="/html/packages.html" >
                    <button class="D-Button-Primary text-center A-btn-exploreMore">
                        Explore more
                    </button>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>



      <!--========================================-->
            <!-- video section -->
      <!--========================================-->

  
      <section class="A-home-video-section container">
      
            <div class="container ">
              <div class="row A-title-video-section">
                <div class="col">
          
                  <p class="A-Title-text center-text"> Stability <span class="A-span"> <img src="/images/home_images/Video-title-img-1.png " class="imageH"> </span>& reliability </p>
                  <p class="A-Title-text center-text"> <span class="A-span"> <img src="/images/home_images/Video-title-img-2.png" class="imageH1"> </span> is what we offer. </p>
          
                </div>
              </div>


            <div class="row">
              <div class="A-home-video-content">

              </div>
            </div>

            <div class="row">
              <div class="A-home-video">
                <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/jE6yEb-1x4Y?si=-93-kobIwM073aaZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>

          </div>


      </section>

      <!--====================================-->
            <!-- End video section -->
      <!--=====================================-->


  
  <!-- 
      =======================================
                  Reviews Section
      =======================================
  -->
  <section class="d-MainPage-Reviews">
    <div class="container-fluid d-reviews-ContainerFluid">
      <div class="container d-containerReviews D-SectionPadding">
        <h1 class="d-reviews-MainText d-flex justify-content-center">Reviews</h1>

        <div class="container A-rev-cards">
          <div class="row">

            <!-- Review Card start -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="card A-card-rev">
                <div class="card-body">
                  <!-- rev image -->
                  <div class="text-center mt-2 mb-3">
                    <img
                      src="\images\teamMembers\customer1.jpg"
                      alt="Profile Photo" class="d-rev-ProfilePhoto">
                  </div>
                  <!-- name -->
                  <h1 class="d-rev-Name">
                    Nayana de Silva
                  </h1>

                  <!-- position -->
                  <h1 class="d-rev-position">
                    Kalutara
                  </h1>

                  <!-- description -->
                  <p class="d-rev-description">
                    "GrowBox නාගරික ගොවිතැන් ක්‍රමය ඉතාමත් සාර්ථකයි.ඔවුන්ගේ නිශ්පාදනවල විවිධත්වය සහ නැවුම් බව අසමසමයි.කාබනික ක්‍රම සහ පුද්ගලීකරණය කළ සේවාව ඉතා විශිෂ්ඨයි."
                  </p>
                </div>
              </div>
            </div>
            <!-- Review Card End -->

            <!-- Review Card start -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="card A-card-rev">
                <div class="card-body">
                  <!-- rev image -->
                  <div class="text-center mt-2 mb-3">
                    <img
                      src="\images\customer9.jpeg"
                      alt="Profile Photo" class="d-rev-ProfilePhoto">
                  </div>
                  <!-- name -->
                  <h1 class="d-rev-Name">
                    Kamal Perera
                  </h1>

                  <!-- position -->
                  <h1 class="d-rev-position">
                    Mathugama
                  </h1>

                  <!-- description -->
                  <p class="d-rev-description">
                    " GrowBox සමග සම්බන්ධ වීම ගැන ඉතාමත් සතුටුදායකයි.ඔවුන්ගේ නව වගා ක්‍රම ඉතා සාර්ථකයි.සෑම නිශ්පාදනයක්ම ඉතා ඉක්මනින් සහ සුරක්ෂිතව අපගේම අතටම ලබා දුන්නා.GrowBox හී සේවය ඉතා අගය කල යුතුයි. "
                  </p>
                </div>
              </div>
            </div>
            <!-- Review Card End -->

            <!-- Review Card start -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 ">
              <div class="card A-card-rev A-card-hover">
                <div class="card-body A-card-hover">
                  <!-- rev image -->
                  <div class="text-center mt-2 mb-3 A-card-hover">
                    <img
                      src="\images\teamMembers\Customer3.jpeg"
                      alt="Profile Photo" class="d-rev-ProfilePhoto">
                  </div>
                  <!-- name -->
                  <h1 class="d-rev-Name">
                    Niluka perera
                  </h1>

                  <!-- position -->
                  <h1 class="d-rev-position">
                    Gampaha
                  </h1>

                  <!-- description -->
                  <p class="d-rev-description">
                    GrowBox නාගරික කෘෂිකාර්මික සේවය ඉතා ඉහළින් නිර්දේශ කරනවා.ඔවුන්ගේ නිශ්පාදන ඉහල ප්‍රමිතින්ගෙන් යුක්තයි.ඔවුන්ගේ පාරිභෝගික සේවය ඉතා ඉහළයි.
                  </p>
                </div>
              </div>
            </div>
            <!-- Review Card End -->

            <!-- Review Card start -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="card A-card-rev">
                <div class="card-body">
                  <!-- rev image -->
                  <div class="text-center mt-2 mb-3">
                    <img
                      src="\images\customer8.jpeg"
                      alt="Profile Photo" class="d-rev-ProfilePhoto">
                  </div>
                  <!-- name -->
                  <h1 class="d-rev-Name">
                   Saman Rathnayaka
                  </h1>

                  <!-- position -->
                  <h1 class="d-rev-position">
                    Kalaniya
                  </h1>

                  <!-- description -->
                  <p class="d-rev-description">
                    GrowBox යනු නාගරික කෘෂිකාර්මික සේවය තුළ ප්‍රමුඛයා වී අවසන්.ඔවුන්ගේ නිශ්පාදන වල නැවුම් බව ඉතා ඉහළයි.ඔවුන්ගේ පාරිභෝගික සේවය ඉතා මිත්‍රශිලියි.
                  </p>
                </div>
              </div>
            </div>
            <!-- Review Card End -->
          </div>
        </div>


      </div>
    </div>
  </section>


  <!-- 
      =======================================
              News Alert Section
      =======================================
  -->

  <section class="D-NewsAlertSubscribe mt-4">
    <div class="container D-SectionPadding">
      <div class="row">
        <div class="col-lg-6 g-5">
          <div class="text-lg-start text-center">
            <h2 class="d-news-title ">
              Join the community!
            </h2>
            <p class="d-news-subTitle mb-3">
              Stay informed and never miss out on exciting updates and exclusive offers by subscribing to our
              newsletter.
              Join our community today
            </p>
          </div>
          <form>
            <div class="mb-3 text-lg-start text-center">
              <input type="text" class="form-control2 form-input1" placeholder="Enter your email here" required>
            </div>
        
            <div class=" text-center mb-3 ">
              <button type="submit" class="D-Button-Primary A-btn-subscription">Subscribe</button>
            </div>
         
          </form>
        </div>
        <div class="col-lg-6 text-center">
          <img src="\images\unnamed.jpg"  id="joinn" alt="Subscription Image">
        </div>
      </div>
    </div>
  </section>



   <!-- 
      =======================================
                Footer Section
      =======================================
  -->

  <footer class="D-FooterContainer">
    <div class="container D-SectionPadding">
      <div class="row pt-4">
        <div class="col-md-3 col-lg-6 order-md-last">
          <div class="row justify-content-end">
            <div class="col-md-12 col-lg-9 text-md-right mb-md-0 mb-4">
              <h2 class="footer-heading"><a href="#" class="logo">
                  <img src="/images/home_images/Logo-white.svg" alt="FooterLogo" style="width: 155px;">
                </a></h2>
              <p class="D-copyright">
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                Site Developed <i class="ri-heart-3-fill" aria-hidden="true"></i> by <a
                  href="https://github.com/dizzpy/" target="_blank" class="D-FooterLinks">
                  <span class="D-FooterLinkText">
                    moduleZ
                  </span>
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-6">
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">Information</h2>
              <ul class="list-unstyled">
                <li><a href="/html/about-us.html" class="py-1 d-block D-FooterLinks"><span
                      class="ri-checkbox-circle-line"></span>Packages</a></li>
                <li><a href="/html/T-Shop-MainPage.html" class="py-1 d-block D-FooterLinks"><span
                      class="ri-checkbox-circle-line mr-2"></span>Shop</a></li>
                <li><a href="/html/M-Blog-MainPage.html" class="py-1 d-block D-FooterLinks"><span
                      class="ri-checkbox-circle-line mr-2"></span>Blog</a></li>
                <li><a href="/html/contact-us.html" class="py-1 d-block D-FooterLinks"><span
                      class="ri-checkbox-circle-line mr-2"></span>Contact US</a></li>
                <li><a href="/html/about-us.html" class="py-1 d-block D-FooterLinks"><span
                      class="ri-checkbox-circle-line mr-2"></span>About</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">Others</h2>
              <ul class="list-unstyled">
                <li><a href="https://www.privacypolicygenerator.info/live.php?token=dMFLjGaYsEvNVQ8XTlVOyb83dg8Z9tuS"
                    class="py-1 d-block D-FooterLinks"><span class="ri-checkbox-circle-line mr-2"></span>Privacy
                    Policy</a></li>
                <li><a href="/html/terms.html" class="py-1 d-block D-FooterLinks"><span
                      class="ri-checkbox-circle-line mr-2"></span>Terms and Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

    











<!--Link script sheets -->
<script src="/js/script.js" > </script>

</body>
</html>