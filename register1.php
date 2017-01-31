<?php include 'title.php';?>
<?php


if(isset($_POST['sname']))
{
	$sname=$_POST['sname'];
	
}
if(isset($_POST['sid']))
{
	$sid=$_POST['sid'];
	
}
if(isset($_POST['dept']))
{
	$dept=$_POST['dept'];
	
}
if(isset($_POST['email']))
{
	$email=$_POST['email'];

}
if(isset($_POST['dob']))
{
	$dob=$_POST['dob'];
	
}
if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	
}
if(isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	
}
$pname=$uname.".jpg";
$sql = "INSERT INTO student values ('$sname','$sid','$dept','$email','$dob','$uname','$pass','$pname')";

if ($con->query($sql) === TRUE) {
	$msg="msg.php?msg=Student Registration Success";
header('Location:'.$msg);
} else {
	$msg="msg.php?msg=Student Registration Fail";
header('Location:'.$msg);
}



$target_dir = "Gallery/";
$target_file = $target_dir .$uname.".jpg";
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
// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $url="sview.php?sid=".$sid;
		  $sid="<a href='$url'>".$sid."</a>";
          $msg="Student Added Successfully Profile Picture not Uploaded Please Add Latter. Student ID is ".$sid;
		  header('Location:msg.php?msg='.$msg);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
           $sid2=$sid;
		   $url="sview.php?sid=".$sid;
		  $sid="<a href='$url'>".$sid."</a>";
		  if($sid2==0)
		  {
			  $msg="Student Registration Success";
		  header('Location:msg.php?msg='.$msg);
		  }else{
			  $msg="Student Added Successfully. Student ID is ".$sid;
		  header('Location:msg.php?msg='.$msg);
		  }
          
		
    } else {
        
		$url="sview.php?sid=".$sid;
		  $sid="<a href='$url'>".$sid."</a>";
          $msg="Student Added Successfully Profile Picture not Uploaded Please Add Latter. Student ID is ".$sid;
		  header('Location:msg.php?msg='.$msg);
    }
}
?>