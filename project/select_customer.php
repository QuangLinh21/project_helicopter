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
				<caption>Customer</caption>
                <tr>
                    
					<td>Id services</td>
                    <td>Id customer</td>
					<td>Name Customer</td>
					<td>Gender</td>
					<td>Phone Number</td>
					<td>Address</td>
                    <td>Quantity</td>
					<td >option</td>
		        </tr>
				<?php
					   $select_cus=$get_data -> select_customer($_GET['select']);
					   foreach($select_cus as $se)
					   {
						?>
                <tr>
					     <td><?php echo $se['id_services']; ?></td>
						 <td><?php echo $se['id_customer']?></td>
						 <td><?php echo $se['name_customer']?></td>
					     <td><?php echo $se['gender']?></td>
                         <td><?php echo $se['phone']?></td>
						 <td><?php echo $se['address']?></td>
                         <td><?php echo $se['quantity']?></td>
						 <td><a href="delete_customer.php?delete=<?php echo $se['id_customer'] ?> &id_services=<?php echo $se['id_services'] ;?>  "onclick="return(confirm('Are you sure delete ?'))"><i class='bx bxs-trash'></i></a></td>

				</tr>
				<?php

					 } ?>
					

             </table>
					
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
				</div>
			</div>
		</div>
	</div><?php } ?>
</body>
</html>