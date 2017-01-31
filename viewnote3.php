<?php include "shead.php" ?>
<div style="position:absolute; top:200px; left:450px">
<font style="font-family:times; font-size:14pt;">
<?php
session_start();
?>
<?php
$sql ="select * from notice";
$result = $con->query($sql);?>

   <?php while($row = $result->fetch_assoc()) {
       $sub=$row["sub"];
	   $note=$row["note"];
	   $datee=$row["datee"];
	   ?>
	   <div id="lastDateBlinker"><br><table border=2><tr><td><center>
	   <h2 >Course : <?php echo "$sub";?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <blink><?php echo "$datee";?></blink></h2>
	   <h3>Notice : <?php echo "$note"; ?></h3></center></td></tr></table></div>
	<?php }?></table>
