<?php
require_once('connection/connection.php');
mysql_select_db($database,$connection);
$qur1="select * from notes where branch='CIVIL' and class='FY'";
$res1=mysql_query($qur1,$connection);

$qur2="select * from notes where branch='CIVIL' and class='SY'";
$res2=mysql_query($qur2,$connection);

$qur3="select * from notes where branch='CIVIL' and class='TY'";
$res3=mysql_query($qur3,$connection);

$qur4="select * from notes where branch='CIVIL' and class='BTECH'";
$res4=mysql_query($qur4,$connection);
?>
<!doctype html>
<html>
 <head>
  <link rel="shortcut icon" href="images/logo1.png"/>
   <title>Campus Point</title>
      <?php include "header.php"?>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/collegetech.css">
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.js"></script>
	 <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="container">                                       
  <div class="dropdown">
  <br>
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Other Dapartments
    <span class="caret"></span></button>
     <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
	        <li role="presentation"><a role="menuitem" tabindex="-1" href="cse.php">CSE</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="mech.php">MECHANICAL</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="tronics.php">ELECTRONICS</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="trical.php">ELECTRICAL</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="civil.php">CIVIL</a></li>
		  
		  
		  
    </ul>
 </div>
</div>

<div class="container-fluid">
  <div class="row">
   <center><div class="row"> <center><div class="col-sm-12" style="background-color:white;font-family: 'Lobster', cursive;color:green"><h2>--IT Department--</h2></div></center>
   <br><br>
  

 <h2>--NOTES--</h2>
 
 <div class="container">
 <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"></div>
  </div>
  </div>
  
  

  
  
<br><br>
     <div id="section1" class="container">

    <h2 style="color:#ff9800;font-family:'Lobster';font-size:50px">--FY--</h2>
	  <?php 
	 
	   $num=mysql_num_rows($res1);

	  if($num==0)
		  echo "<h3 id='list'>Notices are not displayed yet....</h3>";
	  else
	  {
	  while($row1=mysql_fetch_array($res1))
	  {
		  
	      echo "<center><a href=".$row1['path']."><li id='list'>".$row1['name']."</li></a></center>";
          echo "<br/>";
	  }
	  }
	  ?>
     </div>  

	<div id="section2" class="container">

    <h2 style="color:#ff9800;font-family:'Lobster';font-size:50px">--SY--</h2>
	  <?php 
	     $num=mysql_num_rows($res2);

	  if($num==0)
		  echo "<h3 id='list'>Notices are not displayed yet....</h3>";
	  else
	  {
	  while($row1=mysql_fetch_array($res2))
	  {
		  
	      echo "<center><a href=".$row1['path']."><li id='list'>".$row1['name']."</li></a></center>";
          echo "<br/>";
	  }
	  }
	  ?>
     </div>    

      <div id="section3" class="container">
	  <h2 style="color:#ff9800;font-family:'Lobster';font-size:50px">--TY--</h2>
	  <?php 
	    $num=mysql_num_rows($res3);

	  if($num==0)
		  echo "<h3 id='list'>Notices are not displayed yet....</h3>";
	  else
	  {
	  while($row1=mysql_fetch_array($res3))
	  {
		  
	      echo "<center><a href=".$row1['path']."><li id='list'>".$row1['name']."</li></a></center>";
          echo "<br/>";
	  }
	  }
	  ?>
     
	</div>
	<div id="section1" class="container">

    <h2 style="color:#ff9800;font-family:'Lobster';font-size:50px">--BTech--</h2>
	  <?php 
	     $num=mysql_num_rows($res4);

	  if($num==0)
		  echo "<h3 id='list'>Notices are not displayed yet....</h3>";
	  else
	  {
	  while($row1=mysql_fetch_array($res4))
	  {
		  
	      echo "<center><a href=".$row1['path']."><li id='list'>".$row1['name']."</li></a></center>";
          echo "<br/>";
	  }
	  }
	  ?>
     </div> 


</body>
</html>