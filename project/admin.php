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
		<div id="contents">

			<div class="main">
			<table>
				<caption>User|| <a href="ql_contact.php">Qu???n l?? contact</a> || <a href="ql_services.php">Qu???n l?? Services</a></caption>
                <tr>
					<td>Id user</td>
					<td>User name</td>
					<td>Pass word</td>
					<td>Birthday</td>
					<td>Gender</td>
					<td>Address</td>
					<td>File</td>
					<td colspan="3">option</td>
		        </tr>
				<?php
					   $select_user = $get_data -> select_user();
					   foreach($select_user as $se)
					   {
						?>
                <tr>
					     <td><?php echo $se['id_user']?></td>
					     <td><?php echo $se['user']?></td>
					     <td><?php echo $se['password']?></td>
					     <td><?php echo $se['date']?></td>
					     <td><?php echo $se['gender']?></td>
					     <td><?php echo $se['address']?></td>
					     <td><?php echo $se['file']?></td>
						 <td><a href="update_user.php?update=<?php echo $select['id_user'] ?>"><i class='bx bxs-wrench'></i></a></td>
						 <td><a href="delete_user.php?delete=<?php echo $se['id_user'] ?> " onclick="return(confirm('Are you sure delete ?'))"><i class='bx bxs-trash'></i></a></td>
						 <td><a href="user_blog.php?get=<?php echo $se['user'] ?>"><i class='bx bxs-purchase-tag'></i></a></td>

				</tr>
				<?php

					 } ?>
					

             </table>
					
	    </div>
		<div class="main">
			
					
	    </div>
	   <div class="main">
	   <table >
	   <caption>Blog of Users</caption>
				<tr>
					<td>Id blog</td>
					<td>Name_blog</td>
					<td>User name</td>
					<td>Date blog</td>
					<td>Short blog</td>
					<td>Long blog</td>
					<td colspan="2">option</td>
				</tr>
				
					<?php
					   $select_blog_u = $get_data ->select_blog_user();
					   foreach($select_blog_u as $se)
					   {
						?>
					<tr>
					     <td><?php echo $se['id_blog']?></td>
					     <td><?php echo $se['name_blog']?></td>
					     <td><?php echo $se['user']?></td>
					     <td><?php echo $se['date_blog']?></td>
					     <td><?php echo $se['s_blog']?></td>
					     <td><?php echo $se['l_blog']?></td>
						 <td><a href="delete_blog.php?delete=<?php echo $se['id_blog'] ?> " onclick="return(confirm('Are you sure delete ?'))"><i class='bx bxs-trash'></i></a></td>
						 <?php
						 if($se['quyen_blog']==0)
						{
							echo
							"<td><a href='post_blog.php?post=". $se['id_blog'] ."'><i class='bx bxs-cloud-upload'></i></a></td>";
						}
							else
							echo
						 "<td><a href='unpost.php?unpost=".$se['id_blog'] ."'><i class='bx bx-cloud-download'></i></a></td>";
				   
					?>
				    </tr>
					<?php

					 } ?>
					
			</table>
					
	   </div>
	   <div class="main">
			<table>
				<caption>Services || <a href="add_services.php">ADD Services</a></caption>
                <tr>
					<td>Id services</td>
					<td>Name services</td>
					<td>file</td>
					<td>Short services</td>
					<td>Long Services</td>
					<td colspan="4">option</td>
		        </tr>
				<?php
					   $select_services = $get_data -> se_services();
					   foreach($select_services as $se)
					   {
						?>
                <tr>
					     <td><?php echo $se['id_services']?></td>
						 <td><?php echo $se['name_services']?></td>
						 <td><?php echo $se['file']?></td>
					     <td><?php echo $se['s_services']?></td>
						 <td><?php echo $se['l_services']?></td>
						 <td><a href="delete_services.php?delete=<?php echo $se['id_services'] ?> " onclick="return(confirm('Are you sure delete ?'))"><i class='bx bxs-trash'></i></a></td>
						 <td><a href="update_services.php?update=<?php echo $se['id_services'] ?>"><i class='bx bxs-wrench'></i></a></td>
						 <?php
						 if($se['quyen_services']==0)
						{
							echo
							"<td><a href='post_services.php?post=". $se['id_services'] ."'><i class='bx bxs-cloud-upload'></i></a></td>";
						}
							else
							echo
						 "<td><a href='unpost_services.php?unpost=".$se['id_services'] ."'><i class='bx bx-cloud-download'></i></a></td>";
				   
					?>
						 <td><a href="select_customer.php?select=<?php echo $se['id_services'] ?> "><i class='bx bx-log-in-circle'></i></i></a></td>

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
	<?php } ?>
</body>
</html>