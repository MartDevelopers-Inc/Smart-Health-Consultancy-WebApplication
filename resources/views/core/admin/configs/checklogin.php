<?php
function check_login()
{
	if(strlen($_SESSION['id'])==0)
		{
			$host = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra="admin_index.php";
			$_SESSION["id"]="";
			header("Location: http://$host$uri/$extra");
			
		}
}

function officer_check_login()
{
	if(strlen($_SESSION['officer_id'])==0)
		{
			$host = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra="officer_login.php";
			$_SESSION["officer_id"]="";
			header("Location: http://$host$uri/$extra");
			
		}
}
?>
