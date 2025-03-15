<?php

$pid=$_GET['pid'];

include_once "connect.php";

$status-=mysqli_query($conn,"delete from product where pid=$pid");

if($status)
{
    echo "Product deleted successfully!";
    header('location:view.php');
}

?>