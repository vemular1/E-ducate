<?php include "shead.php" ?>
<div style="position:absolute; top:250px; left:470px">
<?php
session_start();

?>
<?php
$sid=$_SESSION["sid"];
$qid2=$_GET["qid2"];
$qid=$_GET["qid"];
$que=$_GET["que"];
$eid2=$_GET["eid2"];
$eid=$_GET["eid"];

$qnum=0;$sc=0;
$a=null;$b=null;$url=null;$status=null;

$sql2 ="select count(qnum) max from exam where sid='".$sid."' and eid2='".$eid2."' and opt!=''";
       $result2 =$con->query($sql2);      
        if (!$result2) die($con->error);
        while($row2=mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
        {
            $qnum=$row2['max'];
        } 
		
		$sql ="select * from exam where sid='".$sid."' and eid2='".$eid2."'";
       $result = $con->query($sql);
         if ($result->num_rows > 0) { 
	     while($row = $result->fetch_assoc()) {
			  $gv1=$row["ans"];
			  $gv2=$row["opt"];
	    	  if($gv1==$gv2)
			  {
				  $sc=$sc+1;
			  }
	    	}
			}
?>

<h2>Total Number of Questions : <?php echo "$que";?></h2>
<h2>Number of Questions Answered  : <?php echo "$qnum";?></h2>
<h2>Score : <?php echo "$sc";?></h2>

<?php 

$sql3 ="select * from exam where sid='".$sid."' and eid2='".$eid2."'";
$result3 = $con->query($sql3);
   if ($result3->num_rows > 0) { ?>
   <table border=1><tr><th>Question Number</th><th>Question</th><th>Answer</th><th>Your Answer</th><th>Status</th></tr>
   <?php while($row3 = $result3->fetch_assoc()) {
		$pv1=$row3["ans"];
		$pv2=$row3["opt"];
		$pv3=$row3["qnum"];
		$pv4=$row3["question"];
		
		if($pv1==$pv2)
		{
			$status="Correct";
		}else{
			$status="Wrong";
		}?>
		<tr><td><?php echo "$pv3";?></td><td><?php echo "$pv4";?></td><td><?php echo "$pv1";?></td><td><?php echo "$pv2";?></td><td><?php if($status=="Correct"){?><font color=green><?php echo "$status"; }else{?><font color=red><?php echo "$status";}?></font></td></tr>
  <?php }?></table>
 <?php  }
      
?>