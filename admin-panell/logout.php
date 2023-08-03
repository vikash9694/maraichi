

<?php
include("conf/config.php");
session_start();
session_unset();
session_destroy();
header("Location:http://localhost/maraichi/admin-panell/login.php");
?>