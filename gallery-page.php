<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<title>Elijah Marie Eatery</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<link href="https://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top " id="nav">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		</button>
			<a class="navbar-brand" href="#">Elijah Marie</a>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="myNavbar">
			<ul class="nav navbar-nav">
				<li id="home" class="hover"><a href="index.php">Home</a></li>
				<li id="gallery" class="hover"><a href="gallery-page.php">Gallery</a></li>
				<li id="menus" class="hover"><a href="menu-page.php">Menus</a></li>
				<li id="menus" class="hover"><a href="reservation-page.php">Reservation</a></li>
				<li id="contact" class="active hover"><a href="contact-page.php">Contact</a></li>
			</ul>
		</div>
	</div>
</nav><!--end nav bar-->
<div class="container-fluid" id="background-panel">
	<h1>Gallery</h1>
	<p>NEED ASSISTANCE? WE'RE HERE TO HELP.</p>
</div>
<div class="gap-header">
</div>
	<div class="container">
		<div class="row header-title-container" id="featured-dishes">
			<h1>Heading</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="gap-header"></div>
		<div class="row">
			<div class="col-md-3">
				<img src="asset/gallery1.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery2.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery3.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery4.jpg" class="img-responsive myGallery">
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<img src="asset/gallery5.png" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery6.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery7.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery8.jpg" class="img-responsive myGallery">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<img src="asset/gallery9.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery1.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery1.jpg" class="img-responsive myGallery">
			</div>
			<div class="col-md-3">
				<img src="asset/gallery1.jpg" class="img-responsive myGallery">
			</div>
		</div>
	</div><!--end of container-fluid-->
	<div class="modal fade" role="dialog" id="myGallery">
		<div class="modal-dialog"></div>
		<div class="modal-content">
			<div class="modal-body text-center">
				<button type="button" class="close" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span>
				</button>
				<img src="" id="modal-img">
			</div>
		</div>
	</div><!--end of modal image-->
	<div class=gap-header></div>
	<footer>
      	<div class="container-fluid text-center">
          © 2018 Copyright: <a href="https://mdbootstrap.com/material-design-for-bootstrap/">Elijah Marie Eatery</a>

      	</div>
	</footer><!--end of footer-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/customize.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.myGallery').click(function(){
			var src=$(this).attr('src');
			$('#modal-img').attr('src',src);
			$('#myGallery').modal('show');
		});
	});
</script>

</body>
</html>