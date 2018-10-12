<?php
	if(mkdir("../files/gp1", 0700)){
		echo "成功建立資料夾"."<br>";
	}
	else{
		echo "建立資料夾失敗"."<br>";
	}
	
	if(($_FILES["file"]["type"] == "application/pdf")
	&& ($_FILES["file"]["size"] < 50000000))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br/>";
			echo "Type: " . $_FILES["file"]["type"] . "<br/>";
			echo "Size: " . ($_FILES["file"]["size"] / 1048576) . " Mb<br/>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br/>";
			if (file_exists("../files/gp1/" . $_FILES["file"]["name"]))
			{
				unlink("../files/gp1/" . $_FILES["file"]["name"]);
				echo $_FILES["file"]["name"] . " already exists. ";
				move_uploaded_file($_FILES["file"]["tmp_name"],"../files/gp1/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "gp1" . $_FILES["file"]["name"];
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"../files/gp1/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "gp1" . $_FILES["file"]["name"];
			}
		}
	}
	else
	{
		echo "Invalid file";
	}  
?>