<?php session_start(); 
include '../partials/_config.php';?>
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
		"name": "Admin_section",
		"logo": "images/IICS_New.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Enrolment">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-b654" style="background-image: none"><div class="u-section-rows">
        <div class="u-clearfix u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-bd53">
          <div class="u-clearfix u-sheet u-sheet-1">
            <a href="" class="u-image u-logo u-image-1" data-image-width="378" data-image-height="92">
              <img src="images/IICS_New.png" class="u-logo-image u-logo-image-1">
            </a>
            <div class="u-container-style u-grey-10 u-group u-group-1">
              <div class="u-container-layout u-container-layout-1">
                <a href="Logout.php" class="u-btn u-button-style u-btn-1">Logout</a>
                <p class="u-text u-text-default u-text-1">Wong Wai Mun<br>Head Of Program<br>
                </p>
              </div>
            </div>
          </div>
          
          
          
          
          
        </div>
        <div class="u-section-row u-section-row-2" id="sec-64d9">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
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
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-border-active-palette-2-base u-border-hover-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Add-Drop.php" style="padding: 10px 20px;">Add Drop</a>
</li><li class="u-nav-item"><a class="u-active-palette-2-base u-border-active-palette-2-base u-border-hover-palette-2-base u-button-style u-hover-palette-2-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Payment.php" style="padding: 10px 20px;">Payment</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Enrolment.php">Enrolment</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Add-Drop.php">Add Drop</a>
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
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Course Enrolment</h1>
        <div class="u-form u-form-1">
          <form action="Enrolment.php" class="u-form-spacing-10 " name="form" style="padding: 10px;" method="get">
            <div class="u-form-group u-form-select u-vertical-form-control-visible u-form-group-1">
              <label for="select-aa15" class="u-label">Course</label>
              <div class="u-form-select-wrapper">
                <select id="select-aa15" name="subject_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                <option value="none" selected hidden disabled>Please select a subject: </option>
                  <?php
                 $sql1 = "select * from subject ";
                    $res1 = mysqli_query($con , $sql1);
                    while ($data1 = mysqli_fetch_assoc($res1)) {
                      $subject_id = $data1["subject_id"];
                      echo '<option value="'.$data1["subject_id"].'">'.$data1["subject_id"].'</option>';
                    }
                  ?>  
                
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <a href="Enrolment.php" class="u-btn u-btn-submit u-button-style">Search<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="7e2eaf8a25a868666aa6a3286a18d0ed">
          </form>
        </div>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <?php  
        if (isset($_GET["subject_id"])){
          echo '<p> Course Selected: '.$_GET["subject_id"].'</p>';
        }
        ?>
          <table class="u-table-entity">
            <colgroup>
              <col width="15.8%">
              <col width="50.9%">
              <col width="33.3%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 46px;">
                <th class="u-border-1 u-border-black u-table-cell">Student ID</th>
                <th class="u-border-1 u-border-black u-table-cell">Name</th>
                <th class="u-border-1 u-border-black u-table-cell">Section</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
              <?php
              if (isset($_GET["subject_id"])){
                $subject_id = $_GET["subject_id"];
              
              $sql1 = "select * from enroll_sub where subject_id = '$subject_id'";
                 $res1 = mysqli_query($con , $sql1);
                 $count = 1;
                 if(mysqli_num_rows($res1)==0) {
                  echo "<p>No record in the Products table.</p>"; }
                else {
                  while ($data1 = mysqli_fetch_assoc($res1)) {
                    $sql2 = "select * from enroll where enroll_no =".$data1['enroll_no'];
                    $res2 = mysqli_query($con , $sql2);
                    $data2 = mysqli_fetch_assoc($res2);
                    
                    $sql3 = "select * from students where student_id ='".$data2['student_id']."'";
                    $res3 = mysqli_query($con , $sql3);
                    $data3 = mysqli_fetch_assoc($res3);
                    echo '<tr style="height: 54px;">    
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$data2["student_id"].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$data3["name"].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$data1["Section"].'</td>
                      </tr>';
                 }
                }
              }  
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Free Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Builder</span>
      </a>. 
    </section>
  
</body></html>