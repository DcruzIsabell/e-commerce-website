<?php

$cartid=$_GET['cartid'];

include_once "connect.php";

$status-=mysqli_query($conn,"delete from cart where cartid=$cartid");

if($status)
{
    echo "Product deleted successfully!";
    header('location:mycart.php');
}

?>