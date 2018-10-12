<?php
include '../class/main_class.php';
       
$username = $_POST["user"];	
$password = $_POST["psw"];
$permission=$_POST["per"];
$main_class= new main_class();      
$check_s = FALSE;
$check_t = FALSE;

$db=$main_class->db_link();
$result_student=$db-> query("SELECT * FROM student");
$result_teacher=$db-> query("SELECT * FROM teacher");

switch ($permission) {
    case "1":

        foreach ($result_student as $value) { 
        if(($username===$value["username"] and $password===$value["password"])){                      
            $check_s=TRUE;                                      
            }                                         
        }       
        
        if($check_s==TRUE){
            $result=$db->query("SELECT name FROM student where username =.$username.");
            foreach ($result as $name){
                echo $name["username"];
                 $_SESSION['name'] =$name[username];
            }
        $main_class->Login_success();          
        }else       
            {                                   
            $main_class->Login_error();          
            }    
        break;
        case "2":           
            foreach ($result_teacher as $value) {                      
            if(($username===$value["username"] and $password===$value["password"])){                         
                $check_t=TRUE;                     
                }                                             
            }                     
           if ($check_t==TRUE) {
                $name=$db->query("SELECT name FROM teacher where username =.$username.");
        $main_class->Login_success();           
           }else{
             $main_class->Login_error();
            }       
        break;      
           } 
           session_start();
           $_SESSION['name'] =$name;
           $_SESSION['username'] =$username;
           $_SESSION['permission'] =$permission;
        ?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

