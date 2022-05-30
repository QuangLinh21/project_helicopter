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
	.more{
		text-decoration: none;
		color: #fff;
        background: #79ADE8;
	}
    .more:hover{
        color: black;
        text-decoration: underline;
    }
    .sv{
        display: flex;
        justify-content: space-between;
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
.list li{
	margin-top:50px;
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
				<h2>This is just a place holder</h2>
				<p>
					This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.
				</p>
				<div id="sidebar">
					<div class="section">
						<h5>This is just a place holder</h5>
						<ul>
							<li>
								<a href="services.php">Quisque vitae mauris non diam tincidunt elementum. Praesent sed ipsum vel nisl viverra</a>
							</li>
							<li>
								<a href="services.php">Aenean ligula elit, volutpat nec elementum dignissim conse.</a>
							</li>
							<li>
								<a href="services.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae mauris non diam tincidunt</a>
							</li>
						</ul>
					</div>
					<div class="section">
						<h5>for inquiries:</h5>
						<p>
							You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
						</p>
						<h5>CALL</h5>
						<p>
							(222) 987 65 43 2100<br>(687) 123 45 67 8900
						</p>
						<h5>Email</h5>
						<p>
							email@company.com
						</p>
					</div>
				</div>
				<ul class="list">
						<?php
							$get_gata=new data();
                            $id_services=$_GET['content'];
							$select_services=$get_gata->get_services($id_services);
							foreach($select_services as $se){

						?>
						<li>
							<h5><?php echo $se['name_services'];?></h5>
						    <img src="img/<?php echo $se['file']?>" name="txtfile" alt="Img" height="180" width="290">
							<p>
								<?php echo $se['s_services'];?>
							</p>
                            <p>
								<?php echo $se['l_services'];?>
							</p>
                            <div class="sv">
                                <a class="more" href="services.php" class="more">Back &gt;&gt;</a>
                                <a class="more" href="registration_services.php?get=<?php echo $se['id_services']; ?>" class="more">Registration</a>
							
                            </div>
							
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
    <?php } ?>
</body>
</html>