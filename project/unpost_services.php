<?php
include('control.php');
$get_data=new data();
$post=$get_data->unpost_services($_GET['unpost']);
if($post){
    echo"<script> alert('post thành công')</script>";
}
else
{
	echo"<script> alert('post không thành công')</script>";
}
header('location:services.php');
?>