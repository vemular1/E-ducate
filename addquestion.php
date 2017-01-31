<?php include "ihead.php" ?>
<div style="position:absolute; top:250px; left:470px">
<font style="font-family:times; font-size:14pt;">

<script>
function validation()
{
var a=document.s.question.value;
if(a=="")
{
alert("Enter Question");
document.s.question.focus();
return false;
}
var b=document.s.opt1.value;
if(b=="")
{
alert("Enter Option One");
document.s.opt1.focus();
return false;
}
var c=document.s.opt2.value;
if(c=="")
{
alert("Enter Option Two");
document.s.opt2.focus();
return false;
}
var d=document.s.opt3.value;
if(d=="")
{
alert("Enter Option Three");
document.s.opt3.focus();
return false;
}
var e=document.s.opt4.value;
if(e=="")
{
alert("Enter Option Four");
document.s.opt4.focus();
return false;
}
var f=document.s.ans.value;
if(f=="")
{
alert("Enter Answer");
document.s.ans.focus();
return false;
}
var g=document.s.opt1.value;
var h=document.s.opt2.value;
var i=document.s.opt3.value;
var j=document.s.opt4.value;
var k=document.s.ans.value;
if(!(g==k || h==k || i==k || j==k))
{
	alert("Please Enter Valid Answer");
	document.s.ans.focus();
	return false;
}
}
</script>

<?php 
$qid=$_GET["qid"];
$que=$_GET["que"];
$qnum=$_GET["qnum"];
if($que<$qnum)
{
	$msg="imsg.php?msg=Questions Added Successfully";
     header('Location:'.$msg);
}else
{
?>

<form name="s" action="addquestion2.php" method="post" onsubmit="return validation();" enctype="multipart/form-data">
<table><tr><td>  </td><td>  </td></tr>
<input type=hidden name=qid value="<?php echo "$qid";?>">
<input type=hidden name=que value="<?php echo "$que";?>">
<tr><td>Question Number</td><td><input type=text name=qnum value="<?php echo "$qnum";?>" readonly size=6></td></tr>
<tr><td>Question </td><td><input type=text name=question size=40></td></tr>

<tr><td>Option A</td><td><input type=text name=opt1></td></tr>
<tr><td>Option B</td><td><input type=text name=opt2></td></tr>
<tr><td>Option C</td><td><input type=text name=opt3></td></tr>
<tr><td>Option D</td><td><input type=text name=opt4></td></tr>
<tr><td>Answer</td><td><input type=text name=ans></td></tr>
<tr><td>Image </td><td><input type=file name="pic" id="pic"></td></tr>
<tr><td></td><td><input type=submit <?php if(($que)==$qnum){?>value="Finish" <?php }else{ ?> value="Next" <?php } ?>></td></tr></table>

</form>
<a href="instructorhome.php"><input type=button value="Add Later"></a>
<?php } ?>