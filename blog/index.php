<?php 
include_once('http://localhost/ghotalanews/header/header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../header/style.css">  
    <link rel="stylesheet" href="../footer/style.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<title>Blogs</title>
	<style type="text/css">
		.newsbox{
			display: flex;
			flex-direction: column;
			height: auto;
			min-height: 200px;
			width: 100%;
			border: 0px solid red;
		}
		.article-info{
			display: flex;
			flex-direction: column;
			height: auto;
			width: 100%;
			border: 0px solid blue;
		}
		.main_article{
			margin: 0 3rem;
			
		}
		.article_img{
			float: left;
			margin: 1rem;
			
		}
		.main_article .article_img img{
			height: 400px;
			width: 600px;
			margin-top: 20px;
			float: left;
		}
		.written_article{
			/*display: flex;
			flex-direction: column;
			height: auto;
			width: 100%;
			padding-left: 5px;
			margin-top: 10px;
			margin-bottom: 10px;*/
			padding: 2rem; 
			text-align: justify;
			font-size: 25px;
		}
	</style>

<!-- ================= TITLE ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'title.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('title').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= SUBTITLE ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'subTitle.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('subTitle').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= POST TIME ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'postTime.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('postTime').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= POST DATE ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'postDate.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('postDate').innerHTML = data;
				}
			});
		});
	</script><!-- ================= CONTENT ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'content.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('content').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= CATEGORY ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'category.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('category').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= CAPTION ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'caption.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('caption').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= AUTHOR ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'author.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('author').innerHTML = data;
				}
			});
		});
	</script>

	<!-- ================= IMG ============ -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'img.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('img').innerHTML = data;
				}
			});
		});
	</script>

	
 		<!-- rediected from main index -->
	<script type="text/javascript">
		$(document).ready(function(){
			var params = new URLSearchParams(location.search);
			var a = params.get("p");
			$.ajax({
				type: 'GET',
				url: 'img.php',
				data: {
					p: a
				},
				success: function(data){
					document.getElementById('img').src = "http://localhost/subham/website/"+data;
				}
			});
		});
	</script>

</head>
<body>
	<div class="newsbox">
		<div class="article-info">
			<h1 id="title">TITLE</h1>
			<h2 id="subTitle">Sub-Title</h2>
			<h3 id="category">Category:</h3>
			<h3 id="author">Author:</h3>
			<h3 id="postDate">Date:</h3>
			<h3 id="postTime">Time:</h3>
			<hr>
		</div>
		<div class="main_article">
			<div class="article_img">
				<img src="./fifa.jpg" id="img" height="auto">
				<div id="caption" style="font-size: 20px; color: blue;"></div>
			</div>
			<p class="written_article" id="content"></p>
			
		</div>
		
	</div>
</body>
</html>
<?php 
include_once('http://localhost/ghotalanews/footer/footer.php');
 ?>