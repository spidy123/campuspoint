<?php

include 'connection/connection.php';
session_start();
$username=$_SESSION['username'];
$author_name=$_SESSION['author_name'];
if(!$_SESSION['username'])	
{
	  header("Location: index.php");
}
if(isset($_POST['audio']))
{
	date_default_timezone_set('Asia/Kolkata');

	$date=date("d-m-y");
	$time=date("h:i:sa");
	$showname=$_POST['audio_name'];
	$audio_name=basename($_FILES['file_upload']['name']);
	$cover_name=basename($_FILES['cover_upload']['name']);
	$t_name=$_FILES['file_upload']['tmp_name'];
	$t_name1=$_FILES['cover_upload']['tmp_name'];
	$dir='php_audio/media';
	$dir1 = 'php_audio/images/covers';
	$types = array('audio/mpeg3', 'audio/mp3', 'audio/mpeg');
	$types1 = array('image/jpg','image/png','image/gif','image/jpeg'); 

if (in_array($_FILES['file_upload']['type'], $types)) 
{
	
	mysql_select_db($database,$connection);
		
		$qur1="select * from audio where BINARY audio_name='$audio_name'";
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
	
	if(move_uploaded_file($t_name,$dir."/".$audio_name))
	{
		mysql_select_db($database,$connection);
		$qur1="select * from members where username='".$username."'";
		$res1=mysql_query($qur1,$connection);
		$row1=mysql_fetch_array($res1);
		$author_name=$row1['name'];
		
		if (in_array($_FILES['cover_upload']['type'], $types1)) 
		{
	
		
			$qur1="select * from audio where BINARY cover='$cover_name'";
			$res1=mysql_query($qur1,$connection);
			if(mysql_num_rows($res1)>0)
			{
				echo '<script language="javascript">';
				echo 'alert("Cover name is already exists.");';
				echo 'window.location.href="profile.php";';
				echo '</script>';
			}
			else
			{
			if(move_uploaded_file($t_name1,$dir1."/".$cover_name))
			{
				$qur="insert into audio(id,username,author_name,audio_name,cover,path,date,time,showname) values('','$username','$author_name','$audio_name','$cover_name','upload/$name','$date','$time','$showname')";
				$res=mysql_query($qur,$connection);
				echo '<script language="javascript">';
				echo 'alert("File is successfully uploaded.");';
				echo 'window.location.href="profile.php";';
				echo '</script>';
		
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("There is a problem while uploading your cover file ** 2 ** please upload again...");';
				echo 'window.location.href="profile.php";';
				echo '</script>';
			}
			}
	}
	else
	{
		echo '<script language="javascript">';
			echo 'alert("There is a problem while uploading your cover file  ** 1 ** please upload again...");';
			echo 'window.location.href="profile.php";';
			echo '</script>';
	}
}
else
{
	echo '<script language="javascript">';
			echo 'alert("There is a problem while uploading your audio file please upload again...");';
			echo 'window.location.href="profile.php";';
			echo '</script>';
}
}
}
else
{
	echo '<script language="javascript">';
	echo 'alert("only  mp3 files are allowed to upload.");';
    echo 'window.location.href = "profile.php";';
	echo '</script>';
}


}
?>