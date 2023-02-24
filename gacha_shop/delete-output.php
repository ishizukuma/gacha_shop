<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 
	'kuma', 'asdf1234');
$sql=$pdo->prepare('delete from customer where id=?');
if ($sql->execute([$_REQUEST['id']])) {
	echo '退会しました。';
} else {
	echo '退会に失敗しました。';
}
?>
<?php require 'css/footer.php'; ?>
