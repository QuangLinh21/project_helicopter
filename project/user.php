<?php
SESSION_start();
include("control.php");
$get_data=new data();
$select_user=$get_data->get_quyen($_SESSION['user']);
foreach($select_user as $select){
    $user_id=$select["id_user"];
    $user_login=$select["user"];
    $user_address=$select["address"];
    $user_date=$select["date"];
    $user_hobbie=$select["hobbie"];
    $user_file=$select["file"];
    if(empty($_SESSION['user'])){
        echo"You can login";
        header('location:login.php');
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
                <tr>
					<td>Id user</td>
					<td>User name</td>
					<td>Pass word</td>
					<td>Birthday</td>
					<td>Gender</td>
					<td>Address</td>
					<td>File</td>
					<td>option</td>
		        </tr>
                <tr>
					     <td><?php echo $select['id_user']?></td>
					     <td><?php echo $select['user']?></td>
					     <td><?php echo $select['password']?></td>
					     <td><?php echo $select['date']?></td>
					     <td><?php echo $select['gender']?></td>
					     <td><?php echo $select['address']?></td>
					     <td><?php echo $select['file']?></td>
						 <td><a href="update_user.php?update=<?php echo $select['id_user'] ?>"><i class='bx bxs-wrench'></i></a></td>
				</tr>
		
           </table>
       </div>
	   <?php } ?>
	   <div class="main">
       <table>
		   <caption>Your blog</caption>
	   <tr>
					<td>Id blog</td>
					<td>Name_blog</td>
					<td>User name</td>
					<td>Date blog</td>
					<td>Short blog</td>
					<td>Long blog</td>
					
				</tr>
				<?php
					   $select_blog = $get_data ->get_blog($select['user']);
					   foreach($select_blog as $se)
					   {
						?>
				<tr>
					     <td><?php echo $se['id_blog']?></td>
					     <td><?php echo $se['name_blog']?></td>
					     <td><?php echo $se['user']?></td>
					     <td><?php echo $se['date_blog']?></td>
					     <td><?php echo $se['s_blog']?></td>
					     <td><?php echo $se['l_blog']?></td>
			
				    </tr>
					<?php } ?>
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>