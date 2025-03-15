<?php

include_once "vendor_val.php";

include_once "menu.html";
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="pro.css">

</head>
<body> 
    <br> 
    <div class=" d-flex justify-content-center align-items-center">
        
        <form action="upload_bkend.php" method='POST'enctype="multipart/form-data" >
        <a href="index.html" style="font-size:30px;">&laquo;</a>
        <center style="font-size: 30px;"><b>UPLOAD NEW PRODUCT</b></center>
           
            <input name="name" class="form-control mt-2" type="text" placeholder="Product name">
            <input name="price" class="form-control mt-2" type="text" placeholder="Product price">
            <textarea name="details" class="form-control mt-2" cols="30" rows="4" placeholder="Product Description"></textarea>        
            <input name="imfile" class="form-control mt-2" type="file" accept=".jpg">
            <br>
            <center><input type="submit" value="UPLOAD" class='btnco'></center>

            <div class="line"></div>
            <center><a class="ab" href="view.php">VIEW MY PRODUCTS</a></center>
        </form>

    </div>

</body>
</html>