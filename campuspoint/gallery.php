<?php
include 'connection/connection.php';

mysql_select_db($database,$connection);
$qur="select * from gallery";
if(isset($_POST['category']))
{
	
  $category=$_POST['category'];
  $qur="select * from gallery where category='".$category."'";
}
  $res=mysql_query($qur,$connection);

?>
<!doctype html>
<html>
 <head>
  <link rel="shortcut icon" href="../images/logo1.png"/>
   <?php include "header.php";?>
   <title>Gallery</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
     
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
	 
<link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css1 file-->
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css1 file-->
    <link rel="stylesheet" href="css1/superslides.css">
    <!-- Slick slider css1 file -->
    <link href="css1/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css1 file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css1/jquery.circliful.css'>  
    <!-- smooth animate css1 file -->
    <link rel="stylesheet" href="css1/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css1/queryLoader.css" type="text/css" />
    <!-- gallery slider css1 -->
    <link type="text/css" media="all" rel="stylesheet" href="css1/jquery.tosrus.all.css" />    
    <!-- Default Theme css1 file -->
    <link id="switcher" href="css1/themes/default-theme.css" rel="stylesheet">
	    <link href="css1/style.css" rel="stylesheet">

<style>

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
.select-style {
    padding: 0;
    margin: 5px;
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background-color: #fff;
  
    background: #fff url("http://www.scottgood.com/jsg/blog.nsf/images/arrowdown.gif") no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background-color: transparent;
    background-image: none;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
}

.select-style select:focus {
    outline: none;
}

#mainselection select {
   border: 0;
   color: #EEE;
   background: transparent;
   font-size: 20px;
   font-weight: bold;
   padding: 2px 10px;
   width: 250px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;
}
#mainselection option{
	
	color:black;
}

#mainselection {
	margin:20px;
   overflow:hidden;
   width:60%;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 90% center;
}

</style>
 </head>
 
 <body>
   <br>


<center><h2 style="background-color:white;font-family: 'Lobster', cursive;color:orange">--Gallery--</h2></center>
<div class="container">
  <br>
  
  <form name="form" method="post" action="gallery.php">
  <center>
  <div class="row">
  <div class="col-sm-4">
   <div id="mainselection">
  <select name="category" onchange="form.submit()" >
        <option selected disabled hidden>Clubs</option>

    <option value="SAIT">SAIT</option>
    <option value="ACSES">ACSES</option>
    <option value="WLUG">WLUG</option>
    <option value="ROTRACT">ROTRACT</option>
  </select>
</div>
</div>
  <div class="col-sm-4">

<div id="mainselection">
  <select name="category" onchange="form.submit()">
        <option selected disabled hidden>Departments</option>

    <option value="IT">IT</option>
    <option value="CSE">CSE</option>
    <option value="ELECTRONICS">ELECTRONICS</option>
    <option value="ELECGTRICAL">ELECTRICAL</option>
	<option value="CIVIL">CIVIL</option>
	<option value="MECHANICAL">MECHANICAL</option>
  </select>
</div>
</div>
  <div class="col-sm-4">

<div id="mainselection">
  <select name="category" onchange="form.submit()">
      <option selected disabled hidden>Campus</option>
<option value="Nature">Nature</option>
														<option value="Animals">Animals</option>
														<option value="Fun">Fun</option>
														<option value="Social">Social</option>
														<option value="Sports">Sports</option>
														<option value="Other">Other</option>
  </select>
</div>
</div>
  </center>
  </form>
  <br><br>
  
  <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
                <?php 
while($row=mysql_fetch_array($res))
{ 
?>
				<a href="<?php echo "php_image/".$row['path'] ?>" >
                  <img class="gallery_img" src="<?php echo "php_image/".$row['path'] ?>" alt="img" />
                <span class="view_btn"><?php echo "posted by<br>".$row['author_name']."<br>".$row['username'];?></span>
                </a>
				<?php 
				}
				?>
				 </div>
          </div>
        </div>
      </div>
    </section>
  
  
  <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <div class="item active">
        <img src="images/c2.png" alt="Chania" width="460" height="345">
      </div>
  
 
while($row=mysql_fetch_array($res))
{ 
echo "<div class='item'>";
?>
<img src="echo "php_image/".$row['path'] ?>" width="300" height="200"></img><br/>


echo "</div>";
}?>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- For smooth animatin  -->
    <script src="js1/wow.min.js"></script>  
    <!-- Bootstrap js1 -->
    <script src="js1/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js1/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js1/jquery.easing.1.3.js"></script>
    <script src="js1/jquery.animate-enhanced.min.js"></script>
    <script src="js1/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js1/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js1/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js1-->
    <script src="js1/custom.js"></script>

</body>
</html>
