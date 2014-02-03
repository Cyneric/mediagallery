<!DOCTYPE html>				
<html lang="de">															
<head>		
	<meta charset="utf-8">
	<title>Mediagallery</title>	
	<meta name="description" content="Upload and share impressions with Mediagallery">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
	<link rel="icon" href="images/favicon.png" type="image/png" />
</head>

<body>
	<div id="content">
		<header>
			<a href="index.php"><img src="images/logo.png" alt="Mediagallery" style="max-width:50%"></a>
		</header>
		
		<nav>
			 <ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
				<li><a href="upload.php"><i class="fa fa-upload fa-fw"></i> Upload</a></li>
				<li><a href="#"><i class="fa fa-pencil fa-fw"></i> Applications</a></li>
				<li><a href="#"><i class="fa fa-cogs fa-fw"></i> Settings</a></li>
			</ul>
		</nav>
		<hr>
		
		<div id="media">
			<?php
				$con=mysqli_connect("localhost","root","root","mediagallery");
				// Check connection
				if (mysqli_connect_errno()){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$result = mysqli_query($con,"SELECT * FROM uploads");
				mysqli_close($con);
				
				
				while($row = mysqli_fetch_array($result))
				{
					echo "<a href='upload/".$row['src']."'><img class='imgsrc' src='upload/".$row['src']."'></a>";
					//echo "<p align='center'>Uploaded: ".$row['date']."</p><br><br>";
				}
			?>
		</div>
		
		<div id="social">
			<a href="#"><i class="fa fa-facebook fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
		</div>
		
		<footer>
			<small>
				Copyright &copy;
				<time datetime="2013">2013</time>
				Mediagallery	
			</small>
		</footer>
	</div>
</body>
</html>​