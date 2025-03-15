<html>
    <head>
        <style>
            .mycard
            {
                width:300px;
                height:fit-content;
                display:inline-block;
                border:2px solid grey;
                margin:10px;
                padding:5px;
            }
            .mycard img
            {
                width:150px;
                height:200px;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>


<?php
include "vendor_val.php";
include "connect.php";

include "cmenu.html";

$customerid=$_SESSION['vendor_id'];

$cmd="select * from product";
$result=mysqli_query($conn,$cmd);

while($row=mysqli_fetch_assoc($result))
{

    $pid=$row['pid'];
    $name=$row['name'];
    $detail=$row['detail'];
    $price=$row['price'];
    $impath=$row['img'];
    
    echo "<div class='mycard'>
        <center>
        <h3>$name</h3>
        <h2>$price</h2>
        <img src='$impath'>
        <p>$detail</p> 
        <div class='d-flex justify-content-between'>
        <a href='addcart.php?pid=$pid'>
            <button class='btn btn-warning'>Add to Cart</button>
        </a>   
           
        </div>
        <center>
    </div>";

  
}

?>