<?php

$ct=0;
$ct2=0;
$count=1;
while ($count)
{
    $files = glob('./tmp/minute/*');
    $timer=60;
    foreach($files as $file) {
        $ct+=1;
        if ((time() - filectime($file)) > $timer) {
            $main_file = substr($file,13,strlen($file));
            unlink($main_file);
            unlink($file); $ct2+=1; }
    }

    $files = glob('./tmp/week/*');
    $timer=604800;
    foreach($files as $file) {
        $ct+=1;
        if ((time() - filectime($file)) > $timer) { 
            $main_file = substr($file,11,strlen($file));
            unlink($main_file);
            unlink($file); $ct2+=1; 
        }
    }

    $files = glob('./tmp/month/*');
    $timer=2592000;
    foreach($files as $file) {
        $ct+=1;
        if ((time() - filectime($file)) > $timer) { 
            $main_file = substr($file,12,strlen($file));
            unlink($main_file);
            unlink($file); $ct2+=1; }
    }

    $files = glob('./tmp/year/*');
    $timer=31104000;
    foreach($files as $file) {
        $ct+=1;
        if ((time() - filectime($file)) > $timer) { 
            $main_file = substr($file,11,strlen($file));
            unlink($main_file);
            unlink($file); $ct2+=1; }
    }
    $count-=1;
}
echo "Total Files: ".$ct;
echo "<br>";
echo "Deleted Files: ".$ct2;
/*
    if ($delete_validator==1)
    {
        echo $full_file_name;
    }
*/
?>
