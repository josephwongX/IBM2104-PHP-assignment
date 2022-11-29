<?php
    session_start();
 	include '../partials/_config.php';

	$ad_action = $_GET['ad_action'];
    $student_id = $_SESSION["student_id"];
    $subject_id = $_GET["subject_id"];
    $section = $_GET["section"];
    $reason = $_GET["textarea"];

    $sql2 = "select * from enroll where student_id = '$student_id'";
    $res2 = mysqli_query($con , $sql2);
    $data2 = mysqli_fetch_assoc($res2);
    $enroll_no = $data2['enroll_no'];

	mysqli_query($con, "insert into add_drop (student_id, enroll_no, ad_action, subject_id, Section, reason, Status) values ('$student_id', $enroll_no, '$ad_action', '$subject_id', '$section', '$reason', 'Pending')");   
	
	header('location:Add-Drop.php');
 ?>