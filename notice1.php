<?php include 'title.php';?>
<?php
session_start();

?>
<?php
$sub=$_POST["sub"];
$note=$_POST["note"];
$iname=$_SESSION["iname"];
$sql ="insert into notice values('".$iname."','".$sub."','".$note."',now())";
echo "$sql";
if ($con->query($sql) === TRUE) {
	$msg="imsg.php?msg=Notice Posted Successfully";
header('Location:'.$msg);
} else {
	$msg="imsg.php?msg=Fails to Post Notice";
    header('Location:'.$msg);
}

?>