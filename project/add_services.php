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
					<ul style="display: flex;justify-content: space-around;">
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
							<a href="login.php">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="contents">
			<div id="contact">
            <p class="cs">ADD SERVICES </p>
				<div class="highlight-1">
					<form action="" method="post" enctype="multipart/form-data">
                        <div class="form-content a">
                            <label for="username">Name Services</label> <br>
                            <input type="text" name="name" id="username" placeholder="Enter your user name" onkeyup="validateUser()">
                            <span class="error-user"></span>
                        </div>
                        <div class="form-content">
                            <label for="file">File</label> <br>
                            <input type="file" name="txtfile" id="file" >
                        </div>
                        <div class="form-area">
                            <label for="address">Short Services</label> <br>
                            <div>
                                <textarea name="s_services"  cols="46" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-area">
                            <label for="address">Long Services</label> <br>
                            <div>
                                <textarea name="l_services"  cols="46" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-content">
                            <div>
                                <input type="submit" name="sbm" id="" value='Send'>
                                <span></span>
                            </div>
                        </div>

                    </form>
				</div>
				<?php
    if(isset($_POST['sbm'])){
        include('control.php');
        $get_date=new data();
        $quyen=2;
        if(empty($_POST['name']) || empty($_POST['s_services']))
        echo"<script>alert('User name , password và repassword không được để trống');</script>";
        else{
            // $hobbie="";
            // foreach($_POST['txthobbie'] as $key) // cú pháp duyệt mảng
            // {
            //     $hobbie.=$key."".",".""; // 
            // }
            move_uploaded_file($_FILES['txtfile']['tmp_name'],"img/". $_FILES['txtfile']['name']); // chỉ thư mục bộ nhớ tạm thời
            $insert=$get_date->in_services($_POST['name'],$_FILES['txtfile']['name'],$_POST['s_services'],$_POST['l_services'],$quyen);
            if($insert){
                header('location:admin.php');
                echo"<script>alert('Đăng ký thành công')</script>";
            }
            else
            echo"<script>alert('Đăng ký không thành công')</script>";
    

        }
       
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
								<span>Địa Chỉ</span><strong>:</strong>
								<p>
								 171 Trung Kính,phố Yên Hòa,quận Cầu Giấy, thành phố Hà Nội <br> Số 4 Ngõ Chùa Hưng Ký, phố Minh Khai Quận Hai Bà Trưng,Thành phố Hà Nội

								</p>
							</li>
							<li>
								<span>Điện thoại</span><strong>:</strong>
								<p>
									(987) 654 321 000; (123) 000 456 789; 123 000 456 789
								</p>
							</li>
							<li>
								<span>Email</span><strong>:</strong>
								<p>
								PDU@email.vn
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