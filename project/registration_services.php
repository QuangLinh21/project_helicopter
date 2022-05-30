<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Helicopter Transportation Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
    form input[type=number]{
	width: 350px;
	height: 30px;
	outline: none;
	padding: 5px;
	margin-top: 5px;
	margin-bottom:10px;
	border: none;
	border-bottom: 2px solid #79ADE8;
	
}
form input[type=radio]{
    margin-bottom:15px;
}
.cv{
    width:250px;
	font-family: 'Times New Roman', Times, serif;
	position: absolute;
	background-color: #78C7FF;
	color: #fff;
	padding: 10px;
	border-radius: 5px;
	top: 41%;
	left: 38%;
    
}
#contents .cv {
    color: #636974;
    font-size: 22px;
    padding-left:25px;
    padding-top:10px;
    }
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
            <p class="cv">Registration of Services </p>
				<div class="highlight-1">
					<form action="" method="post">
                        <div class="form-content a">
                            <label for="username">Name Customer</label> <br>
                            <input type="text" name="txtname" id="username" placeholder="Enter your user name" onkeyup="validateUser()">
                            <span class="error-user"></span>
                        </div>
                        <div class="form-radio">
                           <input type="radio" name="txtgender" value="Nam"> Nam <input type="radio" name="txtgender"  value="Nữ"> Nữ <input type="radio" name="txtgender"  value="Khác"> Khác <br>
                           <span></span>
                        </div>
                        <div class="form-content">
                            <label for="username">Phone Number</label> <br>
                            <input type="text" name="txtphone" id="username" placeholder="Enter your phone umber" onkeyup="validateUser()">
                            <span class="error-user"></span>
                        </div>
                        
                        <div class="form-area">
                            <label for="address">Address</label> <br>
                            <div>
                                <textarea name="txtaddress"  cols="46" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-area">
                            <label for="address">Quantity</label> <br>
                            <div>
                            <input type="number" name="txtquantity" id="username" placeholder="The number of gueste" min="1" max="5">
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
        $id_services=$_GET['get'];
        if(empty($_POST['txtname']) || empty($_POST['txtphone']))
        echo"<script>alert('User name , password và repassword không được để trống');</script>";
        else{
            $insert=$get_date->in_customer($_GET['get'],$_POST['txtname'],$_POST['txtgender'],$_POST['txtphone'],$_POST['txtaddress'],$_POST['txtquantity']);
            if($insert){
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