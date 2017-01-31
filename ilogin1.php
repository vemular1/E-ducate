<?php include 'title.php';?>
<?php
session_start();
?>
<?php
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$sql ="select * from instructor where uname='".$uname."' and pass='".$pass."'";

$result = $con->query($sql);
    if ($row = $result->fetch_assoc()) {
        $_SESSION["iname"] =$uname;
		$_SESSION["pass"] =$pass;
	     header('Location:instructorhome.php');
		
	} else {
    $msg="msg.php?msg=Invalid Login Details";
header('Location:'.$msg);
}
?>