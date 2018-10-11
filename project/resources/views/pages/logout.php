<?php
use App\MyClass\main_class;

session_start();
session_destroy();
$main_class= new main_class();
$main_class->logout();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

