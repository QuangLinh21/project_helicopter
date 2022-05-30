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
  .highlight{
      margin-top:10px;
      margin-left:10px;
  }
 .ff{
	display: flex;
    justify-content:space-around;
    margin-left: -73px;

}
.f-in input{
	
	padding: 5px;
	border-radius: 3;
	background: #79ADE8;
    border-bottom:none;
}

.f-in input[type=submit]{
    width: 100px;
    height:35px;
    border:none;
    border-radius:3px;
    font-size:18px;
    color:#fff;
    margin-top:30px;

}
a{
    color: indianred;
    margin-left: -10px;
}
input[type=submit]:hover{
    background:#78C7FF;
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
						
						<li class="selected">
							<a href="contact.php">Contact</a>
						</li>
						<li class="f">
					<font color="#fff" class="font"><?php echo $user_login; ?></font>
					<img class="img" src="img/<?php echo $file; ?> "width='40px'></img>
					
					</li>

					</ul>
				</div>
			</div>
		</div>
		<div id="contents">
			<div id="contact">
				<h2>We Have Free Templates for Everyone</h2>
				<p>
					You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. You can replace all this text with your own text.  You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
				</p>
				<div class="highlight">
					<form action="" method="post">
                        <div class="f-in">
                            <label for="username">Username &nbsp;</label>
                            <input type="text" name="user" id="username">
                        </div>
                        <div class="f-in">
                            <label for="pass">Password &nbsp;</label>
                            <input type="password" name="password" id="pass">
                        </div>
                        <div class="f-in">
                            <label for="pass">Password &nbsp;</label>
                            <input type="password" name="newpassword" id="pass">
                        </div>
                        <div class="f-in">
                            <input type="submit" name="sbm" value="Change">
                        </div>
                    </form>
                    <?php
       

        if(isset($_POST['sbm']))
        {
        if(empty($_POST['user']) || empty($_POST['password']) ||empty($_POST['newpassword']))
        echo"<script>alert('User name và password không được để trống');</script>";
        else{
            $change=$get_data->change_pass($_POST['user'],$_POST['password'],$_POST['newpassword']);
            if($change==1){
                header('location:login.php');
            }
                else
                echo"<script>alert('Change Password fale');</script>";
     }
    }

    ?>
				</div>

				<div id="main">
					<img src="images/helicopter2.jpg" alt="Img" height="240" width="421">
					<h5>This is just a place holder</h5>
					<p>
						You can replace all this text with your own text.You can remove any link to our website from this website template, you're free to use this website template without linking back to us. You can replace all this text with your own text.You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
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