<div style="position:absolute; top:20px; left:470px">
<body bgcolor="#EBF4FA">
<?php include "DBConnection.php" ?>
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
$a=null;$b=null;$url=null;

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
			
			$url="result1.php?qid=".$qid."&qid2=".$qid2."&que=".$que."&eid=".$eid."&sid=".$sid."&eid2=".$eid2;
?>

<h2>Total Number of Questions : <?php echo "$que";?></h2>
<h2>Number of Questions Answered  : <?php echo "$qnum";?></h2>
<h2>Score : <?php echo "$sc";?></h2>
<a target="_parent" href="<?php echo "$url";?>" >Details</a>