<?php session_start(); ?>
<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if(isset($_REQUEST['price'])){
switch ($_REQUEST['price']) {
case '100000':
	echo '<img src="image/gacha100000.jpg" width="400px" height="350px">';
	echo '<form action="gacha-input100000.php" method="post">';
	echo '<input type="submit" name="push" value="投入">';
	echo '</form>';
	break;
case '50000':
	echo '<img src="image/gacha50000.jpg" width="400px" height="350px">';
	echo '<form action="gacha-input50000.php" method="post">';
	echo '<input type="submit" name="push" value="投入">';
	echo '</form>';
	break;
case '10000':
	echo '<img src="image/gacha10000.jpg" width="400px" height="350px">';
	echo '<form action="gacha-input10000.php" method="post">';
	echo '<input type="submit" name="push" value="投入">';
	echo '</form>';
	break;
case '1000':
	echo '<img src="image/gacha1000.jpg" width="400px" height="350px">';
	echo '<form action="gacha-input1000.php" method="post">';
	echo '<input type="submit" name="push" value="投入">';
	echo '</form>';
	break;
case '100':
	echo '<img src="image/gacha100.jpg" width="400px" height="350px">';
	echo '<form action="gacha-input100.php" method="post">';
	echo '<input type="submit" name="push" value="投入">';
	echo '</form>';
	break;
}}else{
	echo '金額を選択してください。';
	echo '<a href="gacha-input.php">戻る</a>';
}
?>
<?php require 'css/footer.php'; ?>
