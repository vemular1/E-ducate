<?php include "shead.php" ?>
<div style="position:absolute; top:250px; left:470px">
<?php
session_start();
?>
<?php
$sid=$_SESSION["sid"];
$qid2=$_GET["qid2"];
$qid=$_GET["qid"];
$qnum=$_GET["qnum"];
$que=$_GET["que"];
$eid2=$_GET["eid2"];
$url=null; $pic=null; $qid22=0; $eid=0;

if($que<$qnum)
{

		$sql ="select * from questions where qid='".$qid."' and qnum=1";
        $result = $con->query($sql);
         if ($result->num_rows > 0) { 
	     while($row = $result->fetch_assoc()) {
	    	$qid22=$row["qid2"];
	    	}
			}
	    
		$sql2 ="select eid from exam where qid='".$qid."' and qid2='".$qid22."' and sid='".$sid."' and qnum=1";
        $result2 = $con->query($sql2);
         if ($result2->num_rows > 0) { 
	     while($row2 = $result2->fetch_assoc()) {
	    	$eid=$row2["eid"];
	    	}
			}
			
			$msg="result.php?qid=".$qid."&qid2=".$qid22."&que=".$que."&eid=".$eid."&sid=".$sid."&eid2=".$eid2;
	        header('Location:'.$msg);
	
}else
{
		$sql3 ="select * from questions where qid2='".$qid2."' and qid='".$qid."' and qnum='".$qnum."'";
        $result3 = $con->query($sql3);
         if ($result3->num_rows > 0) { 
	     while($row3 = $result3->fetch_assoc()) {
	    	   $myvar=$row3["file"];
			     
				 $gv1=$row3["qnum"];
			     $gv2=$row3["question"];
			     $gv3=$row3["ans"];
				 $gv4=$row3["qnum"];
				 $gv5=$row3["question"];
				 $gv6=$row3["opt1"];
				 $gv7=$row3["opt2"];
				 $gv8=$row3["opt3"];
				 $gv9=$row3["opt4"];
				 
			?>    Question <?php echo "$gv1";?> of <?php echo "$que";?>
	        <form action=myquiz1.php method="post">
	       <input type=hidden name=qid value="<?php echo "$qid"; ?>">
	       <input type=hidden name=eid2 value="<?php echo "$eid2";?>">
	       <input type=hidden name=qid2 value="<?php echo "$qid2";?>">
	       <input type=hidden name=qnum value="<?php echo "$qnum";?>">
	       <input type=hidden name=que value="<?php echo "$que"; ?>">
	       <input type=hidden name=question value="<?php  echo "$gv2"; ?>">
	       <input type=hidden name=ans value="<?php echo "$gv3";?>">
	      <?php  if($myvar!=null)
	      {   $pic="Questions\\".$myvar;?> 
	           <img src="<?php echo "$pic";?>" alt="No Image" width=200 height="300"><br>
	        <?php } ?>
	        <h2><?php echo "$gv4";?>&nbsp&nbsp<?php echo "$gv5";?></h2>
            <h3><input type=radio name=opt value="<?php echo "$gv6";?>"> <?php echo "$gv6";?></h3>
	        <h3><input type=radio name=opt value="<?php echo "$gv7";?>"> <?php echo "$gv7";?></h3>
	        <h3><input type=radio name=opt value="<?php echo "$gv8";?>"> <?php echo "$gv8";?></h3>
	        <h3><input type=radio name=opt value="<?php echo "$gv9";?>"> <?php echo "$gv9";?></h3><br><br>
	        <input type=submit <?php if(($que)==$qnum){?>value="Submit" <?php }else{ ?> value="Next" <?php } ?>>
	        </form>
	<?php if($que>$qnum){
	$url="result.php?qid=".$qid."&qid2=".$qid2."&que=".$que."&eid=".$eid."&sid=".$sid."&eid2=".$eid2;
	?>
	<a href="<?php echo "$url";?>"><input type=button value="Exit"></a>
	<?php }

}}
	
	
}
?>