<?php include 'mainhead.php';?>
<div style="position:absolute; top:200px; left:400px">
<font style="font-family:times; font-size:14pt;">
<?php
session_start();
?>
<?php
$sql ="select * from meterial";
$result = $con->query($sql);?>
<table border=1><tr><th>Course</th><th>Material</th><th>Read</th></tr>
   <?php while($row = $result->fetch_assoc()) {
       $sub=$row["sub"];
	   $met=$row["met"];?>
	   <tr><td><?php echo "$sub";?></td><td><?php echo "$met";?></td><td><a href='Meterials/<?php echo "$met";?>'>View</a?</td></tr>
	<?php }?></table>
