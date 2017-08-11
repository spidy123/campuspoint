<?php

include 'connection/connection.php';
session_start();
$username=$_SESSION['username'];

$author_name=$_SESSION['author_name'];
if(!$_SESSION['username'] or isset($_POST['cancel']))	
{
	  header("Location: index.php");
}
if(isset($_POST['update']))
{
	
	$user=$_POST['username'];
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$val=false;
	mysql_select_db($database,$connection);
	
	$search_qur="select * from members";
	$search_res=mysql_query($search_qur,$connection);
	 function hash_equals($str1, $str2)
    {
        if(strlen($str1) != strlen($str2))
        {
            return false;
        }
        else
        {
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--)
            {
                $ret |= ord($res[$i]);
            }
            return !$ret;
        }
    }
	if($search_res)
	{
		while($res_row=mysql_fetch_Array($search_res))
			{
					$password=$res_row['password'];

			 
			if($res_row['username']==$user)
			{
				if(hash_equals($password, crypt($oldpass,$password)))
			{
			    $val=true;
				break;
			}
			}
		}
	}
	if($val)
	{
			$hashed_password = crypt($newpass);

		$update_qur="update members SET password='".$hashed_password."' where username='".$user."'";
		$res_update=mysql_query($update_qur,$connection);
		
		if($res_update)
		{
			echo '<script language="javascript">';
			echo 'alert("password successfully updated.");';
			echo '</script>';
			 header("Location: logout.php");
		}
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("old password is incorrect");';
		echo 'window.location.href = "profile.php";';
		echo '</script>';
	}
	

}
?>