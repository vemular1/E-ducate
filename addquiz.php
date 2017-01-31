<?php include "ihead.php" ?>
<div style="position:absolute; top:250px; left:500px">
<font style="font-family:times; font-size:14pt;">
<script>
function validation()
{
var a=document.s.qname.value;
if(a=="")
{
alert("Enter Quiz Name");
document.s.qname.focus();
return false;
}
var b=document.s.que.value;
if(b=="")
{
alert("Number Of Questions");
document.s.que.focus();
return false;
}
}
</script>
<?php 
$sql ="select * from sub";
$result = $con->query($sql);
   if ($result->num_rows > 0) { ?>
 <form name="s" action="addquiz1.php" method="post" onsubmit="return validation();">
 <table>
 	<tr><td>Select Course </td><td><select name=sub>
	
	 <?php  while($row = $result->fetch_assoc()) {
		$sub=$row["sub"];
       ?>
	   <option value='<?php echo "$sub"; ?>'><?php echo "$sub"; ?></option>
   }<?php }?></select></td></tr>
   <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
    
	<tr><td>Notice</td><td><input type=text name=qname ></td></tr>
 <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
 
 <tr><td>Quiz Type</td><td><select name=qtype>
	<option>Easy</option>
	<option>Medium</option>
	<option>Hard</option>
	</select></td></tr>
 <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
 <tr><td>Number Of Questions </td><td><input type=number name=que size=6></td></tr>
 <tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr><tr><td>  </td><td>  </td></tr>
	<tr><td></td><td><input type=submit value="Proceed"></td></tr></table>
	</form>
	<?php }else{
		
		$msg="imsg.php?msg=No Subjects";
           header('Location:'.$msg);
	}?>
	