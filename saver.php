<?php    
	if (isset($_POST['ufile']))
	{
		include('uploadSuperSaver.php');
	}
	else
	{
		include('fileSuperSaver.php');
	}
?>