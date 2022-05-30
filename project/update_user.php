<?php
    ob_start();
   include('control.php');
   $get_data=new data();
   $select=$get_data->select_info($_GET['update']);
   $quyen=1;
   foreach($select as $se){
?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Helicopter Transportation Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
	.con{
	display:flex;
}
.con .slogan{
	font-size:28px;
	margin-top:100px;
	margin-left:-30px;
	color:#fff;
}
</style>
<body>
	<div id="page">
		<div id="header">
			<div class="background">
			<div class="con">
				   <div class="lo-go">
					   <!-- <h1 id="logo"> <a href="index.php">Rent a Helicopter</a> </h1> -->
					   <img src="images/logo2.png" alt="">
				   </div>
				   <div class="slogan">GREEN TRAVEL</div>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="services.php">Services</a>
						</li>
						<li>
							<a href="rates.php">Rates</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="blog.php">Blog</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li >
							<a href="login.php">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="contents">
			<div id="contact">
            <p class="cs">Register Here </p>
				<div class="highlight-1">
					<form action="" method="post" enctype="multipart/form-data">
                        <div class="form-content a">
                            <label for="username">User name</label> <br>
                            <input type="text" name="txtuser" id="username" placeholder="Enter your user name" onkeyup="validateUser()" value="<?php echo $se['user']?>">
                            <span class="error-user"></span>
                        </div>
                        <div class="form-content">
                            <label for="birthday">Birthday</label> <br>
                            <div>
                                <input type="date" name="txtdate" id="birthday" value="<?php echo $se['date']?>">
                                <span class="error-date"></span>
                            </div>
                        </div>
                        <div class="form-radio">
                           <input type="radio" name="txtgender" value="Nam" <?php if($se['gender']=='Nam') echo 'checked'; ?>> Nam <input type="radio" name="txtgender"  value="Nữ" <?php if($se['gender']=='Nữ') echo 'checked'; ?>> Nữ <input type="radio" name="txtgender"  value="Khác" <?php if($se['gender']=='khác') echo 'checked'; ?>> Khác <br>
                           <span></span>
                        </div>
                        <div class="form-area">
                            <label for="address">Address</label> <br>
                            <div>
                                <textarea name="txtaddress"  cols="46" rows="5"><?php echo $se['address']?></textarea>
                            </div>
                        </div>
                        <div class="form-file">
                            <label for="file">File</label> <br>
                            <div>
                                <div>
                                <input type="file" name="txtfile"><img src="img/<?php echo $se['file']?>" alt="" width="400px" height="200px">
                                </div>
                                
                                <span></span>
                            </div>
                        </div>
                        <div class="form-content">
                            <div>
                                <input type="submit" name="sbm" id="" value='Send'>
                                <span></span>
                            </div>
                        </div>

                    </form>
                    <?php } ?>
				</div>
             <?php
            if(isset($_POST['sbm'])){
       
            if(empty($_FILES['txtfile']['name'])){
                $_FILES['txtfile']['name'] = $se['file'];
            }
            
                move_uploaded_file($_FILES['txtfile']['tmp_name'],"img/". $_FILES['txtfile']['name']); // chỉ thư mục bộ nhớ tạm thời
            $update=$get_data->update_info($_POST['txtuser'],$_POST['txtdate'],$_POST['txtgender'],$_POST['txtaddress'],$_FILES['txtfile']['name']
            ,$_GET['update']);
            
            if($update){
				
                header("location:user.php");
            }
            else
            echo"<script>alert('update không thành công')</script>";
            
            
    
       
    }
    ?>
				<div class="footer">
					<h6>We Have Free Templates for Everyone</h6>
					<p>
						You can replace all this text with your own text.You can remove any link to our website from this website template, you're free to use this website template without linking back to us. You can replace all this text with your own text.You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
					</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="background">
				<div class="body">
					<form action="index.php" method="post" id="message" class="section">
						<h3>Send a Message</h3>
						<ul>
							<li>
								<label>Your Name:</label>
								<input type="text" value="">
							</li>
							<li>
								<label>Email Address:</label>
								<input type="text" value="">
							</li>
							<li>
								<label>Message:</label>
								<textarea></textarea>
							</li>
							<li>
								<input type="submit" value="Send">
							</li>
						</ul>
					</form>
					<div class="section">
						<h3>Contact Details</h3>
						<ul>
							<li>
								<span>Location</span><strong>:</strong>
								<p>
									This is just a place holder, so you can see what the site would look like
								</p>
							</li>
							<li>
								<span>Phone</span><strong>:</strong>
								<p>
									(987) 654 321 000; (123) 000 456 789; 123 000 456 789
								</p>
							</li>
							<li>
								<span>Email</span><strong>:</strong>
								<p>
									This is just a place holder
								</p>
							</li>
							<li>
								<span>Social</span><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
							</li>
						</ul>
					</div>
					<p id="footnote">
						© Copyright 2023. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>