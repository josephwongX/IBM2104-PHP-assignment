<?php 
 	include 'partials/_config.php';

 	if (isset($_POST['login'])) {
 		
 		$username = $_POST['username'];
 		$password = $_POST['password'];

 		$cmd = " select * from students where student_id = '$username' AND password = '$password' limit 1";
 		$res = mysqli_query($con, $cmd);

 		if (mysqli_num_rows($res)>0) {
 			session_start();

 			$data = mysqli_fetch_assoc($res);

 			$_SESSION['student_id'] = $data['student_id'];
 			$_SESSION['name'] = $data['name'];
      $_SESSION['ic'] = $data['ic/passport'];

 			header('location:Client/index.php');
 		}else{
 			echo '<div class="alert alert-danger"><strong>Login faied!</strong> Check username and password</div>';
 		}
 	}	
 ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Student Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Student-Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "IBM2104",
		"logo": "images/IICS_New.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Student Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-b654"><div class="u-clearfix u-sheet u-sheet-1">     
  
  <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="378" data-image-height="92">
          <img src="images/IICS_New.png" class="u-logo-image u-logo-image-1">
        </a>
        
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-grey-90" href="Student-Login.php" style="padding: 10px 0px;">Student Login</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-grey-90" href="Admin-Login.php" style="padding: 10px 0px;">Admin Login</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Student-Login.php">Student Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin-Login.php">Admin Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-49e7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-default u-text-1">Online Enrolment System</h3>
            <div class="u-form u-login-control u-form-1">
              <form method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;" redirect="true">
                <div class="u-form-group u-form-name">
                  <label for="username-708d" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your Username" id="username-708d" name="username" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your Password" id="password-708d" name="password" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="Client/Home.php" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Login for Students</a>
                  <input type="submit" value="login" name="login" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-c1d7"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/web-design" target="_blank">
        <span>Web Design</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/wysiwyg-html-editor" target="_blank">
        <span>Best HTML editor</span>
      </a>. 
    </section>
  
</body></html> 