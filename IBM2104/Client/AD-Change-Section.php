<?php session_start(); 
include '../partials/_config.php';?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>AD Change Section</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="AD-Change-Section.css" media="screen">
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
    <meta property="og:title" content="AD Change Section">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-b654" style="background-image: none"><div class="u-section-rows">
        <div class="u-clearfix u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-bd53">
          <div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
            <a href="" class="u-image u-logo u-image-1" data-image-width="378" data-image-height="92">
              <img src="images/IICS_New.png" class="u-logo-image u-logo-image-1">
            </a>
            <div class="u-container-style u-grey-10 u-group u-group-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="logout.php" class="u-btn u-button-style u-btn-1">Logout</a>
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
    <section class="u-clearfix u-section-1" id="sec-802f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Change Section</h1>
        <div class="u-form u-form-1">
        <form action="Update_AD.php" method="get" name="form" class="u-form-spacing-10" style="padding: 10px;">
          <!--<form action="Add-Drop.php" method="get" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form" style="padding: 10px;">-->
            <div class="u-form-group u-form-select u-form-group-1">
              <label for="select-f3ed" class="u-label">Subject Code</label>
              <div class="u-form-select-wrapper">
              <input type="text" placeholder="" id="text-9afa" name="subject_id" value="<?php echo $_GET["subject_id"] ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" readonly>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-2">
              <label for="select-ff32" class="u-label">Section</label>
              <div class="u-form-select-wrapper">
                <select id="select-ff32" name="section" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  <option value="none" selected hidden disabled>Please select a section: </option>
                  <option value="Y1">Y1</option>
                  <option value="Y2">Y2</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-textarea u-form-group-3">
              <label for="textarea-2629" class="u-label">Reasons</label>
              <textarea rows="4" cols="50" id="textarea-2629" name="textarea" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <input type="hidden" name="ad_action" value="CHANGE SECTION">
            <div class="u-align-left u-form-group u-form-submit">
              <a href="Update_AD.php" class="u-btn u-btn-submit u-button-style">OK</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <!--<div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
          -->
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="7e2eaf8a25a868666aa6a3286a18d0ed">
          </form>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Designer</span>
      </a>. 
    </section>
  
</body></html>