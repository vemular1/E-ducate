<?php include "ihead.php" ?>
<?php
session_start();
$iname=$_SESSION["iname"];
?>
<?php
$a=0;$qid=0;$mqnum=0;
$url=null;
$sub=$_POST["sub"];
$qname=$_POST["qname"];
$qtype=$_POST["qtype"];
$que=$_POST["que"];
$que2=1000;

$sql ="select qid,que from quiz where iname='".$iname."' and sub='".$sub."' and qtype='".$qtype."' and qname='".$qname."'";
echo "$sql";
$result = $con->query($sql);
   if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
			$qid=$row["qid"];
	        $que2=$row["que"];
		}
   }
   if($que2<$que)
	{
		$msg="imsg.php?msg=You can not Add More Questions";
         header('Location:'.$msg);
	}else{
	
	$sql2 ="select max(qnum) max from questions where qid='".$qid."'";
    $result2 =$con->query($sql2);      
        if (!$result2) die($con->error);
        while($row2=mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
        {
            $mqnum=$row2['max'];
        } 

	$sql3 ="select qid from quiz where iname='".$iname."' and sub='".$sub."' and qtype='".$qtype."' and qname='".$qname."'";
    $result3 = $con->query($sql3);
   if ($result3->num_rows > 0) {
	   if($que==$mqnum)
		{
			$msg="imsg.php?msg=Questions Alredy Added";
            header('Location:'.$msg);
		}else
		{
			$msg="addquestion.php?qid=".$qid."&que=".$que."&qnum=".($mqnum+1);
            header('Location:'.$msg);
		}
   }else
   {
	      $sql4 ="insert into quiz(iname,sub,qname,qtype,que) values('".$iname."','".$sub."','".$qname."','".$qtype."','".$que."');";
           if ($con->query($sql4) === TRUE) {
           
		           $sql5 ="select max(qid) max from quiz where iname='".$iname."' and sub='".$sub."' and qtype='".$qtype."'and qname='".$qname."'";
                   $result5 =$con->query($sql5);      
                   if (!$result5) die($con->error);
                   while($row5=mysqli_fetch_array($result5, MYSQLI_ASSOC)) 
                   {
                   $qid=$row5['max'];
                   } 
				   
				   $msg="addquestion.php?qid=".$qid."&que=".$que."&qnum=1";
                    header('Location:'.$msg);
		   
             } else {
              	$msg="imsg.php?msg=Operation fails";
                 header('Location:'.$msg);
                 }
   }
	}
?>