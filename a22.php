<?php
$st=$_COOKIE['st'];
$si=$_COOKIE['si'];
$col=$_COOKIE['col'];
$bgc=$_COOKIE['bgc'];

$msg="welcome";

echo "<body bgcolor=$bgc>";
echo "<font color=$col font size=$si face=$st>$msg";
echo "</font></body>"
?>