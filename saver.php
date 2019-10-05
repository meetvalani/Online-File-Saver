<?php    
	if (isset($_POST['exp']))
	{
		$delete_validator=0;
		$val=$_POST['exp'];
		$full_file_name="meet";
		if (isset($_POST['ufile']))
		{
			include('uploadSuperSaver.php');
		}
		else
		{
			include('fileSuperSaver.php');
		}
		#include('expiry.php');
	}
	else
	{
		echo "Expiry date needed.";
	}
?>