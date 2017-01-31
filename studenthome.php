<?php include "shead.php" ?>
<div style="position:absolute; top:200px; left:570px">
<?php
session_start();

?>
<?php  
$sid=$_SESSION["sid"];
$pass=$_SESSION["pass"];
$uname=null;$pname=null;$pic=null;

$sql ="select uname,pname from student where sid='".$sid."' and pass='".$pass."'";
$result = $con->query($sql);
    while($row = $result->fetch_assoc()){
		$uname=$row["uname"];
		$pname=$row["pname"];
		$pic="Gallery\\".$pname;
	}
?>
<img src='<?php echo "$pic";?>' alt="No Image" width=200 height="300"><br>
<h3>WELCOME &nbsp <?php echo strtoupper("$uname");?></h3><br><br>