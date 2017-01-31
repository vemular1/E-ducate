<?php include 'mainhead.php';?>
<div style="position:absolute; top:200px; left:500px">
<font style="font-family:times; font-size:14pt;">
<!DOCTYPE html>
<html>
<body>
<script>
function myFunction() {
    window.open("register.php","_self");
}
function myFunction1() {
    window.open("reginst.php","_self");
}
</script>
<script>
function validation()
{
var a=document.s.iname.value;
if(a=="")
{
alert("Enter Student Name");
document.s.iname.focus();
return false;
}
var c=document.s.email.value;
if(c=="")
{
alert("Enter Student Email");
document.s.email.focus();
return false;
}
var d=document.s.dob.value;
if(d=="")
{
alert("Enter Student Date Of Birth");
document.s.dob.focus();
return false;
}
var e=document.s.uname.value;
if(e=="")
{
alert("Enter Student Full Name");
document.s.uname.focus();
return false;
}
var f=document.s.pass.value;
if(f=="")
{
alert("Enter Student Password");
document.s.pass.focus();
return false;
}
var g=document.s.pass2.value;
if(g=="")
{
alert("Enter Student Conform Passwprd");
document.s.pass2.focus();
return false;
}

var i=document.s.pass.value;
var j=document.s.pass2.value;
if(i!=j)
{
alert("Password And Conform Password Are Not Same");
document.s.pass.focus();
return false;
}
}
</script>
 <input type="checkbox"  onclick="myFunction()">Student 
 <input type="checkbox" checked = "checked" onclick="myFunction1()">Instructor
 <form action="reginst1.php" onsubmit="return validation();" name="s" method=post>
<br><br>
<table>
 <tr><td>Name</td><td> <input type=text name="iname" autofocus></td></tr>
<tr><td>Department</td><td> <select name=dept>
<option>Accounting</option>
<option>Chemistry</option>
<option>Computer Science</option>
<option>Mathematics</option>
<option>Public Health</option>
<option>Statistics</option>
</select></td></tr>
<tr><td>Email</td><td> <input type=text name="email"></td></tr>
<tr><td>Date Of Birth</td><td> <input type=date name="dob"></td></tr>
<tr><td>User Name</td><td> <input type=text name="uname"></td></tr>
<tr><td>Password</td><td> <input type=password name="pass"></td></tr>
<tr><td>Confirm Password</td><td> <input type=password name="pass2"></td></tr>
<tr><td></td><td><input type=submit value="Register"></td></tr>
</form>
</body>
</html>
</div>