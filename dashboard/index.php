<?php 
include_once('http://localhost/cgceducation/header/header.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		.over{
			display: none;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			position: absolute;
		}
		.over2{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			border-radius: 10px;
			background: #fff;
			width: 400px;
			height: 250px

		}
		.textbox{
			width: 250px;
			height: 30px;
			border-radius: 5px;
			margin-bottom: 20px;
			outline: none;
		}
		.btndash{
			width: 120px;
			height: 30px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			background: green;
			color: #fff;
			outline: none;
		}
		.btn:active{
			background: black;
		}
	</style>
	<script type="text/javascript">
		function closeChange(){
			document.getElementsByClassName("over")[0].style.display = "none";
		}
		function changepass(){
			document.getElementsByClassName("over")[0].style.display = "flex";
		}
	</script>
</head>
<body>
	<center>
		<h2>WELCOME TO YOUR PROFILE</h2>
	</center><br>
	<a href="#" id="logout">Logout</a><br>
	<a href="#" id="changePass" onclick="changepass()">Change Password</a><br>
	<a href="#" id="userInfo">User Information</a>

	<div class="over">
		<div class="over2">
			<h2><u>Change Password</u></h2>

			<input type="password" name="pass1" placeholder="Enter new password" class="textbox">
			<input type="password" name="pass2" placeholder="Retype your password" class="textbox">
			<div>
				<button class="btndash" id="change" style="font-size: 13px">Change Password</button>
				<button class="btndash" style="margin-left: 30px;" onclick="closeChange()">Close</button>
			</div>
		</div>
	</div>

	<div class="over" style="display: none;">
		<div class="over2" style="width: 800px;">
			<h2><u>Information of the User</u></h2>
			<table cellspacing="0" id="infoTable">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Password</th>
					<th>Action</th>
				</tr>	
			</table>
			<button class="btndash" style="margin-top: 30px;">Close</button>
		</div>
	</div>
</body>
</html>


<?php 
include_once('http://localhost/cgceducation/footer/footer.php');
 ?>