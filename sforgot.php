<script>
function validation()
{
var a=document.s.email.value;
if(a=="")
{
alert("Enter Email");
document.s.email.focus();
return false;
}
}
</script>
<?php include 'index.php';?>
<div class="container-fluid">
<div class="row">
<div class=col-md-4><center></center></div>
<div class=col-md-4><center><br><br><br><br><br><br><br>
<h3>Change Password</h3><br>
<table class="table table1"><tbody>
<form action="sforgot1.php" method="post" name="s" onsubmit="return validation();">
<tr><td>Enter Your Email</td><td><input type=email name=email placeholder="Enter Your Email"></td><td><input type=submit value="Send"></td></tr>
</form>
</body>
</table>