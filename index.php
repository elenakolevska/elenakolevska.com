<!DOCTYPE html>
<html>
<head>
	<title>Elena Kolevska</title>
	<link rel="stylesheet" href="style/main.css">
	<script src="js/application.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<div class="wrap">

		<!-- ==========  Navbar  ========== -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	      <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <!-- {{link_to('/','sportbook.com.vc',array('class'=>'navbar-brand', 'id'=>'logo'))}} -->
	        </div>

	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon icon-radio-checked" style="font-size:30px; color:#1abc9c;"></span>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-radio-checked" style="font-size:18px; color:#1abc9c;"></span></a>
	        </div>
	        <div class="navbar-collapse collapse pull-right">
	          <ul class="nav navbar-nav">
	            <li><a href="#header">Home</a></li>
	            <li><a href="#portfolio">My work</a></li>
	            <li><a href="#contact">Contact me</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>

		<!-- ==========  Header  ========== -->
		<section class="mg-t-bg" id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-1 text-center">
						<img src="img/pc.jpg" alt="" class="img-responsive avatar">
						<div class="status text-left">
							<h4>Work status: <span>Busy</span></h4>
							<p class="highlight">Accepting new projects in December</p>
						</div>
					</div>
					<div class="col-md-7 mg-t-bg">
						<h1>Hi, I'm Elena</h1>
						<div>I'm a backend web developer, but you may hear people call me a "full-stack" one. I live on a mountain in Brasil with my baby son and his dad. I tweet as <a href="https://twitter.com/elena_nosnaweb" target="_blank">@elenanosnaweb</a> and sometimes write for <a href="http://laravel.com.br" target="_blank">laravel.com.br</a></div>
						<div class="mg-t-bg highlight">Technology of choice: PHP</div>
						<div class="highlight">Framework of choice: Laravel</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ==========  Portfolio  ========== -->
		<section id="portfolio">
			<i class="fa fa-code-fork"></i> 
			<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Some of my latest work</h2>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg">
				<div class="col-md-5 col-md-offset-1">
					<img src="img/project.gif" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 text-left">
					<h4>A pretty project</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg">
				<div class="col-md-6 text-right">
					<h4>A pretty project</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
				<div class="col-md-6">
					<img src="img/project.gif" class="img-responsive" alt="">
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg">
				<div class="col-md-5 col-md-offset-1">
					<img src="img/project.gif" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 text-left">
					<h4>A pretty project</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg">
				<div class="col-md-6 text-right">
					<h4>A pretty project</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
				<div class="col-md-6">
					<img src="img/project.gif" class="img-responsive" alt="">
				</div>
			</div>
			</div>
		</section>

		<!-- ==========  Contact  ========== -->
		<section id="contact">
			<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Get in touch</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form role="form">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Name</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Message</label>
					    <textarea class="form-control" rows="3" placheholder="Message"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>					
				</div>
			</div>
			</div>
		</section>


		<!-- ==========  Footer  ========== -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center">
						<a href="#" class="social"><img src="img/google-plus4.svg" alt=""></a>
						<a href="#" class="social"><img src="img/github3.svg" alt=""></a>
						<a href="#" class="social"><img src="img/twitter3.svg" alt=""></a>
					</div>
				</div>
			</div>
		</section>



	</div>
</body>
</html>