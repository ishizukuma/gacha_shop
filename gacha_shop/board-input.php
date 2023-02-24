<?php require 'css/header.php'; ?>
<?php require 'menu.php'; ?>
<p>メッセージを入力してください。</p>
<form action="board-output.php" method="post">
<input type="text" name="message">
<input type="submit" value="投稿">
</form>
<?php require 'css/footer.php'; ?>
