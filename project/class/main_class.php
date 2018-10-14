<?php
namespace App\MyClass;
class main_class {
    function error(){
        echo "<script>window.alert('already have');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/'";
        echo "</script>";
    }

    function success (){
        echo "<script>window.alert('welcome');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/'";
        echo "</script>";
    }

    function db_link() {
         $servername = "localhost";
         $dbusername = "root";
         $dbpassword = "12345zxc";
         $dbname = "project";
        return $db = new \PDO("mysql:dbname=$dbname;host=$servername", $dbusername, $dbpassword);
    }

     function Login_success (){
        echo "<script>window.alert('welcome');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/dashboard'";
        echo "</script>";
    }

    function Login_error(){
        echo "<script>window.alert('username or password error');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/'";
        echo "</script>";
    }

    function create_team_success (){
        echo "<script>window.alert('create_team_success');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/dashboard'";
        echo "</script>";
    }

    function join_success (){
        echo "<script>window.alert('join_success');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/dashboard'";
        echo "</script>";
    }

    function logout (){
        echo "<script>window.alert('see you next time!');</script>";
        echo "<script type='text/javascript'>";
        echo "window.location.href='/'";
        echo "</script>";
    }

}
