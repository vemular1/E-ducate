<?php include "shead.php" ?>
<div style="position:absolute; top:300px; left:550px">
<script>
function myFunction() {
var a=document.getElementById("myid3").value;
var b=document.getElementById("myid2").value;
window.open("squiz3.php?sub="+b+"&qname="+a,"_self");
}
</script>
<?php 
$sub=$_GET["sub"];

$sql ="select qname from quiz where sub='".$sub."'";
$result = $con->query($sql);
   if ($result->num_rows > 0) { ?>
   <input type=hidden value="<?php echo "$sub"; ?>" id="myid2">
	Select Quiz <select name=qname onChange="myFunction()" id="myid3">
	<option value=""><-Quiz Name-></option>
	<?php  while($row = $result->fetch_assoc()) {
		$qname=$row["qname"];
       ?>
	   <option value='<?php echo "$qname"; ?>'><?php echo "$qname"; ?></option>
   }<?php }?></select>
	<?php }else{
		
		$msg="imsg.php?msg=No Quiz";
           header('Location:'.$msg);
	} 
?>