<?php
        $uname = "admin";
        $pwd = "123";

        if(!isset($_SESSION['cnt']))
        $_SESSION['cnt']=0;

        $username = '$_GET[username]';
        $password = '$_GET[password]';

        session_start();
        if ($_GET['uname']=="admin" && $_GET['pwd']=="123") 
        {
            echo "Welcome";
            $_SESSION['cnt']=0;
        }
        else
        {
            $_SESSION['cnt']=$_SESSION['cnt']+1;
            if($_SESSION['cnt']>=3)
            {
                    echo"Error! you used all chance";
                    $_SESSION['cnt']=0;
            }
            else
            {
                    echo"<br>login failed ".$_SESSION['cnt']." attempts made";
            }
        }
?>