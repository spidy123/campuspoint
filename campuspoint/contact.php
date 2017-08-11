<!doctype html>
<html>
 <head>
  <link rel="shortcut icon" href="images/logo1.png"/>
   <title>Campus Point</title>
      <?php include "header.php"?>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.js"></script>
	 <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
img {
  vertical-align: middle;
  max-height: 300px;
  width: 100%;
}

/* Typography
------------------------------------- */
h1,h2,h3,h4,h5 {
  font-family: 'Unica One', cursive;
  font-weight: bold;
}

/* All Section styles
------------------------------------- */
.section-title {
  padding: 10px;
  position: relative;
  text-align: center;
  margin-bottom: 50px;
}

.section-title, #plan .section-title {
  border-color: #ffffff;
  padding-top: 40px;
}

.heading{
	color:#FFFFFF;
	font-size:36px;
}

#team h4 {
  color: #092756;
  font-weight: bold;
  text-align: center;
}
#team h3 {
  color: #000000;
  font-size: 14px;
  font-weight: bold;
  text-align: center;
}

#team .team-wrapper .team-des {
  cursor: pointer;
  position: relative;
  bottom: 0;
  transition: all 0.4s linear;
  padding: 62px 22px 62px 22px;
  background: #ffffff;
}

#team .team-wrapper:hover .team-des {
  background: #ffffff;
  bottom: 100px;
}

#team .team-wrapper .social-icon li a {
  font-size: 16px;
}




.social-icon {
  padding: 0;
  margin: 0;
}

.social-icon li {
  list-style: none;
  display: inline-block;
  padding: 6px;
}

.social-icon li a {
  color: #000000;
  font-size: 20px;
  font-weight: 300;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  text-decoration: none;
  transition: all 0.4s ease-in-out;
  margin: 0 8px 14px 8px;
}

.social-icon li a:hover {
  background: #000000;
  color: #ffffff;
}
</style>
</head>
   <body style="background:#333">
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<h1 class="heading">OUR TEAM</h1>					
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/akash.JPG" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Akash More</h4>
							<h3>Front-End Developer</h3>
							<ul class="social-icon">
							<li><a href="https://www.facebook.com/akash.more.315080" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://plus.google.com/100090608075056523779" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://www.linkedin.com/in/akash-more-707440104" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-github wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="images/shubham.JPG" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Shubham Hupare</h4>
							<h3>Back-End Developer</h3>
							<ul class="social-icon">
								<li><a href="http://www.facebook.com/shubham.hupare.73" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://plus.google.com/u/0/108291905379630720213" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://www.linkedin.com/in/shubham-hupare-babb19a2" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://github.com/spidy123" class="fa fa-github wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/nilesh.png" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Nilesh Bonde</h4>
							<h3>Web Designer</h3>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-github wow fadeIn" data-wow-delay="0.6"></a></li>
							</ul>
						</div>
				</div>
			</div>

		</div>
	</div>
</section>

</body>
</html>
