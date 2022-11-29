<?php 
 	include '../partials/_config.php';

	$updateState = $_GET['update'];
	$ad_no= $_GET['ad_no'];
    
    $sql2 = "select * from add_drop where ad_no = '$ad_no'";
    $res2 = mysqli_query($con , $sql2);
    $data2 = mysqli_fetch_assoc($res2);
    $subject_id = $data2['subject_id'];
    $section = $data2['Section'];
    $enroll_no = $data2['enroll_no'];
	if ($updateState == 'approve') {
		mysqli_query($con,"update add_drop set Status = 'Approved' where ad_no = '$ad_no'");
        if ($data2["ad_action"] == "ADD"){
            mysqli_query($con, "insert into enroll_sub values ($enroll_no, '$subject_id', '$section')");
        } else if ($data2["ad_action"] == "DROP"){
            mysqli_query($con, "delete from enroll_sub where enroll_no = $enroll_no and subject_id = '$subject_id'");
        }else {
            mysqli_query($con, "update enroll_sub set section = '$section' where enroll_no = $enroll_no and subject_id = '$subject_id'");
        }
        
	}
	if($updateState == 'reject') {
		mysqli_query($con," update add_drop set Status = 'Rejected' where ad_no = '$ad_no'");
        
	}
	if($updateState == 'cancel') {
		
	}

	header('location:Add-Drop.php');
 ?>