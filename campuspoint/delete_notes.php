<?php
include 'connection/connection.php';
error_reporting(0);
session_start();
mysql_select_db($database,$connection);
$username=$_SESSION['username'];
if(isset($_POST['yes']))
{
	
	$val=$_POST['image'];
	
		mysql_select_db($database,$connection);
		
		
		$qur1="select * from notes where BINARY name='$val' and username='$username'";
		$res1=mysql_query($qur1);
		$row1=mysql_fetch_array($res1);
		$path=$row1['path'];
		
		$qur2="delete from notes where name='$val' and username='$username'";
		$res2=mysql_query($qur2);
		
		
		if($res2)
		{
			$file_del=$path;
			if(unlink($file_del))
			{	
				echo '<script language="javascript">';
				echo 'alert("File deleted.");';
				echo 'window.location.href="profile.php";';
				echo '</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("There is some problem while deleting file.Please try again...");';
				echo 'window.location.href="profile.php";';
				echo '</script>';
			}
	
	
}
}

if(isset($_POST['no']))
{
	

     header("Location: index.php");

	
	
}
?>