<?php 
if (!isset($_SESSION['email']))
{
    header("Location: ".$base_url."login.php");
}
?>