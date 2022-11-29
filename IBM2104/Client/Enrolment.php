<?php 
session_start(); 
include '../partials/_config.php';

if (!isset($_SESSION["enrolls"])){
  if(empty($_SESSION["enrolls"]))
  $_SESSION["enrolls"] = array();
}

if (isset($_GET["subject_id"]) & isset($_GET["section"])){
  if(!empty($_GET["subject_id"]) & !empty($_GET["section"])){
    if (count($_SESSION["enrolls"]) == 0){
      array_push($_SESSION["enrolls"][0], $_GET["subject_id"], $_GET["section"]);
    } else if (count($_SESSION["enrolls"]) > 1){
      $count_en = count($_SESSION["enrolls"]) - 2;
      array_push($_SESSION["enrolls"][$count_en], $_GET["subject_id"], $_GET["section"]);
    }
  }
}
echo '<br>';

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Enrolment</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Enrolment.css" media="screen">
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
    <meta property="og:title" content="Enrolment">
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
    <section class="u-align-center u-clearfix u-section-1" id="sec-569e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Course Enrolment</h1>
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="50%">
              <col width="50%">
            </colgroup>
            <tbody class="u-table-body">
              <tr style="height: 52px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Matriculation No:</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php 
                echo $_SESSION['student_id']; 
                ?></td>
              </tr>
              <tr style="height: 53px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">Student Name:</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php 
                echo $_SESSION['name']; 
                ?> </td>
              </tr>
              <tr style="height: 53px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell">IC / Passport:</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php 
                echo $_SESSION['ic']; 
                ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <h2 class="u-text u-text-default u-text-2">Course Selected:</h2>
        <div class="u-expanded-width u-table u-table-responsive u-table-2">
          <table class="u-table-entity">
            <colgroup>
              <col width="16.6%">
              <col width="23.4%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 46px;">
                <th class="u-border-1 u-border-black u-table-cell">No</th>
                <th class="u-border-1 u-border-black u-table-cell">Course</th>
                <th class="u-border-1 u-border-black u-table-cell">Section</th>
                <th class="u-border-1 u-border-black u-table-cell">Credits</th>
                <th class="u-border-1 u-border-black u-table-cell">Action</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
              <?php
              
                  $count = 1;
              for($i=0; $i<=count($_SESSION["enrolls"]) && $_SESSION["enrolls"][$i] != null; $i++){
                echo '
                <tr style="height: 54px;">
                  <td class="u-border-1 u-border-grey-30 u-table-cell">'.$count.'</td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">'.$_SESSION["enrolls"][$i][0].'</td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">'.$_SESSION["enrolls"][$i][1].'</td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">4</td>
                  <td class="u-border-1 u-border-grey-30 u-table-cell">
                  <form action="Update-Enroll.php" method="get" name="form" class="u-form-spacing-10" style="padding: 10px;">
                  <input type="hidden" name="action" value="drop">
                  <input type="hidden" name="enroll_i" value="'.$i.'">
                  <button type="submit" value="submit" style="background: none; padding: 0px; border: none;">
                  <span class="u-file-icon u-icon"><img src="images/7080604.png" alt=""></span>
                  </button>
                  </form>
                  </td>
                </tr>
                ';
                $count++;
              
                }
              
        
            
            if (isset($_SESSION["enrolls"])) {
            $count_en = count($_SESSION["enrolls"]);
            $_SESSION["enrolls"][$count_en] = array(); 
          }
            ?>
              <tr style="height: 54px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><span class="u-file-icon u-icon" data-href="Enrol-Add-Subject.php" title="Enrol Add Subject"><img src="images/4315609.png" alt=""></span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <form action="Update-Enroll.php" method="get" name="form" class="u-form-spacing-10" style="padding: 10px;">
        <input type="hidden" name="action" value="confirm">
        
        <a class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-2 u-radius-6 u-btn-1">
        <button type="submit" value="submit" style="background: none; padding: 0px; border: none;">Confirm</button><br>
        </a>
          
          </form>
        <form action="Update-Enroll.php" method="get" name="form" class="u-form-spacing-10" style="padding: 10px;">
        <input type="hidden" name="action" value="cancel">
        
        <a class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-2 u-palette-2-base u-radius-6 u-btn-2">
        <button type="submit" value="submit" style="background: none; padding: 0px; border: none;">Cancel</button><br>
        </a>
          </button>
        </form>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>