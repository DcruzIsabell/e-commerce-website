<?php

include_once "vendor_val.php";
include_once "connect.php";

$source_path=$_FILES['imfile']['tmp_name'];

date_default_timezone_set('Asia/Kolkata');
$unique_name="..//project/images/".date("d_M_Y_H_i_s").'.jpg';

move_uploaded_file($source_path,$unique_name);

$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];

$vendor_id=$_SESSION['vendor_id'];

if(!$conn)
{
    echo "unavilable";
}

$cmd="insert into product(name,details,price,img,uploaded_by) values('$name','$details',$price,'$unique_name',$vendor_id);";

$status=mysqli_query($conn,$cmd);

if($status)
{
    echo "Product Uploaded Successfully!";
    header('location:view.php');
}
else
{
    echo "Error in SQL Query";
}

?>