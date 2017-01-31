<?php include 'title.php';?>
<?php
$auname=$_POST["auname"];
$apass=$_POST["apass"];

<div style="position:absolute; top:300px; left:550px">
<font style="font-family:times; font-size:14pt;">

<table><tr><td>  </td><td>  </td></tr>

<?php
session_start();
$iname=$_SESSION["iname"];
?>

$_SESSION["email"] =$row["email"];

$sql ="INSERT INTO Instructor VALUES('$iname','$dept','$email','$dob','$uname','$pass')";
if ($con->query($sql) === TRUE) {
	$msg="msg.php?msg=Instructor Registration Success";
header('Location:'.$msg);
} else {
	$msg="msg.php?msg=Instructor Registration Fail";
header('Location:'.$msg);
}


$sql ="SELECT uname,pass FROM admin where uname='".$uname."' and pass='".$pass."'";

$result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
      
	     header('Location:admin.php');
		
	} else {
    echo "Invalid LoginDetails";
}


if ($conn->query($sql) === TRUE) {
} else {
}



$msg="msg.php?msg=Student";
header('Location:'.$msg);