<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<form action="product.php" method="post">
商品検索
<input type="text" name="keyword">
<input type="submit" value="検索">
</form>
<hr>
商品一覧
<?php
echo '<table>';
echo '<th>商品番号</th><th>商品名</th>';
$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 
	'kuma', 'asdf1234');
if (isset($_REQUEST['keyword'])) {
	$sql=$pdo->prepare('select * from product where name like ?');
	$sql->execute(['%'.$_REQUEST['keyword'].'%']);
} else {
	$sql=$pdo->prepare('select * from product');
	$sql->execute([]);
}
foreach ($sql as $row) {
	$id=$row['id'];
	echo '<tr>';
	echo '<td>', $id, '</td>';
	echo '<td>';
	echo '<a href="detail.php?id=', $id, '">', $row['name'], '</a>';
	echo '</td>';
	echo '</tr>';
}
echo '</table>';
?>
<?php require 'css/footer.php'; ?>
