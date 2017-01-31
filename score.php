<?php include "shead.php" ?>
<div style="position:absolute; top:250px; left:470px">
<?php
session_start();
?>
<?php
$sid=$_SESSION["sid"];
$url=null;
$qid2=array();
$a=0; $b=0; $i=0; $qid=0; $eid=0;

$sql ="select * from exam where sid='".$sid."'";

        $result = $con->query($sql);
         if ($result->num_rows > 0) { 
	     while($row = $result->fetch_assoc()) {
	    	$a=$row["eid2"];
			if($a!=$b)
		      {   
		        $qid2[$i]=$a;
				$i=$i+1;
		      }
			  $b=$a;
	    	}
			}
			$size= sizeof($qid2);
		
			a:for($i=0;$i<$size;$i++)
			{   
				if($qid2[$i]==0)
				{ 
			      
				  goto a;
				}
				
				$sql2 ="select * from exam where sid='".$sid."' and eid2='".$qid2[$i]."'";
                $result2 = $con->query($sql2);
                if ($result2->num_rows > 0) { 
	           if($row2 = $result2->fetch_assoc()) {
	    	    $qid=$row2["qid"];
				
				     $sql3 ="select * from quiz where qid='".$qid."'";
                     $result3 = $con->query($sql3);
                      if ($result3->num_rows > 0) { 
	                     while($row3 = $result3->fetch_assoc()) {
							  $mr1=$row3["qid"];
							  $mr2=$row3["que"];
							  $mr3=$row3["iname"];
							  $mr4=$row3["sub"];
							  $mr5=$row3["qname"];
							  $mr6=$row3["qtype"];
							 $url="result1.php?qid=".$mr1."&qid2=".$qid2[$i]."&que=".$mr2."&sid=".$sid."&eid2=".$qid2[$i]."&eid=0";?>
							 
							 <?php echo "$mr3";?>-->><?php echo "$mr4";?>-->><?php echo "$mr5";?>-->><?php echo "$mr6";?>-->><?php echo "$qid2[$i]";?>&nbsp&nbsp&nbsp<a href="<?php echo "$url";?>">Result</a><br><br>
	                    	  
						<?php }
					  }
				
	    	     }
			     }
			}
?>