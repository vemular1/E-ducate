<?php include 'title.php';?>
<?php  
$iname=$_POST["iname"];
$dept=$_POST["dept"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];

$sql ="INSERT INTO Instructor VALUES('$iname','$dept','$email','$dob','$uname','$pass')";
if ($con->query($sql) === TRUE) {
	$msg="msg.php?msg=Instructor Registration Success";
header('Location:'.$msg);
} else {
	$msg="msg.php?msg=Instructor Registration Fail";
header('Location:'.$msg);
}
	
?>
