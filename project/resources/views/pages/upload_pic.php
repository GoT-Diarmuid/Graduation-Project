<?php
	if(mkdir("../files/gp1", 0700)){
		echo "成功建立資料夾"."<br>";
	}
	else{
		echo "建立資料夾失敗"."<br>";
	}
	$total = count($_FILES['upload']['name']);

	for( $i=0 ; $i < $total ; $i++ ) 
	{
	//Get the temp file path
	$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
	
		//Make sure we have a file path
		if ($tmpFilePath != "")
		{
		//Setup our new file path
		$newFilePath = "../files/gp1/pic/" . $_FILES['upload']['name'][$i];
			//Upload the file into the temp dir
			if(move_uploaded_file($tmpFilePath, $newFilePath)) 
			{
				//Handle other code here
			}
		}
	}
	
	/*if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 5000000))
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
			if (file_exists("../files/gp1/pic/" . $_FILES["file"]["name"]))
			{
				unlink("../files/gp1/pic/" . $_FILES["file"]["name"]);
				echo $_FILES["file"]["name"] . " already exists. ";
				move_uploaded_file($_FILES["file"]["tmp_name"],"../files/gp1/pic/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "pic" . $_FILES["file"]["name"];
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"../files/gp1/pic/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "pic" . $_FILES["file"]["name"];
			}
		}
	}
	else
	{
		echo "Invalid file";
	}  */
?>