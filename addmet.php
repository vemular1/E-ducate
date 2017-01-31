<?php include "ihead.php" ?>
<div style="position:absolute; top:300px; left:550px">
<font style="font-family:times; font-size:14pt;">
<script>
function validation()
{
var a=document.s.pic.value;
if(a=="")
{
alert("Select Meterial");
document.s.pic.focus();
return false;
}
}
</script>
<?php 
$sql ="select * from sub";
$result = $con->query($sql);
   if ($result->num_rows > 0) { ?>
 <form name="s" action="addmet1.php" method="post" onsubmit="return validation();" enctype="multipart/form-data">
 <table>
 <tr><td>Select Meterial</td><td> <input type=file name=pic id="pic"></td></tr>
 <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
	<tr><td>Select Course </td><td><select name=sub>
	
	 <?php  while($row = $result->fetch_assoc()) {
		$sub=$row["sub"];
       ?>
	   <option value='<?php echo "$sub"; ?>'><?php echo "$sub"; ?></option>
   }<?php }?></select></td></tr>
   <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
   
	<tr><td></td><td><input type=submit value="Add Meterial"></td></tr></table>
	</form>
	<?php }else{
		
		$msg="imsg.php?msg=No Subjects";
           header('Location:'.$msg);
	}?>
	