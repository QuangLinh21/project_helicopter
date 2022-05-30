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
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
	 .main{
        padding: 30px 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    table{
	font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
   }
   td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
td:last-child a{
    text-align: center;
    margin-left: 10px;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
.body{
    display:flex;
}
table caption{
	margin-bottom:20px;
	font-size:18px;
	font-weight:bold;

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
.main{
    margin-top:80px;
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
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li>
							
						</li>
						<li class="f">
							<font color="#fff" class="font"><?php echo $user_login; ?>
						    </font>
							<img class="img" src="img/<?php echo $file; ?> "width='40px'></img>
					
						</li>
						<li >
							<a href="login.php">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	   <div class="main">
       <table>
				<caption>Contact of Users</caption>
                <tr>
					<td>Id contact</td>
					<td>Name</td>
					<td>Email</td>
					<td>Message</td>
					<td>option</td>
		        </tr>
				<?php
					   $select_contact = $get_data -> select_contact();
					   foreach($select_contact as $se)
					   {
						?>
                <tr>
					     <td><?php echo $se['ID_contact']?></td>
					     <td><?php echo $se['your_name']?></td>
					     <td><?php echo $se['email']?></td>
					     <td><?php echo $se['message']?></td>
						 <td><a href="delete_contact.php?delete=<?php echo $se['ID_contact'] ?> " onclick="return(confirm('Are you sure delete ?'))"><i class='bx bxs-trash'></i></a></td>
						 

				</tr>
				<?php

					 } ?>
					

             </table>
					
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