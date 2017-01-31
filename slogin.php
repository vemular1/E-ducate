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
var a=document.s.sid.value;
if(a=="")
{
alert("Enter Student ID");
document.s.sid.focus();
return false;
}
var b=document.s.pass.value;
if(b=="")
{
alert("Enter Student Password");
document.s.pass.focus();
return false;
}
}
</script>
<input type="checkbox" checked = "checked" onclick="myFunction()">Student 
 <input type="checkbox"  onclick="myFunction1()">Instructor
 
<br><br>
<form name="s" action="slogin1.php" method="post" onsubmit="return validation();">
 <table>
<tr><td>Student ID</td><td><input type=text name="sid"></td></tr>
<tr><td>Password </td><td><input type=password name="pass"></td></tr>
<tr><td></td><td><input type=submit value="Login"></td></tr>
<tr><td></td><td><a href="sforgot.php">Forgot Password Click Here</a></td></tr>
</table>
</form>