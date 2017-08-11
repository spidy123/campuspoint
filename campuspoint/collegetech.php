<!doctype html>
<html>
 <head>
  <link rel="shortcut icon" href="images/logo1.png"/>
   <title>Campus Point</title>
   <?php include "header.php"?>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
<style>
.img-hover img {
    -webkit-transition: all .3s ease; /* Safari and Chrome */
  	-moz-transition: all .3s ease; /* Firefox */
  	-o-transition: all .3s ease; /* IE 9 */
  	-ms-transition: all .3s ease; /* Opera */
  	transition: all .3s ease;
}
.img-hover img:hover {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform:translateZ(0) scale(1.20); /* Safari and Chrome */
    -moz-transform:scale(1.20); /* Firefox */
    -ms-transform:scale(1.20); /* IE 9 */
    -o-transform:translatZ(0) scale(1.20); /* Opera */
    transform:translatZ(0) scale(1.20);
}
  
  
.grayscale {
  -webkit-filter: brightness(1.10) grayscale(100%) contrast(90%);
  -moz-filter: brightness(1.10) grayscale(100%) contrast(90%);
  filter: brightness(1.10) grayscale(100%); 
}
</style>
</head>

   <body>

 
<br><br>
<div class="container-fluid">
 <div class="row">
 <center><div class="col-sm-12" style="font-family: 'Lobster', cursive;color:green;background-color:white;"><h1>College Tech</h1></div></center>
 </div>
<center>
<br/><br/>
 <div class="container">
  <div class="jumbotron">
  <div class="row">
  <div class="col-sm-4 img-hover">
     <a href="it.php"><img class="img-responsive img-rounded" src="images/it.png"></img></a>
	 <br><br>
	 <center><a href="it.php"><button type="button" class="btn btn-primary">InformationTechnology</button><center/>
	 <br>
	 </div>
 
  <div class="col-sm-4 img-hover">
     <a href="cse.php"><img class="img-responsive img-rounded" src="images/cse.png"></img></a>
	 <br><br>
	 <center><a href="cse.php"><button type="button" class="btn btn-primary">ComputerScience</button><center/>
	 <br>
	 </div>
     <div class="col-sm-4 img-hover">
	 <a href="mech.php"><img class="img-responsive img-rounded" src="images/mech.png"></img></a>
	 <br><br>
	 <center><a href="mech.php"><button type="button" class="btn btn-primary">Mechanical</button><center/>
	 <br>
	 </div>
	 <br><br>
	  <div class="col-sm-4 img-hover">
	 <a href="civil.php"><img class="img-responsive img-rounded"src="images/civil.png"></img></a>
	  <br><br>
	 <center><a href="civil.php"><button type="button" class="btn btn-primary">Civil</button><center/>
	<br>
	</div>
	  <div class="col-sm-4 img-hover">
	 <a href="tronics.php"><img class="img-responsive img-rounded" src="images/tronix.png"></img></a>
	 <br><br>
	 <center><a href="tronics.php"><button type="button" class="btn btn-primary">Electronics</button><center/>
	 <br>
	 </div>
	  <div class="col-sm-4 img-hover">
	  <a href="trical.php"><img class="img-responsive img-rounded"src="images/trical.png"></img></a>
	  <br><br>
	 <center><a href="trical.php"><button type="button" class="btn btn-primary">Electrical</button><center/>
	 </div>
</center>
</body>
</html>
