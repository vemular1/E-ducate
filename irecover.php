<script>
function validation()
{
var a=document.s.pass1.value;
if(a=="")
{
alert("Enter New Password");
document.s.pass1.focus();
return false;
}
var b=document.s.pass2.value;
if(b=="")
{
alert("Enter Conform Password");
document.s.pass2.focus();
return false;
}
if(a!=b)
{
	alert("New Password And Conform Password Should Same");
document.s.pass2.focus();
return false;
}
}
</script>

<?php
$email=$_GET["email"];
?>
<?php include "mainhead.php" ?>
<div class="container-fluid">
<div class="row">
<div class=col-md-4><center></center></div>
<div class=col-md-4><center><br><br><br><br><br><br>
<h3>New Password</h3>
<table class="table table1"><tbody>
<form action="irecover1.php" method="post" name="s" onsubmit="return validation();">
<input type=hidden name=email value='<?php echo "$email"?>'>
<tr><td>New Password</td><td><input type=password name=pass1 placeholder="Choose New Password"></td></tr>
<tr><td>Confirm Password</td><td><input type=password name=pass2 placeholder="Conform Password"></td></tr>
<tr><td></td><td><input type=submit value="Change"></td></tr>
</form>
</tbody>
</table>