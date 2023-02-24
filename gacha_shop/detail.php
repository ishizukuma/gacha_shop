<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 
	'kuma', 'asdf1234');
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
	echo '<p><img src="img/', $row['id'], '.jpg" width="400px" height="350px"></p>';
	echo '<p>商品番号：', $row['id'], '</p>';
	echo '<p>商品名：', $row['name'], '</p>';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<input type="hidden" name="name" value="', $row['name'], '">';
}
?>
<?php require 'css/footer.php'; ?>
