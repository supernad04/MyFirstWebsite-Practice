<?php // opening ng php kahit hindi mo na siya iclose dito

$dbhost = "localhost"; //pangalan ng host
$dbuser = "root"; //username ng database
$dbpass = "";  //database password, pag walang password leave it "";
$dbname = "login_sample_db"; //pangalan ng database

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
