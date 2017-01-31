<?php include "mainhead.php" ?>
<?php
$email=$_POST["email"];
$pass1=$_POST["pass1"];

$sql = "update instructor set pass='$pass1' where email='$email'";
if ($con->query($sql) === TRUE) {
     header('Location:msg.php?msg=PasswordChanged');
	 }else
	 {
		header('Location:msg.php?msg=PasswordNotChanged'); 
	 }

?>