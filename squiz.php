<?php include "shead.php" ?>
<div style="position:absolute; top:300px; left:550px">
<script>
function myFunction() {
var a=document.getElementById("myid").value;
window.open("squiz2.php?sub="+a,"_self");
}
</script>
<?php
$sql ="select * from sub";
$result = $con->query($sql);
   if ($result->num_rows > 0) { ?>

	<tr><td>Select Course </td><td><select name=sub onChange="myFunction()" id="myid">
	<option value=""><-Select Suject-></option>
	 <?php  while($row = $result->fetch_assoc()) {
		$sub=$row["sub"];
       ?>
	   <option value='<?php echo "$sub"; ?>'><?php echo "$sub"; ?></option>
   }<?php }?></select>
	<?php }else{
		
		$msg="imsg.php?msg=No Subjects";
           header('Location:'.$msg);
	} ?>