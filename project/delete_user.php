<?php
   include('control.php');
   $get_data= new data();
   $delete=$get_data->delete_user($_GET['delete']);// lấy giá trị truyền từ trang admin
   if ($delete){
       header("location:admin.php");
   }
   else
   echo"<script> alert('Can not delete');</script>";
?>