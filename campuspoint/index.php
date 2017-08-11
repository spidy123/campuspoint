<?php
error_reporting(0);

include 'connection/connection.php';

if(isset($_POST['register']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
    
	$repassword=$_POST['repassword'];
	$name=$_POST['name'];
	$prn=$_POST['prn'];
	$username=$prn."_".$_POST['username'];

	
	mysql_select_db($database,$connection);
	$search_query="select * from members where username='".$username."'";
	$res_search=mysql_query($search_query,$connection);
	$count=mysql_num_rows($res_search);
	
	if($count>0)
	{
		echo "<script>";
		echo 'alert("Username is already exist.");';
		echo '</script>';
	}
    echo "pass:".$password;
    echo "re:".$repassword;
    if(strcmp($password,$repassword)==0)
    {

	
		$insert_query="insert into members(id,username,password,email,name,class) values('','$username','$password','$email','$name','$prn');";
		$result_query=mysql_query($insert_query,$connection);
		if($result_query)
		{
			echo "<script>";
			echo 'alert("You have successfully registered.");';
			echo '</script>';
		}
	}
  
    else
    {
            echo "<script>";
			echo 'alert("Password must be same.");';
			echo '</script>';
    }
}
if(isset($_POST['login']))
{ 
    session_start();
	$Username=$_POST['username'];
	$Password=$_POST['password'];

	mysql_select_db($database,$connection);
	$qur="select * from members where username='".$Username."'";
	$result=@mysql_query($qur,$connection);
	$num=mysql_num_rows($result);
    
    if($num>0)
      $val=true;
    else
        $val=false;
	$row=mysql_fetch_array($result);
	
	if($val) 
	{
		
		$_SESSION['username']=$Username;
	    header('Location: profile.php');
   }
	else 
	{
		echo "<script>";
		echo "alert('Invalid Username or Password')";
		echo "</script>";
	}
	
	
}


?>

<!doctype html>
<html>
 <head>
  <link rel="shortcut icon" href="images/logo1.png"/>
  
   <title>Campus Point</title>
<?php include "header.php";?>  
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br><br>
<center><div class="col-sm-12" style="font-family: 'Lobster', cursive;color:white;background-color:light-blue;"><h1>WELCOME TO THE CAMPUS POINT</h1></div></center>
 <center><div class="col-sm-12" style="font-family: 'Lobster', cursive;color:white;background-color:light-blue"><h3>"The Ultimate Corner"</h3></div></center>
 

 <div class="image">
	<img src="images/d6.jpg" class="img">
</div>


 <div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-4 img-hover" style="background-color:white;font-family: 'Lobster', cursive;color:skyblue">
	
	  <center><a href="gallery.php"><h2>Gallery</h2></a><center>
  <br><br> 
 <a href="gallery.php"><img src="images/gallery.png"></img></a>
  </div>
  <div class="col-sm-4">
	<!-- BEGIN # BOOTSNIP INFO -->
	
  

<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
              
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" method="post" action="index.php">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username/PRN</label>
              <div class="controls">
                <input required="" id="userid" name="username" type="text" class="form-control" placeholder="" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password</label>
              <div class="controls">
                <input required="" id="passwordinput" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls" style="padding-left:20px;">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="login" class="btn btn-success">Sign In</button>
              </div>
            </div>
			<br>
			<a href="#forgot" data-toggle="tab">Forgot Password?</a>
			
            </fieldset>
            </form>
        </div>
		<div class="tab-pane fade" id="forgot">
            <form class="form-horizontal" method="post" action="index.php">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Email</label>
              <div class="controls">
                <input required="" id="userid" name="email" type="text" class="form-control" placeholder="" class="input-medium" required="">
              </div>
            </div>

           

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="login" class="btn btn-success">Send</button>
              </div>
            </div>
			<br>

			
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" method="post" action="index.php">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
			 <div class="control-group">
              <label class="control-label" for="name">Full Name</label>
              <div class="controls">
                <input id="Email" name="name" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
			
			 <div class="control-group">
              <label class="control-label" for="prn">PRN NO</label>
              <div class="controls">
                <input id="Email" name="prn" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label" for="Email">Email</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username</label>
              <div class="controls">
                <input id="userid" name="username" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword" >Re-Enter Password</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control" name="repassword" type="password" placeholder="********" class="input-large" required="">
              </div>
            </div>
            
            <!-- Multiple Radios (inline) -->
            <br>
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="register" type="submit" class="btn btn-success">Sign Up</button>
              </div>
            </div>
			
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>
	

<!-- END # BOOTSNIP INFO -->

</div>
	<div class="col-sm-4 img-hover" style="background-color:white;font-family: 'Lobster', cursive;color:skyblue">
	<center><h2><a href="about.html">About</h2></a></center>
  <br><br> 
    <center><a href="about.html"><img class="img-responsive img-ronded" src="images/about.png"></img></a></center>
  </div>
</div>
</div>
<br><br>

	
	 <center><div class="col-sm-12" style="font-family: 'Lobster', cursive;color:green"><h2>-- Follow us on --</h2></div></center>
	
	
	<div style="background-color:black;font-family: 'Lobster', cursive;color:white">
	<div class="teachers">
	<div class="container-fluid">
	<div class="col-md-4 text-center">
				
					
					<h3>Akash More</h3>
						
					<i class="glyphicon glyphicon-earphone"></i> 7387971032
					<br>
					<!--<i class="glyphicon glyphicon-envelope"></i> akashmore1997.am85@gmail.com-->
					<center>
	
	<a target="_blank" title="find us on Facebook" href="https://www.facebook.com/akash.more.315080"><img id="shubham" alt="follow me on facebook" src="images/fb.ico" height="32" width="32" border=0></a>&nbsp&nbsp
	<a target="_blank" title="find us on Google+" href="https://plus.google.com/100090608075056523779"><img id="shubham" alt="follow me on google+" src="images/Google-plus.ico" height="32" width="32" border=0></a>&nbsp&nbsp
		<a target="_blank" title="find us on Google+" href="https://www.linkedin.com/in/akash-more-707440104"><img id="shubham" alt="follow me on google+" src="images/linkedin-icon.png" height="32" width="32" border=0></a>

	
	
	</center>	
				
			</div>
		
			<div class="col-md-4 text-center">
				
					
					<h3>Shubham Hupare</h3>
					
					<i class="glyphicon glyphicon-earphone"></i> 7058563707
					<br>
					<!--<i class="glyphicon glyphicon-envelope"></i> hupareshubham@gmail.com-->
					<center>
	
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com/shubham.hupare.73"><img id="shubham" alt="follow me on facebook" src="images/fb.ico" height="32" width="32" border=0></a>&nbsp&nbsp
	<a target="_blank" title="find us on Google+" href="https://plus.google.com/u/0/108291905379630720213"><img id="shubham" alt="follow me on google+" src="images/Google-plus.ico" height="32" width="32" border=0></a>&nbsp&nbsp
		<a target="_blank" title="find us on Google+" href="https://www.linkedin.com/in/shubham-hupare-babb19a2"><img id="shubham" alt="follow me on google+" src="images/linkedin-icon.png" height="32" width="32" border=0></a>

	
	
	</center>	
			</div>	
            		
			
			
			
			<div class="col-md-4 text-center">
				
					
						<h3>Nilesh Bonde</h3>
								
					<i class="glyphicon glyphicon-earphone"></i> 8605740124
					<br>
					<!--<i class="glyphicon glyphicon-envelope"></i> nileshbonde13@gmail.com-->
					<center>
	
	<a target="_blank" title="find us on Facebook" href="http://www.facebook.com/shubham.hupare.73"><img alt="follow me on facebook" src="images/fb.ico" height="32" width="32" border=0></a>&nbsp&nbsp
	<a target="_blank" title="find us on Google+" href="https://plus.google.com/u/0/108291905379630720213/posts"><img alt="follow me on google+" src="images/Google-plus.ico" height="32" width="32" border=0></a>&nbsp&nbsp
		<a target="_blank" title="find us on Google+" href="https://www.linkedin.com/in/shubham-hupare-babb19a2?trk=nav_responsive_tab_profile"><img alt="follow me on google+" src="images/linkedin-icon.png" height="32" width="32" border=0></a>

	
	
	</center>	
						
		
		
	        </div>
			<br>
	</div>
</div>
</div>
<footer id="foot">



</footer>

	</body>
</html>
