<?php
include '../class/main_class.php';
session_start();

$main_class= new main_class();

$group_id =$_POST["g_id"];
$group_name =$_POST["g_name"];

$db= $main_class->db_link();
$result_group=$db->query("select id from group");

$check_group = FALSE;
 foreach ($result_group as $value) {                                                 
            if($group_id===$value["id"]){
                $check_group=TRUE;                                              
            } 
            }
            
 if($group_id===TRUE){
     $main_class->error();
        } else {           
            $db->query("insert into group values('$group_id','$group_name')");
            //$db->query("insert into group values('$group_id','$group_name')");
           // $main_class->success();
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

