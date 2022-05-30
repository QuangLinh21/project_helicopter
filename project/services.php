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
	<title>Services - Helicopter Transportation Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
	.more-1{
		text-decoration: none;
		color: black;
	}
	.more-1:hover{
		text-decoration:underline;
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
#navigation .f img{
	border-radius: 50%;
}
form .list li{
	display: flex;
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
						<li class="selected">
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
			<div id="services">
				<h2>Dịch vụ sử dụng trực thăng</h2>
				
				<div id="sidebar">
					<div class="section">
						<img src="images/wel.jpg" alt="" width="270px" height="230px">
					</div>
					<div class="section">
						<h5>Tư vấn dịch vụ </h5>
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
				<form action="" method="post" enctype="multipart/form-data">
				<ul class="list">
						<?php
							$get_gata=new data();
							$select_services=$get_gata->select_services();
							foreach($select_services as $se){

						?>
						<li>
							<a href="fullservices.php?content=<?php echo $se['id_services']; ?>" class="more-1">
							<h5><?php echo $se['name_services'];?></h5>
						    <img src="img/<?php echo $se['file']?>" name="txtfile" alt="Img" height="180" width="290">
							<p>
								<?php echo $se['s_services'];?>
							</p>
							</a>
							
						</li>
						<?php } ?>
					<!-- <li>
						<h5>This is just a place holder</h5>
						<img src="images/wedding.jpg" alt="Img" height="180" width="290">
						<p>
							Quisque vitae mauris non diam tincidunt elementum. Praesent sed ipsum vel nisl viverra porttitor pretium vel ante. Nullam quis ultrices orci. Aliquam erat volutpat. Maecenas nec risus at nulla accumsan varius. Aliquam eget malesuada tortor. Aenean ligula elit, volutpat nec elementum dignissim conse.  sollicitudin purus, eu rutrum mi ligula nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae mauris non diam tincidunt elementum. Praesent sed ipsum vel nisl viverra porttitor pretium vel ante.
						</p>
					</li> -->
				</ul>
				</form>
				
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
								<input type="text" value="" name="name">
							</li>
							<li>
								<label>Email Address:</label>
								<input type="text" value="" name="email">
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