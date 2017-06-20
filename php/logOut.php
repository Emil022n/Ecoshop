<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../sider/index.php"); // Redirecting To Home Page
}
?>