<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="PHP/upload_report.php" method="post"enctype="multipart/form-data">
			
			<label for="file">Group name : </label>
			<br/>
			<label for="file">Project report (pdf only): </label>
			<input type="file" name="file" id="report"/> 
			<br/>
			<input type="submit" name="submit" value="Submit"/>
		</form>
	</body>
</html>