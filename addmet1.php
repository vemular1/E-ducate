<?php include 'title.php';?>
<?php
session_start();
$iname=$_SESSION["iname"];
?>
<?php


if(isset($_POST['sub']))
{
	$sub=$_POST['sub'];
	
}

$pic=basename($_FILES["pic"]["name"]);

$sql = "INSERT INTO meterial VALUES('".$iname."','".$sub."','".$pic."')";

if ($con->query($sql) === TRUE) {
	$msg="iimsg.php?msg=Meterial Added Success";
header('Location:'.$msg);
} else {
	$msg="iimsg.php?msg=Fails to Add Meterial";
header('Location:'.$msg);
}



$target_dir = "Meterials/";
$target_file = $target_dir .basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["pic"]["size"] > 100000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $url="sview.php?sid=".$sid;
		  $sid="<a href='$url'>".$sid."</a>";
          $msg="Student Added Successfully Profile Picture not Uploaded Please Add Latter. Student ID is ".$sid;
		  header('Location:imsg.php?msg='.$msg);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
           $sid2=$sid;
		   $url="sview.php?sid=".$sid;
		  $sid="<a href='$url'>".$sid."</a>";
		  if($sid2==0)
		  {
			  $msg="Meterial Uploaded Successfully";
		  header('Location:imsg.php?msg='.$msg);
		  }else{
			  $msg="Meterial Added Successfully.";
		  header('Location:imsg.php?msg='.$msg);
		  }
          
		
    } else {
        
		
          $msg="Meterial Added Successfully Profile Picture not Uploaded Please Add Latter";
		  header('Location:imsg.php?msg='.$msg);
    }
}
?>