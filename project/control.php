<?php
include('connect.php');
    class data{
        function in_user($user,$password,$date,$gender,$address,$file,$quyen){
            global $conn;
            $sql="insert into register(user,password,date,gender,address,file,quyen)
            values('$user','$password','$date','$gender','$address','$file',$quyen)";
            $run=mysqli_query($conn, $sql);
            return $run;

        }
        public function login($user,$password){
            global $conn;
            $sql="select * from register where user='$user' and password='$password'";
            $run=mysqli_query($conn,$sql);
            $row=mysqli_num_rows($run);
            return $row;
        }

        public function update_info($user,$date,$gender,$address,$file,$id_user){
            global $conn;
            $sql="update register set user='$user',date='$date', gender='$gender', address='$address', file='$file' where id_user=$id_user";
            $run=mysqli_query($conn,$sql);
            echo $sql;
            return $run;
        }
        public function select_info($id_user){
            global $conn;
            $sql="select * from register where id_user='$id_user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }

        public function get_quyen($user){
            global $conn;
            $sql="select * from register where user='$user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function change_pass($user,$password,$newpassword){
            global $conn;
            $sql="update register set password='$newpassword' where user='$user' and password='$password'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function in_contact($name,$email,$message){
            global $conn;
            $sql="insert into contact(your_name,email,message)
            values('$name','$email','$message')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_contact(){
            global $conn;
            $sql="select * from contact";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_contact($ID_contact){
            global $conn;
            $sql="delete from contact where id_contact='$ID_contact'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }


        public function select_blog($id_blog){
            global $conn;
            $sql="select * from blog where id_blog='$id_blog'";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }
        public function select_blog_user(){
            global $conn;
            $sql="select * from blog";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }
        public function post_blog(){
            global $conn;
            $sql="select * from blog where quyen_blog=1";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function in_blog($name_blog,$user,$date_blog,$s_blog,$l_blog){
            global $conn;
            $sql="insert into blog(name_blog,user,date_blog,s_blog,l_blog)
            values('$name_blog','$user','$date_blog','$s_blog','$l_blog')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_blog($id_blog){
            global $conn;
            $sql="delete from blog where id_blog='$id_blog'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        // --------------admin---------------------
        public function select_user(){
            global $conn;
             $sql="select * from register ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_username($user)  //lấy user thwo điều kiện
        {
            global $conn;
            $sql="select * from register where user='$user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_user($id_user){
            global $conn;
            $sql="delete from register where id_user='$id_user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function get_blog($user){
            global $conn;
            $sql="select * from blog where user='$user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        // -------------blog-----------------------
        public function post($id_blog){
            global $conn;
            $sql="update blog set quyen_blog='1' where id_blog='$id_blog'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function unpost($id_blog){
            global $conn;
            $sql="update blog set quyen_blog='0' where id_blog='$id_blog'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        // -----------services-------------
        public function in_services($name_services,$file,$s_services,$l_services,$quyen){
            global $conn;
            $sql="insert into services(name_services,file,s_services,l_services,quyen_services)
            values('$name_services','$file','$s_services','$l_services',$quyen)";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_services(){
            global $conn;
            $sql="select * from services where quyen_services=1";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function se_services(){
            global $conn;
            $sql="select * from services ";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function get_services($id_services){
            global $conn;
            $sql="select * from services where id_services='$id_services'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_services($id_services){
            global $conn;
            $sql="delete  from services where id_services='$id_services'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function update_services($name_services,$file,$s_services,$l_services,$id_services){
            global $conn;
            $sql="update services set name_services='$name_services',file='$file', s_services='$s_services', l_services='$l_services'
            where id_services='$id_services'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        
        public function post_services($id_services){
            global $conn;
            $sql="update services set quyen_services='1' where id_services='$id_services'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function unpost_services($id_services){
            global $conn;
            $sql="update services set quyen_services='0' where id_services='$id_services'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        
        public function in_customer($id_services,$name_customer,$gender,$phone,$address,$quantity){
            global $conn;
            $sql="insert into customer(id_services,name_customer,gender,phone,address,quantity)
            values('$id_services','$name_customer','$gender','$phone','$address','$quantity')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_customer($id_services){
            global $conn;
            $sql="select * from customer where id_services='$id_services'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function delete_customer($id_customer){
            global $conn;
            $sql="delete from customer where id_customer='$id_customer'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function forgotpass($user){
            global $conn;
            $sql="select*from register where user='$user'";
            $run=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($run);
            return $count;
        }
        

    }
?>