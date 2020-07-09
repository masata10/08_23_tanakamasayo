<?php
// session変数を定義して値を入れよう
session_start();
$_SESSION['number'] = 100;
var_dump($_SESSION['number']);
// echo $_SESSION['num']; 
// 
