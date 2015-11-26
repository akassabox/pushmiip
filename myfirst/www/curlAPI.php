<?php

if(!empty($_GET['data'])){
$data = $_GET['data'];
$fname = "curlCommand.txt";//generates random name



$file = fopen("upload/" .$fname, 'w');//creates new file
fwrite($file, urldecode($data));
fclose($file);
}

?>
