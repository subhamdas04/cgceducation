<!DOCTYPE html>
<html>
<head>
	<title>Footer</title>
	<style type="text/css">
		.foot{
			display: flex;
			flex-direction: row;
			width: 100%;
			height: 400px;
			background: #fff;
			border: 2px solid black;
			margin-top: 20px;
		}
		.onethird{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 33%;
			height: 94%;
			border: 2px solid black;
			margin-left: 10px;
			margin-top: 10px;
			margin-right: 10px;
		}
		.logoandtext{
			display: flex;
			flex-direction: row;
			height: 20%;
			width: 100%;
		}
		.description{
			display: flex;
			flex-direction: column;
			height: 80%;
			width: 100%;
			border: 3px solid red;
		}
		.footerlogo{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin-left: 5px;
			margin-top: 1px;
			height: 70px;
			width: 105px;
			background-image: url(logo.jpg);
			background-size: 100% 100%;
		}
		.footerlogotext{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			color: #53538C;
			user-select: none;
			font-weight: bold;
			font-size: 50px;
			margin-left: 5px;
		}
	</style>
</head>
<body>
	<div class="foot">
		<div class="onethird">
			<div class="logoandtext">
				<div class="footerlogo"></div>
				<div class="footerlogotext">CGC Education</div>
			</div>
			<div class="description">
				We provide 
			</div>
		</div>
		
		<div class="onethird">
			<a href="#">Shortcuts</a>
		</div>
		
		<div class="onethird">
			<a href="#"><u>social sites</u></h3>
		</div>
	</div>
</body>
</html>