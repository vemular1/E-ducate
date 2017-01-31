<?php include "ihead.php" ?>
<div style="position:absolute; top:250px; left:500px">
<font style="font-family:times; font-size:14pt;">
<script>
function validation()
{
var a=document.s.sub.value;
if(a=="")
{
alert("Enter Subject Name");
document.s.sub.focus();
return false;
}
}
</script>
<br><br>
<form action="addsub1.php" onsubmit="return validation();" name="s" method=post>
Enter Course Name <input type=text name=sub>
<input type=submit value="ADD">
</form>