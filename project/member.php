<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Member</title>
    </head>
    <body>
        <a href="create_group.php"><button type="button">create group</button></a>
        <a href="PHP/logout.php"><button type="button">Logout</button></a>
        <a href="search_group.php"><button type="button">search group</button></a>
        <a href="submit_project_report.php"><button type="button">submit_project_report</button></a>
        <a href="submit_project_pictures.php"><button type="button">submit_project_pictures</button></a>
        <a href="score.php"><button type="button">score</button></a>
        <?php
        session_start();
        echo "<br>Hello ".$_SESSION["username"];
        // put your code here
     
        ?>
    </body>
</html>
