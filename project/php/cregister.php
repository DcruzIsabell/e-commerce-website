<?php

$email=$_POST['email'];
$pass1=$_POST['pass1'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

include_once "connect.php";

$cmd="insert into customer(email,pass,mob,del_addr) values('$email','$pass1','$mobile','$address')";

echo $cmd;
$status=mysqli_query($conn,$cmd);
if($status)
{
    echo "Registration Sucess";
    //Redirect to Login
    header('location:customer.html');
}
else
{
    echo "Email id already taken, try different username!!!";
    echo mysqli_error($conn);
}




?>