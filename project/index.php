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
							<p class="container">???? N???ng</p>
						</a>
					</li>
					<li  class="polaroid">
						<a href="">
							<img src="images/place-2.png" alt="" width="250px" height="150px">
							<p class="container">V???nh H??? Long - Qu???ng Ninh</p>
						</a>
					</li>
					<li  class="polaroid">
						<a href="">
							<img src="images/place-3.png" alt="" width="250px" height="150px">
							<p class="container">Hang S??n ??oong - Qu???ng B??nh</p>
						</a>
					</li>
					<li  class="polaroid">
						<a href="">
							<img src="images/dd1.jpg" alt="" width="250px" height="150px">
							<p class="container">Hang S??n ??oong - Qu???ng B??nh</p>
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
						<h3>C??C CHUY???N DU L???CH ???????C Y??U TH??CH NH???T</h3>
					</div>
					<div class="place">
						<ul>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd1.jpg" alt="" width="270px" height="190px">
									<p class="container">Cung ????nh Nguy???n- Hu???  </p>
								</a>
							</li>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd2.jpg" alt="" width="270px" height="190px">
									<p class="container">Ru???ng b???c thang - Lai Ch??u </p>
								</a>
							</li>
						</ul>
					</div>
					<div class="place">
						<ul>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd3.jpg" alt="" width="270px" height="190px">
									<p class="container">Th??c Y A LY - Cao B???ng </p>
								</a>
							</li>
							<li  class="famous-place">
								<a href="">
									<img src="images/dd4.jpg" alt="" width="270px" height="190px">
									<p class="container">V???nh H??? Long - Qu???ng Ninh </p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			 <div class="main-intro">
				<div class="tt-1">
					<h3>T???I SAO QU?? KH??CH N??N CH???N CH??NG T??I</h3>
				</div>
				<div class="all-intro">
					<div class="intro-item">
						<img src="images/im1.png" alt=""> <br>
						<span>GI?? T???T NH???T</span>
						<p>Kh??ng t??ng th??m chi ph??, gi?? t???t tr??n th??? tr?????ng</p>
					</div>
					<div class="intro-item">
						<img src="images/im2.jpg" alt=""> <br>
						<span>AN TO??N H??N</span>
						<p>An to??n l?? ??u ti??n h??ng ?????u c???a ch??ng t??i</p>
					</div>
					<div class="intro-item">
						<img src="images/im3.jpg" alt=""> <br>
						<span>TIN T?????NG H??N</span>
						<p>Nh???n ???????c s??? t?? v???n c???i m??? v?? trung th???c</p>
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
								<span>?????a Ch???</span><strong>:</strong>
								<p>
								 171 Trung K??nh,ph??? Y??n H??a,qu???n C???u Gi???y, th??nh ph??? H?? N???i <br> S??? 4 Ng?? Ch??a H??ng K??, ph??? Minh Khai Qu???n Hai B?? Tr??ng,Th??nh ph??? H?? N???i

								</p>
							</li>
							<li>
								<span>??i???n tho???i</span><strong>:</strong>
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
						?? Copyright 2023. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div><?php } ?>
</body>
</html>