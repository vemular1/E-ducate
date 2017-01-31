<?php include "ihead.php" ?>
<div style="position:absolute; top:300px; left:550px">
<font style="font-family:times; font-size:14pt;">
<script>
function validation()
{
var a=document.s.note.value;
if(a=="")
{
alert("Write The Note");
document.s.note.focus();
return false;
}
}
</script>
<?php 
$sql ="select * from sub";
$result = $con->query($sql);
   if ($result->num_rows > 0) { ?>
 <form name="s" action="notice1.php" method="post" onsubmit="return validation();">
 <table>
 <tr><td>Notice</td><td> <textarea name=note></textarea></td></tr>
 <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
	<tr><td>Select Course </td><td><select name=sub>
	
	 <?php  while($row = $result->fetch_assoc()) {
		$sub=$row["sub"];
       ?>
	   <option value='<?php echo "$sub"; ?>'><?php echo "$sub"; ?></option>
   }<?php }?></select></td></tr>
   <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
   
	<tr><td></td><td><input type=submit value="Add Note"></td></tr></table>
	</form>
	<?php }else{
		
		$msg="imsg.php?msg=No Subjects";
           header('Location:'.$msg);
	}?>
	