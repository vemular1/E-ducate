<?php include "shead2.php" ?>
<div style="position:absolute; top:30px; right:50px">

<?php 
session_start();
$que=$_SESSION["que"];
?>

<script>
    function startTimer(duration, display) {
		
        var timer = duration, minutes, seconds;
        var end =setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                window.top.location.href = "score.php"; 
				target="_parent";
                clearInterval(end);
            }
        }, 1000);
    }

    window.onload = function () {
		var qid2=document.getElementById("mymin").value;
	       var fiveMinutes =qid2*60,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };
</script>
</head>
<body>
<div><h2>Remaining Time<span id="time">00:00</span></h2></div>
<form id="form1" runat="server">
<input type=hidden name="mymin" id="mymin" value="<?php echo "$que"?>">
</form>