<?php include "mainhead.php" ?>
<?php
$email=$_POST["email"];
$sql ="SELECT * FROM student where email='".$email."'";
$result = $con->query($sql);
    if ($result->num_rows > 0) 
	{
		$to =$email;
        $subject ="Password Recovery";
		
		$url="http://localhost/OnlineExam/srecover.php?email=".$email;
		echo "$url";
        $txt = "Click Here To Change Password  ".$url;
        $headers = "From: venuprojects2015@gmail.com" . "\r\n";
         mail($to,$subject,$txt,$headers);
		 $address="Check Your Email";
		header('Location:msg.php?msg='.$address);
	}else
	{
		
		echo "Invalid Email Address";
	}
?>