<?php 
include_once('http://localhost/cgceducation/header/header.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admission</title>
	<style type="text/css">
		.admission{
			display: flex;
			flex-direction: row;
			height: auto;
			min-height: 200px;
			width: auto;
			border: 2px solid black;	
		}
		.details{
			display: flex;
			flex-direction: column;
			align-items: top;
			border: 2px solid black;
			height: auto;
			min-height: 200px;
			width: 33%;
			margin-top: 10px;
			margin-left: 10px;
			margin-bottom: 10px;
			margin-right: 10px;
		}
		.textbox{
			width: 300px;
			height: 35px;
			border: 1px solid black;
			border-radius: 15px;
			font-size: 15px;
			outline: none;
			padding-left: 5px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.check-box{
			display: flex;
			flex-direction: column;
			height: 15px;
			width: 15px;
			margin-left: 10px;
		}
		.headingtext{
			display: flex;
			flex-direction: column;
			font-size: 40px;
			color: #53538C;
			margin-left: 10px;
			user-select: none;
			font-weight: bold;
			align-items: center;
		}
		.uploadbtn{
			width: 260px;
			height: 35px;
			color: #fff;
			background: #53538C;
			cursor: pointer;
			border: 0;
			border-radius: 20px;
			outline: none;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<center><div class="headingtext">ADMISSION</div></center>
	<div class="admission">
		<div class="details">
			<center>
				<div class="headingtext"><u>YOUR DETAILS</u></div>
				<form>
					<input type="text" class="textbox" placeholder="Enter your Name" required>
					<input type="text" class="textbox" placeholder="Enter your birthdate">
					<button class="uploadbtn">Upload Birth Certificate</button>
					<select class="textbox">
						<option value="">Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="transgender">Transgender</option>
					</select>
					<select class="textbox">
						<option value="">Select your caste</option>
						<option value="sc">SC</option>
						<option value="general">General</option>
						<option value="st">ST</option>
						<option value="obc">OBC</option>
					</select>
					<button class="uploadbtn">Upload Caste Certificate</button>
					<select class="textbox">
						<option value="">Select your course</option>
						<option value="adca">ADCA</option>
						<option value="dca">DCA</option>
						<option value="coding">Coding</option>
					</select>
					<input type="email" class="textbox" placeholder="Enter your Email Address" autocomplete="off" required>
					<input type="text" class="textbox" placeholder="Enter your Phone Number" required>
					<input type="text" class="textbox" placeholder="Enter your Village/City" required>
					<input type="text" class="textbox" placeholder="Enter your Post office" required>
					<input type="text" name="district" class="textbox" placeholder="Enter your District" required>
					<input type="text" name="pin_no" class="textbox" placeholder="Enter your Pin No" required>
					<input type="text" name="state" class="textbox" placeholder="Enter your State" required>

					<div class="headingtext"><u>QUALIFICATIONS</u></div>
					<select class="textbox">
						<option value="">Qualification</option>
						<option value="hslc">10 passed</option>
						<option value="hs">12 passed</option>
						<option value="ug">UG</option>
						<option value="pg">PG</option>
					</select>
					<input type=text class="textbox" placeholder="% in class 10" autocomplete="off" required>
					<button class="uploadbtn">Upload Marksheet of X</button>
					<input type="text" class="textbox" placeholder="% in class 12" required>
					<button class="uploadbtn">Upload Marksheet of XII</button>
					<select class="textbox">
						<option value="">Select your stream</option>
						<option value="science">Science</option>
						<option value="commerce">commerce</option>
						<option value="arts">Arts</option>
					</select>
					<input type="text" class="textbox" placeholder="Enter your Village/City" required>
					<input type="text" class="textbox" placeholder="Enter your Post office" required>
					<input type="text" name="district" class="textbox" placeholder="Enter your District" required>
					<input type="text" name="pin_no" class="textbox" placeholder="Enter your Pin No" required>
					<input type="text" name="state" class="textbox" placeholder="Enter your State" required>
					<input type="text" name="" class="textbox" placeholder="enter sd">
				</form>
			</center>
		</div>
	</div>

	<div class="admission" style="margin-top: 30px;">
		<input type="checkbox" class="check-box">
		<span>i accept all the terms and condition of the institute and </span>
	</div>
	
	
</body>
</html>

<?php 
include_once('http://localhost/cgceducation/footer/footer.php');
 ?>