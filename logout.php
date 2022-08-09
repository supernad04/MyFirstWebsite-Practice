<?php

session_start(); //simula ng session

//if statement para logout session pag gusto ng mag logout ni user
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;

//babalik siya sa login page pag naglogout si user