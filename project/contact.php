<?php
SESSION_start();
include("control.php");
$get_data=new data();
if (empty($_SESSION['user'])) header('location:login.php');
else{
	//echo"hello".$_SESSION["user"];
$select_username =$get_data -> select_username($_SESSION["user"]);
foreach($select_username as $select){
	$user_login = $select["user"];
	$file=$select["file"];
}
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
#navigation .f .font{
	position: relative;
	top:-22px;
	margin-left:20px;
	margin-right:20px;
}
#navigation .f img{
	border-radius: 50%;
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
						<li class="selected">
							<a href="contact.php">Contact</a>
						</li>
						<li class="f">
							<font color="#fff" class="font"><?php echo $user_login; ?></font>
							<img class="img" src="img/<?php echo $file; ?> "width='40px'></img>
					
						</li>
						<li>
							<a href="login.php">logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="contents">
			<div id="contact">
				<h2>LUÔN HẾT LÒNG PHỤC VỤ QUÝ KHÁCH</h2>
				<p>
				Ngắm nhìn đất trời từ máy bay trực thăng, đó là một trong những trải nghiệm thú vị, bạn sẽ không bao giờ quên
				</p>
				<div class="highlight">
					<h5>Để sử dụng dịch vụ của chúng tôi quý khách vui lòng liên hệ </h5>
					<p>
					  Tham quan các kỳ quan chụp ảnh ngoại cảnh với trực thăng và các dịch vụ các liên quan đến cho thuê trực thăng, quý khách vui lòng liên hệ
					</p>
					<ul>
						<li>
							<h5>Địa chỉ Cơ sở 1</h5>
							<p>
							171 Trung Kính,phố Yên Hòa,quận Cầu Giấy, <br> thành phố Hà Nội
							</p>
							<h5> điện thoại</h5>
							<p>
								(222) 987 65 43 2100<br>(687) 123 45 67 8900
							</p>
							<h5>EMail</h5>
							<p>
								PDU@email.vn
							</p>
						</li>
						<li>
							<h5>Địa chỉ Cơ sở 1</h5>
							<p>
							Số 4 Ngõ Chùa Hưng Ký, phố Minh Khai Quận Hai Bà Trưng,Thành phố Hà Nội
							</p>
							<h5>Điện thoại</h5>
							<p>
								(222) 987 65 43 2100<br>(687) 123 45 67 8900
							</p>
							<h5>EMail</h5>
							<p>
							PDU@email.vn
							</p>
						</li>
					</ul>
				</div>
				<div id="main">
					<img src="images/nhanvien.jpg" alt="Img" height="240" width="421">
					<h5>Phục vụ quý khách là niềm vinh hạnh của chúng tôi</h5>
					<p>
					Phục vụ trên các chuyến bay là đội ngũ phi công nước ngoài, sẵn sàng 24/7 cho các yêu cầu di chuyển của hành khách. Đội ngũ tiếp viên đào tạo theo chương trình chuyên biệt cho khoang thương gia. Trong chuyến bay, khách hàng có thể đặt trước bữa ăn với thực đơn từ bếp của các khách sạn 5 sao, bố trí bàn ký kết hợp đồng kinh doanh, hoặc thư giãn, giải trí qua hệ thống màn hình TV. Ngoài ra, trên máy bay còn có cả Wi-Fi tốc độ cao, đáp ứng mọi nhu cầu giải trí của khách hàng.
					</p>
				</div>
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
								<input type="text" name="yourname" value="">
							</li>
							<li>
								<label>Email Address:</label>
								<input type="email" name="eamil" value="">
							</li>
							<li>
								<label>Message:</label>
								<textarea name="message"></textarea>
							</li>
							<li>
								<input type="submit" name="sbm1" value="Send">
							</li>
						</ul>
					</form>
					<?php
					if (isset($_POST['sbm1']))
					{
						if(empty($_POST['name'])||empty($_POST["email"]) || empty($_POST["message"]))
						echo"<script>alert('email and message cannot be left blank');</script>";
						else{
							$insert=$get_data->in_contact($_POST['name'],$_POST['email'],$_POST['message']);
					   	 if($insert)echo"<script>alert('Message has been sent');</script>";
					   	 else echo"<script> alert ('Message has not been sent')</script>";

						}
					}
				?>
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
	<?php } ?>
</body>
</html>