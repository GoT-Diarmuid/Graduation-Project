<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="PHP/upload_pic.php" method="post"enctype="multipart/form-data">
			
			<label for="file">Group name : </label>
			<br/>
			<label for="file">Project pictures (jpeg / pjpeg): </label>
			<input name="upload[]" type="file" multiple="multiple" />
			<br/>
			<input type="submit" name="submit" value="Submit"/>
		</form>
	</body>
</html>
