<?php
    $db_server="sql308.infinityfree.com";
    $db_user= "if0_37635476";
    $db_pass= "yA5T6Y7YWgoj1Lw";
    $db_name="if0_37635476_esports_db";
    $conn="";

    try{
    $conn=mysqli_connect($db_server,
                        $db_user,
                        $db_pass,
                        $db_name);
    }
    catch(mysqli_sql_exception){
        echo "could not connect<br>";
    }
?>