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
	<title>About - Helicopter Transportation Website Template</title>
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
						<li class="selected">
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
			<div id="about">
				<h2>ĐEM SỰ HÀI LÒNG TRÊN TỪNG CHUYẾN ĐI TỚI QUÝ KHÁCH</h2>
				<p>
				Green travel là đại lý chính thức và duy nhất của Công ty Trực thăng Miền Nam khai thác máy bay trực thăng tuyến vòng quanh nước ta
 
 Hai loại máy bay trực thăng được đưa vào khai thác là MI-17-1V và MI-172 đều do Nga sản xuất với trọng tải cất cánh tối đa 13 tấn, sức chứa 25 người, trong đó có 3 thành viên tổ bay và 22 hành khách.
				</p>
				<div class="highlight">
					<div class="section">
						<h5>BẢN ĐỒ DU LỊCH VIỆT NAM</h5>
						<img src="images/bando-dulich1.jpg" alt="" width="270px" height="500px">
					</div>
				</div>
				<div id="main">
				<iframe height="300" width="600" src="https://www.youtube.com/embed/yR6tVxgDWLk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
					<h4>đội ngũ nhân viên của chúng tôi</h4>
					<p>
					Với đội máy bay trực thăng hiện đại gồm 28 chiếc có khả năng chuyên chở từ  4 đến 24 hành khách, hệ thống sân bay rộng khắp cả nước, 50 đường bay du lịch được cấp phép đến tất cả các điểm du lịch hấp dẫn (Hạ Long, Cát Bi, Cát Bà, Móng Cái, Lào Cai, Sapa, Điện Biên Phủ, Hoà Bình,Thanh Hóa, Vinh, Qủang Bình,Huế, Đà Nẵng, Nha Trang, Vũng Tàu, Côn Đảo, Cần Thơ, Cà Mau, Phú Quốc…), VNH sẵn sàng cung cấp cho khách hàng những trải nghiệm thú vị khi được ngắm nhìn phong cảnh từ trên không.
					</p>
				</div>
				<div class="footer">
					<h6>We Have Free Templates for Everyone</h6>
					<p>
						Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What's more, they're absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="http://www.freewebsitetemplates.com/about/terms/">Terms of Use</a>. You can even remove all our links if you want to.
					</p>
					<h6>We Have More Templates for You</h6>
					<p>
						Looking for more templates? Just browse through all our <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> and find what you're looking for. But if you don't find any website template you can use, you can try our <a href="http://www.freewebsitetemplates.com/freewebdesign/">Free Web Design</a> service and tell us all about it. Maybe you're looking for something different, something special. And we love the challenge of doing something different and something special.
					</p>
				</div>
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
	</div>
	<?php } ?>
</body>
</html>