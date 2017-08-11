<?php

include 'connection/connection.php';

mysql_select_db($database,$connection);
//$id=$_GET['cid'];
$qur="select * from audio";
$res=mysql_query($qur,$connection);
?>


<!DOCTYPE html>
<html lang="en-US">
	<head>
	<style>
	#nav {
    line-height:30px;
    background-color:white;
    height:1000px;
    width:50px;
    float:left;
    padding:2px; 
}
</style>
	  <link rel="shortcut icon" href="images/logo1.png"/>
		   <?php include "header.php";?>

		<title>College Tune</title>
		 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
  
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../about.html"><span><i class="glyphicon glyphicon-education"></i> CampusPoint</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="../index.html"><span ><i class="glyphicon glyphicon-home"></i> Home</span></a></li>
		<li><a href="../1page.html"><span ><i class="glyphicon glyphicon-th"></i> QuickAccess</span></a></li>
        <li><a href="../departments.html"><span ><i class="glyphicon glyphicon-star"></i> Departments</span></a></li>
        <li><a href="../clubs.html"><span ><i class="glyphicon glyphicon-asterisk"></i> Clubs</span></a></li>
        <li><a href="../collegetube/ttt/v3/_deploy/home.php"><span ><i class="glyphicon glyphicon-play-circle"></i> CollegeTube</span></a></li>
        <!--<li><a href="../php_audio/audio.php"><span ><i class="glyphicon glyphicon-headphones"></i> CollegeTune</span></a></li>-->
		<li><a href="../contact.html"><span ><i class="glyphicon glyphicon-envelope"></i> Contact</span></a></li>
		<li><a href="../login.php"><span ><i class="glyphicon glyphicon-user"></i> Login</span></a></li>
      </ul>
    </div>
  </div>

</nav>
	
	
		
		<div id="container">
			<div id="audio-img">
				<img class="cover">
			</div>
			<div id="audio-player">
				<div id="audio-info">
					<span class="artist"></span> -  <span class="title"></span>
				</div>
				<input id="volume" type="range" min="0" max="10" value="5"></input>
				<br>
				<div id="audio-buttons">
					<button id="prev"></button>
					<button id="play"></button>
					<button id="pause"></button>
					<button id="stop"></button>
					<button id="next"></button>

				
				</div>
				<div class="clearfix"></div>
				<div id="tracker">
					<div class="progressbar" style="display:block;">
					<!--<div class="player_playcontrol" style="cursor:pointer;"></div>
					<div class="player_seekbar" style="cursor:pointer;width:396px;"></div>
					<div class="player_mediatime">
					<p>00:03 | 04:04</p>
					</div>
					
					<div class="player_progress_tooltip" style="left:42px;">
					<p>0:00 | 0:00</p>-->
						<span id="progress"></span>
						<!--<input id="progress" type="range" min="0" max="10" value="5"></input>-->
						
					</div>
					<span id="duration"></span>
				</div>
				<div class="clearfix"></div>
				<ul id="playlist">
<?php 
require('php_audio/number_to_word.php');
$xid=1;
while($row=mysql_fetch_array($res))
{
$str=convert_number_to_words($xid);
$xid++;
//echo $str;
?>
<li id="<?php echo $str;?>" song="<?php echo $row['audio_name'];?>"><?php echo $row['audio_name'];?></li>

<?php   
}?>
</ul>
</div>
		</div>
			<script src="js/jquery.js"></script>
		<script src="js/main.js"></script>

</body>
</html>