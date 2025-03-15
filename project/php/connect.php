<?php

    $conn=new mysqli('localhost','bella','mysqlroot','PROJECT');
    if($conn->connect_error)
    {
        echo "Connection failed";
        die;
    }
    
?>