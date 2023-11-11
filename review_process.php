

<?php
session_start();
include "db.php";


	$f_name = $_REQUEST["firstname"];
	$email =$_REQUEST['email'];
    $review=$_REQUEST['review'];
	
    $user_id=$_SESSION["uid"];
    $pid = $_SESSION["product_id"];
    $sql = "INSERT INTO reviews VALUES ('$f_name', '$email', '$review','$pid' )";
		
    if(mysqli_query($con,$sql)){

        $message="Review Submitted Successfully";
        echo "<script>alert('$message');</script>";
        
    }
    else{
        echo(mysqli_error($con));

    




}




?>