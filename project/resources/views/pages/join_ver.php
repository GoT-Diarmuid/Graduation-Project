<?php

use App\MyClass\main_class;
$main_class= new main_class();
$db= $main_class->db_link();

$student_id = $_POST["student_id"];
$team_id = $_POST["team_id"];
$teacher_id = $_POST["teacher_id"];

foreach ($student_id as $value) {
    echo $value;
    $db->query("UPDATE student SET team_id='$team_id' WHERE username='$value'");
    $db->query("UPDATE team SET teacher_username='$teacher_id' WHERE team_id='$team_id'");
}
$main_class->join_success();
