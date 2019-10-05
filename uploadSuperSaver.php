<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($target_file) || file_exists($target_file.".txt")) {
    $msg= "Sorry, file already exists.<br> Try after renaming the file... ):";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 214748364) {
    $msg="Sorry, your file is too large. Max limit is 210 M.B";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType == "php" || $FileType == "html") {
    $msg="Sorry, .html and .php files are not allowed";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //$msg="Sorry, your file was not uploaded due to some unknown error.... ):";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $delete_validator=1;
        $msg= "The file '". $target_file . "' has been uploaded at : '".$_SERVER['HTTP_HOST']."/datasaver/".$target_file."'";
        $file=fopen("./tmp/".$val."/".$target_file,"a");
        fwrite($file,"");
        fclose($file);
        $full_file_name=$target_file;
    } else {
        $uploadOk=0;
        $msg= "Sorry, there was an error uploading your file.";
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
		<br><br><br><br>
		<div align="center" class="">
			<h1><?php echo $msg;?></h1>
			<br><br>
			<form method="POST" action="index.html">
   				<input type="submit" class="btn btn-primary" name="Go Back" value="Go Back">
			</form>
        </div>
        <script>
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        </script>
	</body>
</html>