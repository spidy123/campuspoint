<?php
error_reporting(0);
include '../connection/connection.php';

mysql_select_db($database,$connection);
$qur="select * from audio";
$res=mysql_query($qur,$connection);
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>College Tune</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style.css">
 <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body style="background:#333;">

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
         <li><a href="../index.php"><span ><i class="glyphicon glyphicon-home"></i> Home</span></a></li>
		<li><a href="../quickaccess.php"><span ><i class="glyphicon glyphicon-th"></i> QuickAccess</span></a></li>
        <li><a href="../collegetech.php"><span ><i class="glyphicon glyphicon-book"></i> CollegeTech</span></a></li>
        <li><a href="../collegetube/ttt/v3/_deploy/home.php"><span ><i class="glyphicon glyphicon-play-circle"></i> CollegeTube</span></a></li>
        <li><a href="../php_audio/audio.php"><span ><i class="glyphicon glyphicon-headphones"></i> CollegeTune</span></a></li>
		<li><a href="../contact.php"><span ><i class="glyphicon glyphicon-envelope"></i> Contact</span></a></li>
		<li><a href="../login.php"><span ><i class="glyphicon glyphicon-user"></i> Login</span></a></li>
		<li><a href="../feedback.php"><span><i class="glyphicon glyphicon-edit"></i> Feedback</span></a></li>
	  </ul>
    </div>
  </div>

</nav>

<div id="container">

<script>
 function callfun(obj)
 {
        var noimg = "images/covers/default.gif";
        obj.src=noimg;
}
</script>
  <div id="audio-image"> <img class="cover" onerror="this.src='images/covers/default.gif';" > </div>
  <div id="audio-player">
    <div id="audio-info" style="color:white"> Artist : <span style="color:white" class="artist"></span></div>
    <br>
	<input id="volume" type="range" min="0" max="10" value="4">
    
    <div id="buttons"> <span>
      <button id="prev"></button>
      <button id="play"></button>
      <button id="pause"></button>
      <button id="stop"></button>
      <button id="next"></button>
      </span> 
	</div>
    <div class="clearfix"></div>
    <div id="tracker">
      <div id="progress-bar"> <span id="progress"></span> </div>
      <span id="duration">0:00</span> 
	</div>
    <div class="clearfix"></div>
    <ul id="playlist" style="overflow:auto;height:100px;color:white">
	<?php 
require('number_to_word.php');
$xid=1;
while($row=mysql_fetch_array($res))
{
$str=convert_number_to_words($xid);
$xid++;
//echo $str;
?>


<li song="<?php echo $row['audio_name'];?>" cover="<?php echo $row['cover']; ?>" artist="<?php echo $row['author_name'];?>"><?php echo $row['audio_name'];?></li>

     <!-- <li song="song1.mp3" cover="cover1.jpg" artist="Linkin Park">Song2</li>
      <li song="song2.mp3" cover="cover1.jpg" artist="Linkin Park">Song3</li>
	  <li song="Sample.mp3" cover="cover1.jpg" artist="Linkin Park">Song1</li>
      <li song="song1.mp3" cover="cover1.jpg" artist="Linkin Park">Song2</li>
      <li song="song2.mp3" cover="cover1.jpg" artist="Linkin Park">Song3</li>
      -->
	<?php   
}?>
    </ul>
  </div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>