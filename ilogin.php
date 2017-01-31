<?php include "mainhead.php" ?>
<div style="position:absolute; top:200px; left:550px">
<font style="font-family:times; font-size:14pt;">
<script>
function myFunction() {
    window.open("slogin.php","_self");
}
function myFunction1() {
    window.open("ilogin.php","_self");
}
</script>
<script>
function validation()
{
var a=document.s.uname.value;
if(a=="")
{
alert("Enter Instructor User Name");
document.s.uname.focus();
return false;
}
var b=document.s.pass.value;
if(b=="")
{
alert("Enter Instructor Password");
document.s.pass.focus();
return false;
}
}
</script>
<input type="checkbox"  onclick="myFunction()">Student 
 <input type="checkbox" checked = "checked" onclick="myFunction1()">Instructor
 <br><br>
<form name="s" action="ilogin1.php" method="post" onsubmit="return validation();">
<table><tr><td> </td><td>  </td></tr>
<tr><td>User Name </td><td><input type=text name="uname"></td></tr>
<tr><td>Password </td><td><input type=password name="pass"></td></tr>
<tr><td></td><td><input type=submit value="Login"></td></tr>
<tr><td></td><td><a href="iforgot.php">Forgot Password Click Here</a></td></tr>
</table>
</form>