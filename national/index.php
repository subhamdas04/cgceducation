<?php 
include_once('http://localhost/ghotalanews/header/header.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="../header/style.css">
	<style type="text/css">
		.socialdiv{
			display: flex;
			flex-direction: column;
			border: 0px solid red;
			height: 340px;
			width: 100%;
			align-items: center;
		}
		.partition{
			display: flex;
			flex-direction: row;
			width: 50%;
			height: 140px;
			border: 0px solid blue;
			margin-top: 10px;
		}
		.socialicon{
			display: flex;
			flex-direction: column;
			height: 130px;
			width: auto;
			border: 0px solid black;
			margin-top: 10px;
			margin-left: 80px;
			padding-left: 20px;
		}
		.address{
			display: flex;
			flex-direction: column;
			width: 100%;
			height: 500px;
			border: 0px solid black;
			margin-top: 20px;
		}
		.addressText{
			display: flex;
			flex-direction: column;
			font-size: 40px;
			color: #53538C;
			margin-left: 10px;
			user-select: none;
			font-weight: bold;
			align-items: center;
		}
		.addandvdo{
			display: flex;
			flex-direction: row;
			width: 100%;
			height: 450px;
			border: 2px solid green;
			margin-top: 20px;
		}
		.location{
			display: flex;
			flex-direction: column;
			height: 400px;
			width: 450px;
			border: 2px solid black;
			margin-top: 10px;
			margin-left: 20px;
		}
		.locationvdo{
			display: flex;
			flex-direction: column;
			height: 400px;
			width: 800px;
			border: 0px solid black;
			margin-top: 10px;
			margin-left: 30px;
		}
	</style>
</head>
<body>
	<center><h1 style="font-size: 40px; color: #53538C; font-weight: bold;"><u>Our Social Sites</u></h1></center>
	<div class="socialdiv">
		<div class="partition">
			<div class="socialicon">
				<i style="font-size: 100px; color: green;" class="fab fa-whatsapp-square"></i>
				<a style="font-size: 20px;" href="https://wa.me/+91XXXXXXXXXX" target="_blank">Whatsapp</a>
			</div>
			<div class="socialicon">
				<i style="font-size: 100px; color: blue;" class="fas fa-phone-square-alt"></i>
				<a style="font-size: 20px;" href="#">Phone</a>
			</div>
			<div class="socialicon">
				<i style="font-size: 100px; color: red;" class="fas fa-envelope-open-text"></i>
				<a style="font-size: 20px;" href="#" target="_blank">Email</a>
			</div>
		</div>
		
		<div class="partition">
			<div class="socialicon">
				<i style="font-size: 100px; color: pink;" class="fab fa-instagram-square"></i>
				<a style="font-size: 20px;" href="https://www.instagram.com/_moody_musafir/" target="_blank">Instagram</a>
			</div>
			<div class="socialicon">
				<i style="font-size: 100px; color: blue;" class="fab fa-facebook-square"></i>
				<a style="font-size: 20px;" href="https://www.facebook.com/abhijit.dey.7771" target="_blank">Facebook</a>
			</div>
			<div class="socialicon">
				<i style="font-size: 100px; color: red;" class="fab fa-youtube"></i>
				<a style="font-size: 20px;" href="https://www.youtube.com/channel/UCv1hlpwNPU9h9KNf5GNZFHA" target="_blank">Youtube</a>
			</div>
		</div>	
	</div>

	<div class="address">
		<div class="addressText"><u>Office Address</u></div>
		<div class="addandvdo">
			<div class="location">
			Kachari Road
			</div>
			<div class="locationvdo">
				<video controls height="400px" width="800px" loop autoplay poster="9.jpg">
					<source src="dee.mp4" type="Video/mp4">
				</video>
			</div>
		</div>
	</div>
</body>
</html>


<?php 
include_once('http://localhost/cgceducation/footer/footer.php');
 ?>