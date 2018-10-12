<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="login">
            <form action="PHP/verification.php" method="POST">
			<label>username: <input type="text" name="user" required></label><br>
                        <label>password: <input type="password" name="psw" required></label><br>
                        <select name="per">
                            <option value="1">Student</option>
                            <option value="2">Teacher</option>
                        </select>
			<input type="submit" value="OK">
		</form>
	</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
