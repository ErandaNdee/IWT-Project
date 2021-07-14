Next, create an HTML form that allow users to choose the image file they want to upload:
<!DOCTYPE html>
<html>
<body>

<form action="submitupload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="uploadfile" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	

</form>

</body>
</html>
