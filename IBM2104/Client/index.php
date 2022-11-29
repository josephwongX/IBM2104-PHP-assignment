<?php session_start(); ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Client_section",
		"logo": "images/IICS_New.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.php" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-b654" style="background-image: none"><div class="u-section-rows">
        <div class="u-clearfix u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-bd53">
          <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
            <a href="" class="u-image u-logo u-image-1" data-image-width="378" data-image-height="92">
              <img src="images/IICS_New.png" class="u-logo-image u-logo-image-1">
            </a>
            <div class="u-container-style u-grey-10 u-group u-group-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="Logout.php" class="u-btn u-button-style u-btn-1">Logout</a>
                <?php
                echo ' <p class="u-text u-text-default u-text-1">'.$_SESSION["name"].'<br>'.$_SESSION["student_id"].'<br>DITN -Diploma in Information Technology
                </p>';
                ?>
              </div>
            </div>
          </div>
          
          
          
          
          
        </div>
        <div class="u-section-row u-section-row-2" id="sec-64d9">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
                <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-palette-2-base u-border-active-palette-2-base u-border-hover-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-border-active-palette-2-base u-border-hover-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Enrolment.php" style="padding: 10px 20px;">Enrolment</a>
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-border-active-palette-2-base u-border-hover-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" style="padding: 10px 20px;">Add Drop</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Add-Drop.php">Course Add Drop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Add-Drop-History.php">Add Drop History</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-border-active-palette-2-base u-border-hover-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Payment.php" style="padding: 10px 20px;">Payment</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Enrolment.php">Enrolment</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Add Drop</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Add-Drop.php">Course Add Drop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Add-Drop-History.php">Add Drop History</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Payment.php">Payment</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_d577">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1">Welcome to Online Enrolment Portal!</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-video-cover u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-custom-item u-file-icon u-icon u-icon-1"><img src="images/684872.png" alt=""></span>
                <h4 class="u-text u-text-body-color u-text-default u-text-2">Enrol</h4>
                <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                <ul class="u-custom-list u-file-icon u-text u-text-default u-text-grey-60 u-text-3">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-grey-70 u-text-grey-60 u-btn-1" href="Enrolment.php">
                    <li>
                      <div class="u-list-icon u-text-black">
                        <img src="images/3524349.png" alt="">
                      </div>Course Enrolment
                    </li>
                  </a>
                </ul>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-base u-radius-20 u-repeater-item u-video-cover u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-custom-item u-file-icon u-icon u-text-black u-icon-2"><img src="images/262008-5587249a.png" alt=""></span>
                <h4 class="u-text u-text-body-color u-text-default u-text-4">ADD / DROP</h4>
                <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-2"></div>
                <ul class="u-custom-list u-file-icon u-text u-text-default u-text-grey-60 u-text-5">
                  <li>
                    <div class="u-list-icon u-text-black">
                      <img src="images/3524349.png" alt="">
                    </div>
                    <a href="Add-Drop.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-grey-60 u-text-grey-60 u-btn-2">Course Add Drop</a>
                  </li>
                  <li>
                    <div class="u-list-icon u-text-black">
                      <img src="images/3524349.png" alt="">
                    </div>
                    <a href="Add-Drop-History.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-grey-70 u-text-grey-60 u-btn-3">Add Drop History</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-video-cover u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-custom-item u-file-icon u-icon u-icon-3"><img src="images/2223529.png" alt=""></span>
                <h4 class="u-text u-text-body-color u-text-default u-text-6">Payment</h4>
                <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-3"></div>
                <ul class="u-custom-list u-file-icon u-text u-text-default u-text-grey-60 u-text-7">
                  <li>
                    <div class="u-list-icon u-text-black">
                      <img src="images/3524349.png" alt="">
                    </div>
                    <a href="Payment.php" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-grey-60 u-text-grey-70 u-btn-4">Payment</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>