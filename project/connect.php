<?php
    $sever='localhost';
    $user='root';
    $password='';
    $database='helicopter';
    $conn=mysqli_connect($sever,$user,$password,$database);
    mysqli_query($conn,'set names"utf8"');
?>