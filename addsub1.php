<?php include 'title.php';?>
<?php
session_start();

?>
<?php
$sub=$_POST["sub"];
$iname=$_SESSION["iname"];
$sql ="insert into sub values('".$iname."','".$sub."')";
echo "$sql";
if ($con->query($sql) === TRUE) {
	$msg="imsg.php?msg=Subject Added Successfully";
header('Location:'.$msg);
} else {
	$msg="imsg.php?msg=Subject Fails to Add";
//header('Location:'.$msg);
}

?>