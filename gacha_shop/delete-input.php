<?php session_start(); ?>
<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<table>
<tr><th>ID</th><th>名前</th></tr>
<?php
if (isset($_SESSION['customer']['name'])) {
	$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 'kuma', 'asdf1234');
	$id = $_SESSION['customer']['id'];
	$stmt = $pdo->prepare('SELECT * FROM customer WHERE id = :id');
	$stmt->execute(array(':id' => $id));
	$row = $stmt->fetch();
    if ($row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>';
        echo '<a href="delete-output.php?id=', $row['id'], '">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
} else {
    echo 'ログインしていません。';
}
?>
</table>
<?php require 'css/footer.php'; ?>
