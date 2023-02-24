<?php session_start(); ?>
<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 'kuma', 'asdf1234');
if (!isset($_SESSION['customer'])) {
	echo 'ガチャを回すにはログインしてください。';
} else {
	echo 'ガチャを回せます。金額を選択してください。<br>金額が高いほど当たる確率がUPします！';
}
?>
<div class="price">
<form action="gacha-price.php" method="post">
<label><input type="radio" name="price" value="100">100</label><br>
<label><input type="radio" name="price" value="1000">1000</label><br>
<label><input type="radio" name="price" value="10000">10000</label><br>
<label><input type="radio" name="price" value="50000">50000</label><br>
<label><input type="radio" name="price" value="100000">100000</label><br>
<input type="submit" value="確定">
</form>
</div>
<?php require 'css/footer.php'; ?>
