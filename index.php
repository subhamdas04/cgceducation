<?php 
include_once('http://localhost/ghotalanews/header/header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" href="./header/style.css">  
    <link rel="stylesheet" href="./footer/style.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<style type="text/css">
		.content{
			border: 0px solid red;
			text-align: center;
		}
		.row1{
			display: grid;
			border: 0px solid red;
			column-gap: 10px;
			grid-template-columns: repeat(3, 1fr);
		}
		.img img{
			width: 100%;
			margin: 10px 10px;
			margin-right: 10px;
		}
		.content .row1 .img:hover{
			scale: 1.1;
			transition: 1s ease;
			margin-left: 10px;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type: 'GET',
				url: 'getData.php',
				success: function(data){
					document.getElementById("photu").innerHTML += data;
				}
			});
		});
	</script>

	<script type="text/javascript">
		function blogFun(e){
			var a = e.id;
			location.href = "http://localhost/subham/website/blog/?p="+a;
		}
	</script>

</head>
<body>
	<div class="content">
		<div class="row1" id="photu">
			</div>
		</div>
	</div>
</body>
</html>

<?php 
include_once('http://localhost/ghotalanews/footer/footer.php');
 ?>
