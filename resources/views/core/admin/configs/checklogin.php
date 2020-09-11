<?php
function check_login()
{
	if(strlen($_SESSION['admin_id'])==0)
		{
			$host = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra="admin/";
			$_SESSION["admin_id"]="";
			header("Location: http://$host$uri/$extra");
			
		}
}

function officer_check_login()
{
	if(strlen($_SESSION['doc_id'])==0)
		{
			$host = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra="doctor/";
			$_SESSION["doc_id"]="";
			header("Location: http://$host$uri/$extra");
			
		}
}
