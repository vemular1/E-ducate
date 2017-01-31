<?php include "shead.php" ?>
<?php
session_start();
?>
<?php

$sid=$_SESSION["sid"];
$sub=$_GET["sub"];
$qname=$_GET["qname"];
$qtype=$_GET["qtype"];

$a=0; $qid=0; $mqnum=0; $que=0; $eid2=0;$qid2=0;
$url=null;

$sql ="select qid,que from quiz where qname='".$qname."' and sub='".$sub."' and qtype='".$qtype."'";
$result = $con->query($sql);
   if ($result->num_rows > 0) { 
	 while($row = $result->fetch_assoc()) {
		$qid=$row["qid"];
		$que=$row["que"];
	 }
   }
   
   $sql2 ="select max(qnum) max from questions where qid='".$qid."'";
    $result2 =$con->query($sql2);      
        if (!$result2) die($con->error);
        while($row2=mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
        {
            $mqnum=$row2['max'];
        } 
		if($que==$mqnum)
		{
			 echo "inside";
		        	$sql3 ="select max(eid2) max from exam";
                 $result3 =$con->query($sql3);      
                  if (!$result3) die($con->error);
                  while($row3=mysqli_fetch_array($result3, MYSQLI_ASSOC)) 
                  {
                   $eid2=$row3['max'];
                  } 
				  
				  $sql4 ="select * from questions where qid='".$qid."' and qnum=1";
				  $result4 = $con->query($sql4);
				  if ($result4->num_rows > 0) { 
                	 while($row4 = $result4->fetch_assoc()) {
		              $qid2=$row4["qid2"];
		              $msg="myquiz.php?qid=".$qid."&qid2=".$qid2."&que=".$que."&qnum=1&eid2=".($eid2+1);
					  header('Location:'.$msg);
	               }
                   }
				  
		}else
		{
			        $msg="smsg.php?msg=Question Paper not Uploaded Completly";
				header('Location:'.$msg);
		}
   
   
   
   
   
   ?>
