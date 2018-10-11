<?php
use App\MyClass\main_class;

session_start();
$_SESSION["username"]=$username = $_POST["user"];
$password = $_POST["psw"];
$_SESSION["per"]=$permission=$_POST["per"];

$main_class= new main_class();
$check_s = FALSE;
$check_t = FALSE;

$db=$main_class->db_link();
$result_student=$db-> query("SELECT * FROM student");
$result_teacher=$db-> query("SELECT * FROM teacher");
$result_admin=$db-> query("SELECT * FROM administrator");



switch ($permission) {
    case "1":
        foreach ($result_student as $value) {
        if(($username===$value["username"] and $password===$value["password"])){
            $check_s=TRUE;
            }
        }

        if($check_s==TRUE){

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
            $main_class->Login_success();

           }else{

            $main_class->Login_error();

            }
        break;

    case "3":
        foreach ($result_admin as $value) {
            if(($username===$value["username"] and $password===$value["password"])){

                $check_t=TRUE;
                }
            }
           if ($check_t==TRUE) {
            $main_class->Login_success();
           }else{
            $main_class->Login_error();
            }
        break;
           }


        ?>
