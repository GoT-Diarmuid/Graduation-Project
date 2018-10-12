<?php
include '../class/min_class.php';
session_start();        
session_destroy();

$class= new $main_class;
$class->autolink_index();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

