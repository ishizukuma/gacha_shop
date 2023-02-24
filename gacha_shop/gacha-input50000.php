<?php session_start(); ?>
<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<img src="image/gacha50000.jpg" width="400px" height="350px">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 'kuma', 'asdf1234');
	echo '<form action="gacha-output.php" method="post">';
	$_SESSION['rand']= rand(1,20);
	echo '<input type="submit" name="turn" value="回す">';
	echo '</form>';
?>
<?php require 'css/footer.php'; ?>
