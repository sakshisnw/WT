<?php

$st=$_GET['st'];
$si=$_GET['si'];
$col=$_GET['col'];
$bgc=$_GET['bgc'];

echo"<br>Font style:$st";
echo"<br>Font size:$si";
echo"<br>Font color:$col";
echo"<br>Background color:$bgc";

setcookie("st",$st);
setcookie("si",$si);
setcookie("col",$col);
setcookie("bgc",$bgc);
?>
<br><a href="a22.php">show</a>