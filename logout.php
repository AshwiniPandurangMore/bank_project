<?php
session_start();
unset($_SESSION['login_user']);
if(session_destroy())
{
header("Location: login.html");
}
?>