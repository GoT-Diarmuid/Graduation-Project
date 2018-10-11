<?php
use App\MyClass\main_class;
$main_class= new main_class();

$team_id =date("YmdHis");
$project_name =$_POST["pj_name"];
$teacher_id =$_POST["teacher_id"];
$student_id =$_POST["student_id"];

$year = date('Y');

$db= $main_class->db_link();
$result_team=$db->query("select * from team");
$result_s=$db-> query("SELECT * FROM student where team_id is NULL");

$check_team = FALSE;

 foreach ($result_team as $value) {
            if($team_id===$value["team_id"]){
                $check_team=TRUE;
            }
        }

 if($check_team===TRUE){
     $main_class->error();
        } else {
            $db->query("INSERT INTO `team`(`team_id`, `project_name`,`year` ) VALUES ('$team_id','$project_name','$year')");
            $db->query("INSERT INTO project (team_id) VALUES('$team_id')");
            $main_class->create_team_success();
}

foreach ($student_id as $value) {
    echo $value;
    $db->query("UPDATE student SET team_id='$team_id' WHERE username='$value'");
    $db->query("UPDATE team SET teacher_username='$teacher_id' WHERE team_id='$team_id'");
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

