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
	<title>Helicopter Transportation Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
	.polaroid {
  width: 89.7%;
  height: 190px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

.container {
  text-align: center;
  padding: 10px 20px;
}
.sidebar .h4{
	margin-left: 62px;
	font-size: 20px;
	font-family: 'Times New Roman', Times, serif;
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
#navigation .f .font{
	position: relative;
	top:-22px;
	margin-left:20px;

	

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
						<li class="selected">
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
			<div id="adbox">
				<div>
					<img src="images/helicopter.jpg" alt="Img" height="390" width="632">
					<h1>Rent a Helicopter</h1>
					<!-- <h4>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</h4>
					<p>
						This is just a place holder, so you can see what the site would look like. This is just a place holder, so you can see what the site would look like.
					</p> -->
				</div>
			</div>
			<div class="sidebar">
				<h3 class="h4">HOT PLACES</h3>
				<ul>
					<li  class="polaroid">
						<a href="">
							<img src="images/place-1.png" alt="" width="250px" height="150px">
							<p class="container">Đà Nẵng</p>
						</a>
					</li>
					<li  class="polaroid">
						<a href="">
							<img src="images/place-2.png" alt="" width="250px" height="150px">
							<p class="container">Vịnh Hạ Long - Quảng Ninh</p>
						</a>
					</li>
					<li  class="polaroid">
						<a href="">
							<img src="images/place-3.png" alt="" width="250px" height="150px">
							<p class="container">Hang Sơn Đoong - Quảng Bình</p>
						</a>
					</li>
					<li  class="polaroid">
						<a href="">
							<img src="images/dd1.jpg" alt="" width="250px" height="150px">
							<p class="container">Hang Sơn Đoong - Quảng Bình</p>
						</a>
					</li>
					
				</ul>
			</div>
			<div class="intro">
				
				<div class="main-intro">
					<div class="lg">
						<img src="images/fava.jpg" alt="">
					</div>
					<div class="tt">
						<h3>CÁC CHUYẾN DU LỊCH ĐƯỢC YÊU THÍCH NHẤT</h3>
					</div>
					<div class="place">
						<ul>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd1.jpg" alt="" width="270px" height="190px">
									<p class="container">Cung Đình Nguyễn- Huế  </p>
								</a>
							</li>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd2.jpg" alt="" width="270px" height="190px">
									<p class="container">Ruộng bậc thang - Lai Châu </p>
								</a>
							</li>
						</ul>
					</div>
					<div class="place">
						<ul>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd3.jpg" alt="" width="270px" height="190px">
									<p class="container">Thác Y A LY - Cao Bằng </p>
								</a>
							</li>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd4.jpg" alt="" width="270px" height="190px">
									<p class="container">Vịnh Hạ Long - Quảng Ninh </p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			 <div class="main-intro">
				<div class="tt-1">
					<h3>TẠI SAO QUÝ KHÁCH NÊN CHỌN CHÚNG TÔI</h3>
				</div>
				<div class="all-intro">
					<div class="intro-item">
						<img src="images/im1.png" alt=""> <br>
						<span>GIÁ TỐT NHẤT</span>
						<p>Không tăng thêm chi phí, giá tốt trên thị trường</p>
					</div>
					<div class="intro-item">
						<img src="images/im2.jpg" alt=""> <br>
						<span>AN TOÀN HƠN</span>
						<p>An toàn là ưu tiên hàng đầu của chúng tôi</p>
					</div>
					<div class="intro-item">
						<img src="images/im3.jpg" alt=""> <br>
						<span>TIN TƯỞNG HƠN</span>
						<p>Nhận được sự tư vấn cởi mở và trung thực</p>
					</div>
					
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
								<input type="submit" class="sbm" name="sbm" value="Send">
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