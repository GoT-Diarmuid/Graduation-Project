<?php

class main_class {
    function error(){
        echo "<script>window.alert('already have');</script>";                    
        $url = "../index.php";                              
        echo "<script type='text/javascript'>";                             
        echo "window.location.href='$url'";                             
        echo "</script>";        
    }
    
    function success (){       
        echo "<script>window.alert('welcome');</script>";                       
        $url = "../index.php";                                   
        echo "<script type='text/javascript'>";                                   
        echo "window.location.href='$url'";                                 
        echo "</script>"; 
    }
    
    function db_link() { 
         $servername = "localhost";	   
         $dbusername = "root";	
         $dbpassword = "12345zxc";	 
         $dbname = "project";   
        return $db = new PDO("mysql:dbname=$dbname;host=$servername", $dbusername, $dbpassword);
    }
    
     function Login_success (){       
        echo "<script>window.alert('welcome');</script>";                       
        $url = "../member.php";                                   
        echo "<script type='text/javascript'>";                                   
        echo "window.location.href='$url'";                                 
        echo "</script>"; 
    }
    
    function Login_error(){
        echo "<script>window.alert('username or password error');</script>";                    
        $url = "../login.php";                              
        echo "<script type='text/javascript'>";                             
        echo "window.location.href='$url'";                             
        echo "</script>";        
    }
    
    
    function autolink_index() {
        $url = "../login.php";                              
        echo "<script type='text/javascript'>";                             
        echo "window.location.href='$url'";                             
        echo "</script>";
    }
	
	function create_new_file(){
		
	}
}