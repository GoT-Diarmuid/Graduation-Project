<?php 
include '../class/main_class.php';

$main_class= new main_class();

$name = $_POST["name"];	
$password = $_POST["psw"];	
$permission = $_POST["per"];
$username=$_POST["user"];
$email=$_POST["email"];

$check_s = FALSE;
$check_t = FALSE;

$db=$main_class->db_link();
$result_student=$db-> query("SELECT username FROM student");
$result_teacher=$db-> query("SELECT username FROM teacher");

switch ($permission) {
    case "1":

        foreach ($result_student as $value) {                   
        if($username==$value["username"]){                      
            $check_s=TRUE;                                      
            }                                         
        }       
        
        if($check_s==TRUE){                
        $main_class->error();          
        }else       
            {                              
            $db-> query("insert into student(username,password,name,email) values('$username','$password','$name','$email')");          
            $main_class->success();          
            }    
        break;
        case "2":           
            foreach ($result_teacher as $value) {                      
            if($username==$value["username"]){                         
                $check_t=TRUE;                     
                }                                             
            }                     
           if ($check_t==TRUE) {
        $main_class->error();           
           }else{
             $db-> query("insert into teacher(username,password,name,email,press) values('$username','$password','$name','$email')");
             $main_class->success();
            }       
        break;
}                                      
            ?>
        
 
	
        
         
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

