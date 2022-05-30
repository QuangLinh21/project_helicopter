<?php
    include('control.php');
    $get_data=new data();
    $delete=$get_data->delete_services($_GET['delete']);
    if ($delete){
        header("location:admin.php");
    }
    else
    echo"<script> alert('Can not delete');</script>";
?>