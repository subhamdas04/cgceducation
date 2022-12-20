<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="./phone-responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<script type="text/javascript">
		function goHome(){
			location.href = "http://localhost/ghotalanews/";
		}
		function goSports(){
			location.href = "http://localhost/ghotalanews/sports/";
		}
		function goBollywood(){
			location.href = "http://localhost/ghotalanews/bollywood/";
		}
		function goNational(){
			location.href = "http://localhost/ghotalanews/national/";
		}
		function goInternationa(){
			location.href = "http://localhost/ghotalanews/international/";
		}
		function goOthers(){
			location.href = "http://localhost/ghotalanews/others/";
		}
	</script>

</head>
<body>
	<div class="topbar">
		<div class="follow">
			Follow us on:
			<a href="https://www.youtube.com/channel/UCGxc7wxVxUpkrtKOZ7zwg6A" target="_blank"><i class="fab fa-youtube" style="font-size: 20px; margin-left: 15px; color: white; cursor: pointer; margin-top: 5px;"></i></a>
			<a href="https://www.facebook.com/subham.das.9440234/" target="_blank"><i class="fab fa-facebook" style="font-size: 20px; margin-left: 15px; color: white; cursor: pointer; margin-top: 5px;"></i></a>
			<a href="https://twitter.com/HelloSubhammmmm" target="_blank"><i class="fab fa-twitter" style="font-size: 20px; margin-left: 15px; color: white; cursor: pointer; margin-top: 5px;"></i></a>
			<a href="https://www.instagram.com/fine._apple_/" target="_blank"><i class="fab fa-instagram" style="font-size: 20px; margin-left: 15px; color: white; cursor: pointer; margin-top: 5px;"></i></a>
		</div>
		<input type="text" placeholder="Search here" class="search_article">
	</div>
	
	<!-- topbar ends here and logo & logo text starts from here -->

	<div class="main">
		<div class="logo" onclick="goHome()"></div>
		<div class="logoText" onclick="goHome()">Ghotala News</div><br>
	</div>

	<div class="menu">
		<button class="btn" onclick="goHome()">Home</button>
		<button class="btn" onclick="goSports()">Sports</button>
		<button class="btn" onclick="goBollywood()">Bollywood</button>
		<button class="btn" onclick="goNational()">National</button>
		<button class="btn" onclick="goInternationa()">International</button>
		<button class="btn" onclick="goOthers()">Others</button>
	</div>

</body>
</html>