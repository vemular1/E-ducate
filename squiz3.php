<?php include "shead.php" ?>
<div style="position:absolute; top:300px; left:550px">
<script>
function myFunction() {
var a=document.getElementById("myid6").value;
var b=document.getElementById("myid4").value;
var c=document.getElementById("myid5").value;
window.open("squize1.php?sub="+b+"&qname="+c+"&qtype="+a,"_self");
}
</script>
<?php

$sub=$_GET["sub"];
$qname=$_GET["qname"];

$sql ="select qtype from quiz where sub='".$sub."' and qname='".$qname."'";
$result = $con->query($sql);
   if ($result->num_rows > 0) { ?>
        <input type=hidden value="<?php echo "$sub"; ?>" id="myid4">
     	<input type=hidden value="<?php echo "$qname"; ?>" id="myid5">
    	Select Quiz <select name=qtype onChange="myFunction()" id="myid6">
	    <option value=""><-Quiz Type-></option>
	 <?php  while($row = $result->fetch_assoc()) {
		$qtype=$row["qtype"];
       ?>
	   <option value='<?php echo "$qtype"; ?>'><?php echo "$qtype"; ?></option>
   }<?php }?></select>
	<?php }else{
		
		$msg="imsg.php?msg=No Quiz Type";
           header('Location:'.$msg);
	} ?>