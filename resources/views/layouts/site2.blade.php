<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ceva</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
	  <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Landing page</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#slider">HOME</a></li>
              <li><a href="#about">ABOUT US</a></li>
              <li><a href="#services">SERVICES</a></li>
              <li><a href="#portfolio">PORTFOLIO</a></li>
              <li><a href="#clients">CLIENTS</a></li>
              <li><a href="#team">TEAM</a></li>
              <li><a href="#contact">CONTACT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	</header>

	<section id="slider">
		<img src="{{ asset('images/phone.png') }}">
		<div class="text">
			<h2>Hello</h2>
			<p> Simply dummy text of the printing and typesetting industry Simply dummy text of the printing and typesetting industry Simply dummy text of the printing and typesetting industry</p>
			<a href="#">
				<button>READ MORE</button>
			</a>
		</div>
	</section>

	<section id="about">
		<div class="container">
			<p class="title">ABOUT US</p>
			<div class="row">
				<div class="col-md-7">
					<p><strong>Lorem ipsum dolor sit amet, consetetur sadipscing </strong></p>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<p>
					<p><a href="#">Want to read more... </a></p>
				</div>
				<div class="col-md-5">
					<img src="{{ asset('images/building3.jpg') }}">
				</div>
			</div>
		</div>
	</section>

	<section id="services">
		<div class="container">
			<p class="title">SERVICES</p>
			<div class="row">
				<div class="col-md-4">
					<div class="box">
						<p>
							<i class="fa fa-android"></i>
						</p>
						<p>Android</p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
					</div>
				</div>

				<div class="col-md-4">
					<div class="box">
						<p>
							<i class=" 	fa fa-apple"></i>
						</p>
						<p>Apple IOS</p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
					</div>
				</div>

				<div class="col-md-4">
					<div class="box">
						<p>
							<i class="fa fa-html5"></i>
						</p>
						<p>Design</p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="portfolio">
		<div class="container">
			<p class="title">PORTFOLIO</p>

			<nav class="navbar navbar-default">
	            <ul class="nav navbar-nav">
	              <li class="active"><a href="#">ALL</a></li>
	              <li><a href="#">PROTOTYPE</a></li>
	              <li><a href="#">DESIGN</a></li>
	              <li><a href="#">ANDROID</a></li>
	              <li><a href="#">APPLE IOS</a></li>
	              <li><a href="#">WEB APP</a></li>
	            </ul>
		    </nav>
		</div>

		<div class="row">
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    	<div class="col-md-3">
	    		<img src="images/building.gif">
	    	</div>
	    </div>
	</section>

	<section id="clients">
		<p class="title">CLIENTS</p>
		<div class="brand-clients">
			<div class="container">
				<div>
					<div class="row">
						<div class="col-md-3">
							<a href="" title>
								<img src="images/client.jpg" alt="" title="">
							</a>	
						</div>
						<div class="col-md-3">
							<a href="" title>
								<img src="images/client.jpg" alt="" title="">
							</a>	
						</div>
						<div class="col-md-3">
							<a href="" title>
								<img src="images/client.jpg" alt="" title="">
							</a>	
						</div>
						<div class="col-md-3">
							<a href="" title>
								<img src="images/client.jpg" alt="" title="">
							</a>	
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<section id="team">
		<div class="container">
			<p class="title">TEAM</p>
			<p class="subtitle">Lorem ipsum dolor sit amet</p>
			<div class="row">
				<div class="col-md-4">
					<img src="images/team.jpg" alt="" title="">
					
					<ul class="social-network social-circle">
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
					
					<div class="position">
						<p>Tom Rensed</p>
						Lorem ipsum dolor
					</div>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
					
				</div>

					<div class="col-md-4">
					<img src="images/team.jpg" alt="" title="">

					<ul class="social-network social-circle">
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    </ul>

					<div class="position">
						<p>Tom Rensed</p>
						Lorem ipsum dolor
					</div>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
				</div>

					<div class="col-md-4">
					<img src="images/team.jpg" alt="" title="">

					<ul class="social-network social-circle">
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    </ul>

					<div class="position">
						<p>Tom Rensed</p>
						Lorem ipsum dolor
					</div>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
				</div>
			</div>
		</div>
	</section>

	<div id="contact">
		<div class="container">
			<p class="title">CONTACT US</p>
			<div class="row">
				<div class="col-md-5">
					<address>
					  <strong>Lorem ipsum</strong><br>
					  Lorem ipsum dolor sit amet
					</address>

					<address>
					  <strong>Lorem ipsum</strong><br>
					  Lorem ipsum dolor sit amet
					</address>

					<address>
					  <strong>Lorem ipsum</strong><br>
					  Lorem ipsum dolor sit amet
					</address>

					<ul class="social-network social-circle">
						<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
		            </ul>
				</div>
				<div class="col-md-7">
					<form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="name" placeholder="Your Name *">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your E-mail *">
					  </div>
					  <div class="form-group">
					     <textarea class="form-control" placeholder="Your Message *">
					  		
					  	</textarea>
					  </div>
					
					  <button type="submit" class="btn btn-danger">SEND MESSAGE</button>
					</form>
				</div>
			</div>
			<hr>
			<p>Copyright &copy; 2017 <a href="">Silvia</a></p>
		</div>
	</div>
</body>
</html>