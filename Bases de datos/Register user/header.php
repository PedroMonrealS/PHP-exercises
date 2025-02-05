<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_title; ?></title>
<?php
$filename = explode('/',$_SERVER['PHP_SELF'])[count(explode('/',$_SERVER['PHP_SELF']))-1];
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header"><a class="navbar-brand" href="#">Your Website</a></div>
		<div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="header.php" <?php if($filename == 'header.php') echo 'class="active"';?>>Home</a></li>
			<li><a href="register.php" <?php if($filename == 'register.php') echo 'class="active"';?>>Register</a></li>
			<li><a href="view_users.php" <?php if($filename == 'view_users.php') echo 'class="active"';?>>View Users</a></li>
			<li><a href="password.php" <?php if($filename == 'password.php') echo 'class="active"';?>>Change Password</a></li>
		</ul>
		</div>
	</div>
</nav>
<div class="container">
<?php
echo $filename;

?>
<!-- Script 9.1 - header.html -->