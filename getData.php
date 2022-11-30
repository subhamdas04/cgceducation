<?php 
	$con = mysqli_connect("localhost", "root", "", "news");
	$sql = "select * from tab order by id asc";
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_array($result)){
		$title = $row['title'];
		$title = base64_decode($title);
		$img = $row['img'];
		$img = "http://localhost/ghotalanews/img/" . $img;
		$articleUrl = $row['articleUrl'];

		echo "
			<div class='ins1' id='$articleUrl' onclick='blogFun(this)'>
				<div class='img'>
					<img src='$img' width='300px' height='150px'>
				</div>
				<h1>$title</h1>
			</div>";
	}


 ?>