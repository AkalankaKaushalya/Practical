<?php include 'config.php'; ?>
<?php session_destroy();  ?>
<?php header("Location:".$base_url."login.php"); ?>