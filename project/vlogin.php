<?php

$email=$_POST['email'];
$password=$_POST['password'];

include_once 'connect.php';

session_start();

$_SESSION['login']=false;

$cmd="select * from vendor where email='$email' and pass='$password'";

$result=mysqli_query($conn,$cmd);

$count=mysqli_num_rows($result);
if($count==0)
{
    echo "<h2>Invalid credentails</h2>";
}
else
{
    $row=mysqli_fetch_assoc($result);

    $_SESSION['login']=true;
    $_SESSION['vendor_id']=$row['id'];
    $_SESSION['vendor_email']=$row['email'];

    echo "<h1>Login Success </h1>";
    //Redirect to Home Page
    header('location:upload.php');
}   



?>