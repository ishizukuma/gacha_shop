<?php session_start(); ?>
<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=gacha;charset=utf8', 'kuma', 'asdf1234');
$gacha=$_SESSION['rand'];
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$gacha]);
if($gacha<=10) {
    foreach ($sql as $row) {
        echo '<p><img src="img/', $row['id'], '.jpg" width="400px" height="300px"></p>';
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '</tr>';
        echo "\n";
    }
}else{
    echo '<h2>ハズレ💀</h2>';
}
?>
<?php require 'css/footer.php'; ?>
