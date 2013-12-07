<!DOCTYPE html>
<html>
<head>
	<title>Elena Kolevska</title>
	<link rel="stylesheet" href="style/normalize.css">
	<link rel="stylesheet" href="style/main.css">
	<script src="js/application.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<?php 
		if ($_SERVER["SERVER_ADDR"] <> '127.0.0.1' )
			{
				?>
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-45898227-1', 'elenakolevska.com');
				  ga('send', 'pageview');

				</script>
				<?php
			} 
	?>	
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
							<p class="highlight">Accepting new projects in January 2014</p>
						</div>
					</div>
					<div class="col-md-7 mg-t-bg">
						<h1>Hi, I'm Elena</h1>
						<div>I'm a backend web developer, but I also get called a "full-stack" one a lot. I live on a mountain in Brasil with my baby son and his dad. I tweet as <a href="https://twitter.com/elena_nosnaweb" target="_blank">@elena_kolevska</a> and sometimes write for <a href="http://laravel.com.br" target="_blank">laravel.com.br</a></div>
						<div class="mg-t-bg highlight">Technology of choice: PHP</div>
						<div class="highlight">Framework of choice: Laravel</div>
					</div>
				</div>
			</div>
		</section>
<!-- 		<svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
			<path d="M0 0 C 50 100 80 100 100 0 Z"></path>
		</svg>
 -->		
		<!-- ==========  Portfolio  ========== -->
		<section id="portfolio" class="">
			<i class="fa fa-code-fork"></i> 
			<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Latest work</h2>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg project">
				<div class="col-md-5 col-md-offset-1">
					<div class="cf">
						<img src="img/sportbook-com-vc-c.png" class="img-responsive bottom" alt="">
						<img src="img/sportbook-com-vc-g.png" class="img-responsive top" alt="">
					</div>
				</div>
				<div class="col-md-6 text-left">
					<h4>Sportbook.com.vc</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg project">
				<div class="col-md-6 col-md-push-6">
					<div class="cf">
						<img src="img/pestservice411-c.png" class="img-responsive bottom" alt="">
						<img src="img/pestservice411-g.png" class="img-responsive top" alt="">
					</div>
				</div>
				<div class="col-md-6 col-md-pull-6 text-right">
					<h4>Pestservice 411</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg project">
				<div class="col-md-5 col-md-offset-1">
					<div class="cf">
						<img src="img/nosnatrilha-c.png" class="img-responsive bottom" alt="">
						<img src="img/nosnatrilha-g.png" class="img-responsive top" alt="">
					</div>
				</div>
				<div class="col-md-6 text-left">
					<h4>Pousada Nós Na Trilha</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
				</div>
			</div>
			<hr>
			<div class="row mg-t-bg project">
				<div class="col-md-6  col-md-push-6">
					<div class="cf">
						<img src="img/lmas-c.png" class="img-responsive bottom" alt="">
						<img src="img/lmas-g.png" class="img-responsive top" alt="">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 text-right">
					<h4>Labour market analysis software</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id sapiente possimus eaque necessitatibus atque tempore soluta temporibus! Error iure expedita tempora deleniti ducimus fuga aliquam dolorem tenetur mollitia accusamus!</p>
					<a href="#">More...</a>
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
	</div>
	<!-- ==========  Footer  ========== -->
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<a href="#" class="social" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="https://github.com/elena-kolevska" class="social" target="_blank"><i class="fa fa-github"></i></a>
					<a href="https://twitter.com/elena_nosnaweb" class="social" target="_blank"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</section>
</body>
</html>