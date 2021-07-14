
<?php
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "uploads/".$filename;

move_uploaded_file($tempname,$folder);
echo "<img src ='$folder' height = '100' width = '100' >";

?>
