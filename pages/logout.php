<?php
session_start();
unset($_SESSION['mytype']);
unset($_SESSION['mytype']);
session_destroy();
header("location:../index.php");
?>