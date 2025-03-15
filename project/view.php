<html>
    <head>
        <style>
            .mycard
            {
                width:300px;
                height:400px;
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
            .hide
            {
                display:none;
            }
        </style>
    </head>
    <body>

    <script>
        function confirmdelete(pid)
        {
            butObj=document.getElementById(pid);
            butObj.style.display='block';
        }
        function deletePDT(pid)
        {
            location.href='deletepdt.php?pid='+pid;
        }
    </script>
        
    </body>
</html>


<?php
include_once "vendor_val.php";
include_once "connect.php";

include "menu.html";

$vendor_id=$_SESSION['vendor_id'];

$cmd="select * from product where uploaded_by=$vendor_id";
$result=mysqli_query($conn,$cmd);

while($row=mysqli_fetch_assoc($result))
{

    $pid=$row['pid'];
    $name=$row['name'];
    $details=$row['details'];
    $price=$row['price'];
    $img=$row['img'];

    
    echo "<div class='mycard'>
        <center>
        <h4 >$name</h4>
        <img src='$img'>
        <h4>$price/-</h4>
        <p>$details</p> 
        <div class='d-flex justify-content-between'>
            <div>
                <button onclick='confirmdelete($pid)' class='btnco'>DELETE</button>
                <br><br>
                <button id=$pid class='hide btn2' onclick='deletePDT($pid)'>CONFIRM</button>
            </div>           
        </div>
        </center>
    </div>";
}



?>