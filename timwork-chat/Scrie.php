<?php
session_start();
$a=$_SESSION['ap'];
$b=$_SESSION['bp'];
echo "<u><b>".$a."</b></u>".": ".$b."<br>";
echo "<form action=Date.php method=post>
<textarea row=5 cols=25 name=text></textarea>"."<br>"."
<input type=submit value=Send></form>"
?>
