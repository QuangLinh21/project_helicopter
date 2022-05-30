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
	<title>Blog - Helicopter Transportation Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
	#main ul li .more{
		font-size:13px;
		background: #79ADE8;
		width:120px;
		height:30px;
		border-radius:3px;
		margin-bottom:15px;
		color:#fff;
		padding: 2px;
	}
	#main ul li .more:hover{
		color:black;
	}
	.section h5{
		margin-left:10px;
	}
	#blog #sidebar .section .blog{
	  text-decoration: none;
	  padding: 15px 85px;
	  background: #79ADE8;
	 margin-top:15px;
	 width:150px;
	 border-radius:5px;
	 font-size:20px;
	 color:#fff;
  }
  #blog #sidebar .section .blog:hover{
	  background:#f2cc3d;
  }
  #blog #sidebar .section h5{
	  margin-bottom:20px;
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
						<li class="selected">
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
			<div id="blog">
				<div id="sidebar">
					<div class="section">
						<h5>Thêm blog tại đây !!!</h5>
						<p><a href="insert_blog.php" class="blog">Viết Blog</a></p>
					</div>
					<div class="section">
						<h5>BẢN ĐỒ ẨM THỰC VIỆT NAM</h5>
						<img src="images/bando.png" alt="" width="270px" height="500px">
					</div>
				</div>
				<div id="main">
					<ul class="list">
						<?php
							$get_gata=new data();
							$select_blog=$get_gata->post_blog();
							foreach($select_blog as $se){

						?>
						<li>
							<span class="time"><?php echo $se['date_blog'];?> | by <?php echo $se['user']?></span>
							<h5><?php echo $se['name_blog'];?></h5>
							<!-- <img src="images/wedding.jpg" alt="Img" height="180" width="290"> -->
							<p>
								<?php echo $se['s_blog'];?>
							</p>
							<a class="more" href="fullblog.php?content=<?php echo $se['id_blog']; ?>" class="more">Read more &gt;&gt;</a>
							
						</li>
						<?php } ?>
						<!-- <li>
							<span class="time">August 2023 | by <a href="blog.php">blogger</a></span>
							<h5>This is just a place holder</h5>
							<p>
								Quisque vitae mauris non diam tincidunt elementum. Praesent sed ipsum vel nisl viverra porttitor pretium vel ante. Nullam quis ultrices orci. Aliquam erat volutpat. Maecenas nec risus at nulla accumsan varius. Aliquam eget malesuada tortor. Aenean ligula elit, volutpat nec elem entum dignissim conse.  sollicitudin purus, eu rutrum mi ligula nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							</p>
						</li>
						<li>
							<span class="time">August 2023 | by <a href="blog.php">blogger</a></span>
							<h5>This is just a place holder</h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae mauris non diam tincidunt elementum. Praesent sed ipsum vel nisl viverra porttitor pretium vel ante. Nullam quis ultrices orci. Aliquam erat volutpat. Maecenas nec risus at nulla accumsan varius. Aliquam eget malesuada tortor.
							</p>
						</li> -->
					</ul>
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