<?php
    if(isset($_COOKIE['cnt']))
    {
        $x=$_COOKIE['cnt'];
        $x=$x+1;
        setcookie('cnt',$x);
    }
    else
    {
        setcookie('cnt',2);
        echo"page access 1st time";
    }
    echo "page access $x times";
?>