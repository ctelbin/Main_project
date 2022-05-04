<?php
session_start();
error_reporting(0);
$name=$_SESSION['user_name'];
$query = "SELECT * FROM LOGIN WHERE usename='$user'";
$data = mysqli_query($connect, $query);
$total = mysqli_num_rows($data);
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title> Hotel Website |</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	</head>
	<body>
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" title="logo" /></a>
						</div>
						<div class="contact-info">
							<p class="phone">Call us : <a href="#">+97143434666</a></p>
							<p class="code">Come and Enjoy Our Hotel</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				
					<div class="Success"style="border:2px solid black; margin-left: 406px;margin-right:408px ">
           <center><table  cellpadding=20px>
							<tr>
							<img src="images/12345.png" title="image-name"/>
							<br><br>
	                        <?php echo $name; ?><h2><font color="red" size="18"><b> Package Booked Successfully</h1></b></font>
	                        <h><font size="5"><b>Thanks For Online Booking<br><br></h></b><br>
	                        <h><b>Come And Visit Our Website Once More</h></b><br><br>
	                       </table>
	                        <a href="logout.php"><input type="Submit" name="Logout" value="Logout" id="button">

								
       </div>
       		
		<div class="copy-tight">
			<footer>Copyright &copy; By Telbin Cherian 2019.All Rights Reserved.</footer>
		</div>
   </body>
   </html>
