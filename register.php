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
var a=document.s.sname.value;
if(a=="")
{
alert("Enter Student Name");
document.s.sname.focus();
return false;
}
var b=document.s.sid.value;
if(b=="")
{
alert("Enter Student ID");
document.s.sid.focus();
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
var h=document.s.pic.value;
if(h=="")
{
alert("Select Profile Picture");
document.s.pic.focus();
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

 <input type="checkbox" checked = "checked" onclick="myFunction()">Student 
 <input type="checkbox"  onclick="myFunction1()">Instructor
 <br><br>
 <table>
<form  action="register1.php"  enctype="multipart/form-data" onsubmit="return validation();" name="s" method=post>
<tr><td>Name</td><td><input type=text name="sname"></td></tr>
<tr><td>ID</td><td><input type=text name="sid"></td></tr>
<tr><td>Department</td><td><select name=dept>
<option>Accounting</option>
<option>Chemistry</option>
<option>Computer Science</option>
<option>Mathematics</option>
<option>Public Health</option>
<option>Statistics</option>
</select></td></tr>
<tr><td>Email</td><td> <input type=text name="email"></td></tr>
<tr><td>Date Of Birth</td><td><input type=date name="dob"></td></tr>
<tr><td>Full Name </td><td><input type=text name="uname"></td></tr>
<tr><td>Password </td><td><input type=password name="pass"></td></tr>
<tr><td>Confirm Password </td><td><input type=password name="pass2"></td></tr>
<tr><td>Select Picture</td><td><input type=file name=pic id=pic></td></tr>
<tr><td></td><td><input type=submit value="Register"></td></tr></table>
</form>
</body>
</html>
</div>