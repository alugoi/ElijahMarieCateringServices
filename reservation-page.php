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
	<h1>Reserve Now</h1>
	<p>NEED ASSISTANCE? WE'RE HERE TO HELP.</p>
</div>
<div class="gap-header"></div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<ul class="nav nav-tabs">
				<li class="personal"><a data-toggle="tab" href="#personal">Personal Information</a></li>
				<li class="event-type"><a data-toggle="tab" href="#event-type">event type</a></li>
				<li class="event-date"><a data-toggle="tab" href="#event-date">event Date</a></li>
				<li class="event-location"><a data-toggle="tab" href="#event-location">event Location</a></li>
				<li class="menu-package"> <a data-toggle="tab" href="#menu-package">Menu Package</a></li>
			</ul>

			<div class="tab-content">
				<div id="personal" class="tab-pane fade in active">
					<h3>Personal Information</h3>
					<form action="/action_page.php">
						<div class="row">
							<div class="form-group col-md-6">
								<label>First Name</label> (*Required)

								<input type="text" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>Last Name</label> (*Required)
								<input type="text" class="form-control" id="pwd">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<label>Address</label> (*Required)
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Age</label> (*Required)
								<input type="text" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>Gender</label> (*Required)
								<input type="text" class="form-control" id="pwd">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label>Contact Number</label> (*Required)
								<input type="text" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>Email</label> (*Required)
								<input type="text" class="form-control" id="pwd">
							</div>
						</div>

					</form>
					<a data-toggle="tab" href="#event-type" class="btn btn-primary pull-right" id="personal-btn">Next</a>
					
				</div><!--end of personal information seminar-->
				<div id="event-type" class="tab-pane fade">
					<h3>Event Type</h3>
					<form>
						<div class="row">
							<div class="form-group col-md-6 text-inside">
								<div class="top-left">
									<img src="asset/check-img.png">
								</div>
								<!-- <input type="checkbox" class="top-left"> -->
								<img src="asset/event-type/christening.jpg" style="width:100%;">
							</div>
							<div class="form-group col-md-6">
								
								<img src="asset/event-type/seminar.jpg" style="width:100%;">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 text-inside">
								
								<img src="asset/event-type/birthday.jpg" style="width:100%;">
							</div>
							<div class="form-group col-md-6">
								<img src="asset/event-type/wedding.jpeg" style="width:100%;">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 text-inside">
								<img src="asset/event-type/anniversary.jpg" style="width:100%;">
							</div>
							<div class="form-group col-md-6">
								<img src="asset/event-type/chrismas-party.jpg" style="width:100%;">
							</div>
						</div>
					</form>
					<a data-toggle="tab" href="#event-date" class="btn btn-primary pull-right" id="event-type-btn">Next</a>
				</div><!--end of event type-->
				<div id="event-date" class="tab-pane fade">
					
					<a data-toggle="tab" href="#event-location" class="btn btn-primary pull-right" id="event-date-btn">Next</a>

				</div>
				<div id="event-location" class="tab-pane fade">
					<h3>Event Location</h3>
					<h4>Suggested Location</h4>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!--indicator-->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1" ></li>
							<li data-target="#myCarousel" data-slide-to="2" ></li>
						</ol>
						<!--wrapper for slides-->
						<div class="carousel-inner">
							<div class="item active">
								<img src="asset/location/location1.jpg" style="width:100%;">
								<div class="carousel-caption">
									<h3>sample image</h3>
									<p>this is sample only</p>
								</div>
							</div>
							<div class="item">
								<img src="asset/location/location1.jpg" style="width:100%;">
								<div class="carousel-caption">
									<h3>sample image</h3>
									<p>this is sample only</p>
								</div>
							</div>
							<div class="item">
								<img src="asset/location/location1.jpg" style="width:100%;">
								<div class="carousel-caption">
									<h3>sample image</h3>
									<p>this is sample only</p>
								</div>
							</div>

						</div> <!--end of inner class-->
						<!--left and right control-->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div><!--end of myCarousel-->
					<h4>Others</h4>
						<input type="text" placeholder="input complete address of location of the events" class="form-control">
					<br>
					<a data-toggle="tab" href="#menu-package" class="btn btn-primary pull-right" id="event-location-btn">Next</a>
				</div><!--end of location-->
				<div id="menu-package" class="tab-pane fade">
					<h3>Package Menu</h3>
					<form>
						<div class="row">
							<div class="form-group col-md-6 text-inside">
								<div class="top-left">
									<img src="asset/check-img.png">
								</div>
								<!-- <input type="checkbox" class="top-left"> -->
								<img src="asset/menu/menu1.jpg" style="width:100%;">
							</div>
							<div class="form-group col-md-6">
								
								<img src="asset/menu/menu1.jpg" style="width:100%;">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 text-inside">
								
								<img src="asset/menu/menu1.jpg" style="width:100%;">
							</div>
							<div class="form-group col-md-6">
								<img src="asset/menu/menu1.jpg" style="width:100%;">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6 text-inside">
								<img src="asset/menu/menu1.jpg" style="width:100%;">
							</div>
							<div class="form-group col-md-6">
								<img src="asset/menu/menu1.jpg" style="width:100%;">
							</div>
						</div>
					</form>

					<a class="btn btn-success pull-right" id="menu-packge-btn">Reserve</a>
				</div>
			</div><!--end of tab content-->
		</div>
		<div class="col-md-3">
			
		</div>
	</div>

</div><!--end container-->
<div class="gap-header"></div>
	<footer>
      	<div class="container-fluid text-center">
          © 2018 Copyright: <a href="https://mdbootstrap.com/material-design-for-bootstrap/">Elijah Marie Eatery</a>

      	</div>
	</footer><!--end of footer-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	    $("#personal-btn").click(function(){
	        $(".personal").removeClass("active");
	        $(".event-type").addClass("active");
	    });
	    $("#event-type-btn").click(function(){
	        $(".event-type").removeClass("active");
	        $(".event-date").addClass("active");
	    });
	    $("#event-date-btn").click(function(){
	        $(".event-date").removeClass("active");
	        $(".event-location").addClass("active");
	    });
	    $("#event-location-btn").click(function(){
	        $(".event-location").removeClass("active");
	        $(".menu-package").addClass("active");
	    });
	});
</script>
</body>
</html>