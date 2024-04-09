<?php session_start(); ?>
<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
    $link = "https://";
}
else
{ 
	$link = "http://"; 
}
      
$link .= $_SERVER['HTTP_HOST'];
if ($_SERVER['HTTP_HOST'] == "localhost") 
{
	$link .= "/Projects/Practical/";
    $con = new mysqli("localhost" , "root" , "" ,"practical");
}
else
{
    $con = new mysqli("localhost" , "practical" , "" ,"practical");
    $link .= "/Berms/";
}

if ($con->connect_error)
{
    die("Connection failed: " . $con->connect_error);
}
$base_url = $link;

$current_file = basename($_SERVER['PHP_SELF']);
date_default_timezone_set('Asia/Colombo');
?>


