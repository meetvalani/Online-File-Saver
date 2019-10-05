<?php
    $target_file=$_POST["file_name"];
	if($_POST["file_name"]!="")
	{
		$okName=1;
		$saveName=1;
		$msg="File saved successfully....";
	}
	else
	{
		$okName=0;
		$uploadOk=0;
		$msg="File Name cannot be empty please enter some valid name.";
	}
	if($okName==1)
	{
		$uploadOk=1;
		$delete_validator=1;
		$msg= "The file '". $target_file . "' has been uploaded at : '".$_SERVER['HTTP_HOST']."/datasaver/".$target_file;
		$target_file=$_POST["file_name"];
		$full_file_name=$target_file;
		if (file_exists($target_file) || file_exists($target_file.".txt")) {
			$msg= "Sorry, file already exists.<br> Try some different name...):";
			$uploadOk = 0;
			$delete_validator=0;
			$saveName=0;
		}
		$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if($FileType == "php" || $FileType == "html") {
			$msg="Sorry, .html and .php files are not allowed";
			$uploadOk = 0;
			$delete_validator=0;
		}
		if($FileType==""){
			$msg=$msg.".txt'";
			$target_file=$target_file.".txt";
			$full_file_name=$target_file;
			#method of txt must be uploaded
		}
		else{ $msg=$msg."'"; }
		if($uploadOk==1)
		{	
	    	$file=fopen($target_file,"a");
	    	fwrite($file,$_POST["content"]);
			fclose($file);
	    	$file=fopen("./tmp/".$val."/".$target_file,"a");
	    	fwrite($file,"");
			fclose($file);			
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
            if($uploadOk==1)
            {   ?>
                <title>File Saved</title>
            <?php }
            else
            {   ?>
                <title>Failed Saving</title>
            <?php }
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
	<body style="background-color:orange">
		<div align="center">
			<br><br><br><br>
			<h1><?php echo $msg;?></h1>
			<br><br>
			<?php
				if($okName==0 || $saveName==0)
				{	?>
				<div align="center">
					<form method="POST" action="saver.php">
						<div align="center"><input type="text" name="file_name"></div>
						<div><input type="hidden" name="content" value='<?php echo $_POST["content"];?>'/></div>
						<input type="hidden" name="exp" value='<?php echo $_POST["exp"];?>'/>
						<br>
						<div align="center"><input type="submit" class="btn btn-primary" name="file" value="Save With New Name"></div>
					</form>
					<form method="POST" action="index.html">
						<br>
						<input type="submit" class="btn btn-danger" name="Go Back" value="Cancel">
					</form>
				</div>
				<?php }
				else
					{
			?>
				<form method="POST" action="index.html	">
   					<input type="submit" class="btn btn-success" name="Go Back" value="Go Back">
				</form>
					<?php } ?>
		</div>
   		<!-- jQuery library -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</body>
</html>