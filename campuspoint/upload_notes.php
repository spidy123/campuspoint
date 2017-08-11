<?php
include 'connection/connection.php';
session_start();
error_reporting(0);
$username=$_SESSION['username'];
$author_name=$_SESSION['author_name'];
if(!$_SESSION['username'])	
{
	  header("Location: index.php");
}
if(isset($_POST['gallery']))
{
	date_default_timezone_set('Asia/Kolkata');

	$date=date("d-m-y");
	$time=date("h:i:sa");
	$name=$_POST['notes_name'];
	$notes_name=basename($_FILES['file_upload']['name']);
	$t_name=$_FILES['file_upload']['tmp_name'];
	$dir='php_notes/upload';
	$branch=$_POST['branch'];
	$class=$_POST['class'];
	$types = array('application/zip', 'application/x-zip-compressed','multipart/x-zip', 'application/x-compressed');
if(in_array($_FILES['file_upload']['type'],$types))
{
		mysql_select_db($database,$connection);
		
		$qur1="select * from notes where BINARY name='$notes_name' and BINARY branch='$branch' and BINARY class='$class'";
		$res1=mysql_query($qur1,$connection);
		
		if(mysql_num_rows($res1)>0)
		{
			echo '<script language="javascript">';
		    echo 'alert("File name is already exists.");';
		    echo 'window.location.href="profile.php";';
		    echo '</script>';
		}
    else
	{
		
	if(move_uploaded_file($t_name,$dir."/".$notes_name))
	{
		mysql_select_db($database,$connection);
		$qur1="select * from members where username='".$username."'";
		$res1=mysql_query($qur1,$connection);
		$row1=mysql_fetch_array($res1);
		$author_name=$row1['name'];
		
		$qur="insert into notes(id,username,author_name,name,path,branch,class,date,time) values('','$username','$author_name','$name','php_notes/upload/$notes_name','$branch','$class','$date','$time')";
		$res=mysql_query($qur,$connection);
		echo '<script language="javascript">';
		echo 'alert("File is successfully uploaded.");';
		echo 'window.location.href="profile.php";';
		echo '</script>';
		
		
	}
	else
	{
			echo '<script language="javascript">';
			echo 'alert("There is a problem while uploading your file please upload again...");';
			echo 'window.location.href="profile.php";';
			echo '</script>';
			
	}
	}
}
else
{
	echo '<script language="javascript">';
	echo 'alert("only zip files are allowed to upload.");';
    echo 'window.location.href = "profile.php";';
	echo '</script>';
	}
}



?>