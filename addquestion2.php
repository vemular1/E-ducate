<?php include 'title.php';?>
<?php
session_start();
$iname=$_SESSION["iname"];
?>
<?php


if(isset($_POST['qid']))
{
	$qid=$_POST['qid'];
	
}
if(isset($_POST['que']))
{
	$que=$_POST['que'];
	
}
if(isset($_POST['qnum']))
{
	$qnum=$_POST['qnum'];
	
}
if(isset($_POST['question']))
{
	$question=$_POST['question'];
	
}if(isset($_POST['opt1']))
{
	$opt1=$_POST['opt1'];
	
}
if(isset($_POST['opt2']))
{
	$opt2=$_POST['opt2'];
	
}
if(isset($_POST['opt3']))
{
	$opt3=$_POST['opt3'];
	
}
if(isset($_POST['opt4']))
{
	$opt4=$_POST['opt4'];
	
}if(isset($_POST['ans']))
{
	$ans=$_POST['ans'];
	
}

$pic=basename($_FILES["pic"]["name"]);

$sql = "INSERT INTO questions(qid,qnum,question,opt1,opt2,opt3,opt4,ans,file) values('".$qid."','".$qnum."','".$question."','".$opt1."','".$opt2."','".$opt3."','".$opt4."','".$ans."','".$pic."')";

if ($con->query($sql) === TRUE) {
	            $msg="addquestion.php?qid=".$qid."&que=".$que."&qnum=".($qnum+1);
                header('Location:'.$msg);
} else {
	$msg="iimsg.php?msg=Fails to Add Meterial";
header('Location:'.$msg);
}



$target_dir = "Questions/";
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
			  $msg="addquestion.php?qid=".$qid."&que=".$que."&qnum=".($qnum+1);
                header('Location:'.$msg);
			  
		  }else{
			 $msg="addquestion.php?qid=".$qid."&que=".$que."&qnum=".($qnum+1);
                header('Location:'.$msg);
		  }
          
		
    } else {
        
		
         $msg="addquestion.php?qid=".$qid."&que=".$que."&qnum=".($qnum+1);
                header('Location:'.$msg);
    }
}
?>