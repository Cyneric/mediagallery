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
	<div id="content" style="margin-top:10%;">
		<header>
			<a href="index.php"><img src="images/logo.png" alt="Mediagallery" style="max-width:50%"></a>
		</header>
		
		<nav>
			 <ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
				<li><a href="upload"><i class="fa fa-upload fa-fw"></i> Upload</a></li>
				<li><a href="#"><i class="fa fa-pencil fa-fw"></i> Applications</a></li>
				<li><a href="#"><i class="fa fa-cogs fa-fw"></i> Settings</a></li>
			</ul>
		</nav>

		<div id="login">
		    <div class="input-group margin-bottom-sm">
		        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
		        <input class="form-control" type="text" placeholder="Email address">
		    </div>
		    <div class="input-group">
		        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
		         <input class="form-control" type="password" placeholder="Password">
		    </div>
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