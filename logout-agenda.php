<?php session_start();
$_SESSION = NULL;
session_destroy();
header("Location: entrar.html");