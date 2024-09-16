<?php

session_start();
$_SESSION = array();
session_destroy();
header("location:/Pages/Login/login.html");