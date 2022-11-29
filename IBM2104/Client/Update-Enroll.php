<?php 
    session_start();
 	include '../partials/_config.php';

	$action = $_GET['action'];
    $student_id = $_SESSION["student_id"];
    /*
	$ad_no= $_GET['ad_no'];
    
    $sql2 = "select * from add_drop where ad_no = '$ad_no'";
    $res2 = mysqli_query($con , $sql2);
    $data2 = mysqli_fetch_assoc($res2);
    $subject_id = $data2['subject_id'];
    $section = $data2['Section'];
    $enroll_no = $data2['enroll_no'];
    */
	if ($action == 'confirm') {
        mysqli_query($con, "insert into enroll (student_id) values ('$student_id')");
        $sql2 = "select * from enroll where student_id = '$student_id'";
        $res2 = mysqli_query($con , $sql2);
        $data2 = mysqli_fetch_assoc($res2);
        $enroll_no = $data2['enroll_no'];
        for($i=0; $i<=count($_SESSION["enrolls"]) && $_SESSION["enrolls"][$i] != null; $i++){
            $subject_id = $_SESSION["enrolls"][$i][0];
            $section = $_SESSION["enrolls"][$i][1];
            mysqli_query($con, "insert into enroll_sub values ($enroll_no, '$subject_id', '$section')");        
        }
		header('location:Home.php');
	}
    if ($action == 'drop') {
        echo "test drop";
        $enroll_i = $_GET['enroll_i'];
        unset($_SESSION["enrolls"][$_enroll_i]);
        $_SESSION["enrolls"]= array_values($_SESSION["enrolls"]);
        //array_splice($_SESSION["enrolls"], $enroll_i, 1); 
        header('location:Enrolment.php');
    }
	if($action == 'cancel') {
		/*
        mysqli_query($con," update add_drop set Status = 'Rejected' where ad_no = '$ad_no'");
        */
        unset($_SESSION["enrolls"]);
        header('location:Home.php');
	}
	

	
 ?>