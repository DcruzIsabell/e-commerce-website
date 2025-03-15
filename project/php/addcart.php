<?php

include_once "vendor_val.php";
include_once "connect.php";

$customerid=$_SESSION['vendor_id'];
$pid=$_GET['pid'];

$query="select * from cart where pid=$pid and cusid=$customerid";
$res=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($res);
$count=$row['qty'];
echo "count=$count";

$count=$count+1;
if($count==1)
{
    insert($conn,$pid,$customerid,$count);
}
else if($count>1)
{
    $cartid=$row['cartid'];
    $cmd="update cart set qty=$count where cartid=$cartid";
    $res=mysqli_query($conn,$cmd);
    header("location:cview.php");
}
else
{
    echo"Error in SQL";
}


function insert($conn,$pid,$customerid,$qty)
{

    $cmd="insert into cart(pid,cusid,qty) values ($pid,$customerid,$qty)";

    $status=mysqli_query($conn,$cmd);
    if($status)
    {
       echo"ADDED";
        header("location:cview.php");
    }   
    else
    {
        echo"Error in sql";
    }
}
?>