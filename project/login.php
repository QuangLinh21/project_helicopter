<?php
    Session_start();
    
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
	font-family: 'Times New Roman', Times, serif;
	font-size: 16px;
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
                        <div class="ff">
                            <div class="f-in">
                                <label for="re">Remember</label>
                                <input type="checkbox" name="re" id="re">
                            </div>
                            <div class="f-in">
                                <a href="register.php">Create Account</a> <br>
                                <a href="changepass.php">Change Password</a>
                            </div>
                        </div>
                        <div class="f-in">
                            <input type="submit" name="sbm" value="Login">
                        </div>
                    </form>
                <?php
        include('control.php');
        $get_data=new data();
        if(isset($_POST['sbm']))
        {
        if(empty($_POST['user']) || empty($_POST['password']))
        echo"<script>alert('User name v?? password kh??ng ???????c ????? tr???ng');</script>";
        else{
            $login=$get_data->login($_POST['user'],$_POST['password']);
            if($login==1){
               $_SESSION['user']=$_POST['user'];
			   $get_quyen=$get_data->get_quyen($_SESSION["user"]);
				   foreach($get_quyen as $select){
			 	   $quyen=$select["quyen"];
			 	   echo $quyen;
			 	}
			    if($quyen==1){
				   header('location:admin.php');
				    echo'<script>alert ($quyen);</script>';

			   }
			    else{
                header('location:user.php');
                 //echo"<script>alert('????ng nh???p th??nh c??ng');</script>";
			    }
			}
                else
                echo"<script>alert('????ng nh???p kh??ng th??nh c??ng');</script>";
				
   
        }

     }

    ?>
				</div>

				<div id="main">
				<div class="video_intro">
					<iframe  height="280" width="421"src="https://www.youtube.com/embed/gon2G_EzbfU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
					
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
						//$get_data=new data();
						if (isset($_POST['sbm']))
				{
					   if(empty($_POST['name']) || empty($_POST["email"]))
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
	</div>
</body>
</html>