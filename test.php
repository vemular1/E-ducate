<?php
$ip= "localhost";
$uname = "root";
$pass = "root";
$db = "study2";


$con = new mysqli($ip, $uname, $pass, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$result =$con->query("select count(qnum) max from questions");      
        if (!$result) die($conn->error);
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) 
        {
            echo $row['max'];
        } 

		
		$a="hai";$b="hai";
		
		
goto a;
echo 'Foo';
 
a:
echo 'Bar';
?>
