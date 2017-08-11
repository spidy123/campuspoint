
<!doctype html>
<html>
 <head>
  <link rel="shortcut icon" href="images/logo1.png"/>
   <title>Campus Point</title>
   <?php include "header.php"?>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
    
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
<center><div class="col-sm-12" style="font-family: 'Lobster', cursive;color:green;background-color:white;"><h1>Corners</h1></div></center> 
<br><br><br>
 <div class="container">
  <div class="jumbotron">
  <div class="row">
    <div class="col-sm-6 img-hover">
	<center><a href="gallery.php"><img class="img-responsive img-rounded" src="images/gallery1.png"></img></a></center>
      <br><br>
	  <center><a href="gallery.php"><button type="button" class="btn btn-success">Gallery</button></a></center>
     <br>
	 <center><p>Corner to capture campus beauty</p></center>
	</div>
    <div class="col-sm-6 img-hover">
    <center><a href="collegetech.php"><img class="img-responsive img-rounded"src="images/notes.png"></img></a></center>
	     <br><br>
		 <center><a href="collegetech.php"><button type="button" class="btn btn-success">CollegeTech</button></a></center>
      <br>
	  <center><p>Corner to get notes</p></center>
    </div>
	</div>
	<br><br>
	<div class="row">
    <div class="col-sm-6 img-hover">
	<br>
    <center><a href="collegetube/ttt/v3/_deploy/home.php"><img class="img-responsive img-rounded"src="images/collegetube.png"></img></a></center>
       <br><br>
	   <center><a href="collegetube/ttt/v3/_deploy/home.php"><button type="button" class="btn btn-success">College Tube</button></a></center>
      <br>
	  <center><p>Corner to remember memories</p></center>       
    </div>
	 <div class="col-sm-6 img-hover">
	 <br>
	<center><a href="php_audio/audio.php"><img class="img-responsive img-rounded"src="images/collegetune.png"></img></a></center>
      <br><br>
	  <center><a href="php_audio/audio.php"><button type="button" class="btn btn-success">College Tune</button></a></center>
      <br>
	  <center><p>Corner to meet artists</p></center>
    </div>
  </div>
</div>
<br><br><br>

</body>
</html>
