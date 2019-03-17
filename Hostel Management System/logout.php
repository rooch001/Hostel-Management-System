<?php
session_start()	;
error_reporting(1);
session_unset();
session_destroy();
header('location:index.php');
?>
