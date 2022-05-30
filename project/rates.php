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
	<title>Rates - Helicopter Transportation Website Template</title>
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
#navigation .f img{
	border-radius: 50%;
}
#navigation .f .font{
	position: relative;
	top:-22px;
	margin-left:20px;

	

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
						<li class="selected">
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
			<div id="rates">
				<p>
					QUY TRÌNH ĐĂNG KÝ DỊCH VỤ <br>
					Trước các chuyến bay Quý khách hàng cung cấp các thông tin: loại máy bay, hành trình bay một chiều hay khứ hồi, ngày cụ thể, số lượng hành khách, khách có nhu cầu đặt đồ ăn không.
				</p>
				<div id="sidebar">
					<div class="section">
						<h5>Tư vấn dịch vụ</h5>
						<p>
						Bạn có thể liên hệ qua các kênh sau để được tư vấn chi tết các dịch vụ của chúng tôi
						</p>
						<h5>Điện thoại</h5>
						<p>
							(222) 987 65 43 2100<br>(687) 123 45 67 8900
						</p>
						<h5>Email</h5>
						<p>
							PDU@gmail.vn
						</p>
					</div>
				</div>
				<ul class="list">
					<li>
						<div>
							<h5>$ 9,876.54</h5>
							<p>
							Loại máy bay: King Air B350 hoặc Legacy
							</p>
						</div>
						<h5>Hạng thương gia</h5>
						<p>
						Số lượng: 8 khách
                          Hành trình: 15/03 TP Hồ Chí Minh – Côn Đảo (một chiều) và 16/3 Côn Đảo – Hồ Chí Minh. Hoặc….
                            Đồ ăn: menu 03 món châu Âu
							Dịch vụ: Nhảy dù lượn
						</p>
					</li>
					<li>
						<div>
							<h5>$ 3,210.00</h5>
							<p>
							Loại máy bay:Air B350 hoặc Legacy
							</p>
						</div>
						<h5>Hạng phổ thông</h5>
						<p>
						Số lượng: 8 khách
                         Hành trình: 15/03 Hà Nội – Đà Nẵng (một chiều) và 16/3 Đà Nẵng – Hồ Chí Minh. Hoặc….
							Đồ ăn: menu 02 món Một món Châu Á một món Aâu
						</p>
					</li>
					<li>
						<div>
							<h5>$ 5,876.54</h5>
							<p>
							Loại máy bay:Air B350 hoặc Legacy
							</p>
						</div>
						<h5>Chuyến đi gia đình</h5>
						<p>
						Số lượng: 5 khách
                         Hành trình: 15/03 Hà Nội – Đà Nẵng (một chiều) và 16/3 Đà Nẵng – Hồ Chí Minh. Hoặc….
							Đồ ăn: menu 03 Châu Á Hoặc Châu Âu tùy chọn
							Dịch vụ: Spa
						</p>
					</li>
					
				</ul>
			</div>
		</div>
		<div id="footer">
			<div class="background">
				<div class="body">
				<form action="" method="post" id="message" class="section">
						<h3>Send a Message</h3>
						<ul>
							<li>
								<label>Your Name:</label>
								<input type="text" name="name" value="">
							</li>
							<li>
								<label>Email Address:</label>
								<input type="text" name="email" value="">
							</li>
							<li>
								<label>Message:</label>
								<textarea name="message"></textarea>
							</li>
							<li>
								<input type="submit" name="sbm" value="Send">
							</li>
						</ul>
					</form>
					<?php
				if (isset($_POST['sbm']))
				{
					if(empty($_POST['email']) || empty($_POST["name"]))
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
	</div><?php } ?>
</body>
</html>