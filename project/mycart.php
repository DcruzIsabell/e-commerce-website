<html>
<head>
<style>
    img
    {
        width:100px;
        height: 150px;
    }
    a
    {
        text-decoration:none;!important;
    }
</style>
</head>
</htnml>

<?php 

include "vendor_val.php";
include "connect.php";

include "cmenu.html";

$customerid=$_SESSION['vendor_id'];

$cmd="select * from product join cart where cart.pid=product.pid and cusid=$customerid";
$result=mysqli_query($conn,$cmd);

while($row=mysqli_fetch_assoc($result))
{

    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $img=$row['img'];
    $cartid=$row['cartid'];

    
    echo "<br><center><table border='2px' cellpadding='15px' cellspacing='10px' width='60%' style='border-style: dashed; border-color:brown;'>
                <tr><td><img src='$img'></td><td width='500px'><b>$name</b><br><br>$details</td><td><b>$price/-</b></td>
              <td><a href='dltcart.php?cartid=$cartid' class='btnco'>DELETE</a></td></tr>
              <tr><td></td></tr>
        </table><center>";
}
?>