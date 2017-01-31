<?php include 'title.php';?>
<?php
session_start();
?>
<?php
$sid=$_POST["sid"];
$pass=$_POST["pass"];

$sql ="select * from student where sid='".$sid."' and pass='".$pass."'";

$result = $con->query($sql);
    if ($row = $result->fetch_assoc()) {
          $_SESSION["sid"] =$sid;
		  $_SESSION["sname"] =$row["sname"];
		  $_SESSION["pass"] =$pass;
		  $_SESSION["fname"] =$row["uname"];
	     header('Location:studenthome.php');
		
	} else {
    $msg="msg.php?msg=Invalid Login Details";
header('Location:'.$msg);
}
?>