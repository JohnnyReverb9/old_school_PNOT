<!DOCTYPE html>
<html lang="en">
<head>
  <title>PNOT Ltd. | Technical Solutions</title>
  <link rel="stylesheet" href="/style/main.css">
</head>
<body>
<a href="/index.php">
    <img src="/assets/logo_pixelated.jpeg" alt="logo" height="300" width="auto">
</a>
<?php

if (isset($_GET["path"]))
{
	echo $_GET["path"];
}

?>
<hr>