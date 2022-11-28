<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
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
	
	<script type="text/javascript">
		function divcloseFun(){
			document.getElementById("loginoverdiv").style.display="none";
		}
	</script>
	
	<script type="text/javascript">
		function loginFun(){
			var user = document.getElementById("username").value;
			
			var pass = document.getElementById("password").value;
			
			if(user == "cgc" && pass == "123456"){
				location.href ="http://localhost/ghotalanews/dashboard/";
			
			}else if(user == "subham" && pass == "123456"){
				location.href ="http://localhost/ghotalanews/dashboard/";
			}
			else{
				document.getElementById("alertBox").style.display="flex";
			}
		}
		function alertFun(){
			document.getElementById("alertBox").style.display="none";
			document.getElementsByName("username")[0].value = "";
			document.getElementsByName("password")[0].value = "";
		}
		function showoverdiv(){
			document.getElementById("loginoverdiv").style.display="flex";
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
		<div class="loginclick">
			<button class="loginbtn" onclick="showoverdiv()">Login</button>
		</div>
	</div>



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

	<div class="loginoverdiv" id="loginoverdiv">
		 <div class="loginoverdiv1">
		 	<center>
				<div class="overdiv11">
					
					<div class="form-box">
						<div class="buttom-box">
							<div id="btn" class="btnNewLogin"></div>
							<button type="button" class="toggle-btn" onclick="login()">Student</button>
							<button type="button" class="toggle-btn" onclick="register()">Admin</button>
						</div>
						<form id="login" class="input-group">
							<input type="text" class="textbox11" name="username" id="username" placeholder="User ID" required autocomplete="off">
							<input type="password" name="password" id="password" class="textbox11" placeholder="Enter Password" autocomplete="off" required>
							<input type="checkbox" class="check-box"><span>Remember Password</span>
							<button type="submit" name="login" onclick="loginFun()" class="btn22">Log In</button>
						</form>

						<form id="register" class="input-group">
							<input type="text" class="textbox11" placeholder="User ID" required>
							<input type="text" class="textbox11" placeholder="Enter Password" required>
							<input type="checkbox" class="check-box"><span>Remember Password</span>
							<button type="submit" class="btn22">Login</button>
						</form>
					</div>
				</div>
					<button class="btn22" onclick="divcloseFun()">Close</button>
		
				<div class="alertBox" id="alertBox" style="display: none;">
					<div class="alert1">
						<div class="alertH">Authentication Error</div>
						<span style="margin-top: 30px; font-size: 20px;">Please check your username/password and try again....</span>
						<button class="btn22" style="background: #53538C;" onclick="alertFun()">OK</button>
					</div>
				</div>
			</center>
		 </div>
	</div>

	 <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>

</body>
</html>