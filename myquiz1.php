<?php include "shead.php" ?>
<?php
session_start();
?>
<?php
$sid=$_SESSION["sid"];
$qid=$_POST["qid"];
$eid2=$_POST["eid2"];
$qid2=$_POST["qid2"];
$qnum=$_POST["qnum"];
$que=$_POST["que"];
$question=$_POST["question"];
$ans=$_POST["ans"];
$opt=$_POST["opt"];

$sql ="insert into exam(eid2,sid,qid2,qid,qnum,question,ans,opt) values('".$eid2."','".$sid."','".$qid2."','".$qid."','".$qnum."','".$question."','".$ans."','".$opt."')";
if ($con->query($sql) === TRUE) {
	$msg="myquiz.php?qid=".$qid."&qid2=".($qid2+1)."&que=".$que."&qnum=".($qnum+1)."&eid2=".$eid2;
     header('Location:'.$msg);
} else {
	$msg="smsg.php?msg=Answer Not Submited";
header('Location:'.$msg);
}

?>