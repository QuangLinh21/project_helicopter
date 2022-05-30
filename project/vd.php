<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
					<form action="" method="post">
                        <div class="form-content a">
                            <label for="name_blog">Name New</label> <br>
                            <input type="text" name="name_blog" id="name_blog">
                            <span class="error-user"></span>
                        </div>
                        <div class="form-content a">
                            <label for="name"> Name of other</label> <br>
                            <input type="text" name="user" id="name">
                            <span class="error-user"></span>
                        </div>
                        <div class="form-content">
                            <label for="birthday">Date new</label> <br>
                            <div>
                                <input type="date" name="txtdate" id="birthday">
                                <span class="error-date"></span>
                            </div>
                        </div>

                        <div class="form-area">
                            <label for="address1">Short new</label> <br>
                            <div>
                                <textarea name="s_blog"  cols="46" rows="5" id="address1"></textarea>
                            </div>
                        </div>
                        <div class="form-area">
                            <label for="address">Long new</label> <br>
                            <div>
                                <textarea name="l_blog"  cols="46" rows="5" id="address"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-content">
                            <div>
                                <input type="submit" name="sbm" id="" value='Send'>
                                <span></span>
                            </div>
                        </div>
                    </form>
                    <?php
                          include('control.php');
                           $get_data=new data();
                        if(isset($_POST['sbm'])){
                            if(empty($_POST['name_blog']) || empty($_POST["s_blog"]))
                            echo"<script>alert('Name cannot be left blank');</script>";
                            else{
                                $insert=$get_data->in_blog($_POST['name_blog'],$_POST['user'],$_POST['txtdate'],$_POST['s_blog'],$_POST['l_blog']);
                                if($insert)echo"<script>alert('Message has been sent');</script>";
                                else echo"<script> alert ('Message has not been sent')</script>";
        
                            }
                        }
                    ?>
</body>
</html>