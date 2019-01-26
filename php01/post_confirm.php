<?php
include("funcs.php"); //外部ファイルを読み込むだけの指示(ファイルの中身をそのまま)
$name = $_POST["name"]; //postは送信ボタンをクリックしても入力情報がURLに表示されないgetは表示されてしまう
$mail = $_POST["mail"];

?>

<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>

<!-- funcs.phpで作成した関数を使用 -->
<!--  クロスサイトスクリプティングを防ぐためにechoにh関数を導入-->
<!-- クロスサイトスクリプティングはアンケートにコードを入力して、受け取った側で動作が起こること（例alertやほかのサイトへ飛ばす） -->
お名前：<?php echo h($name);?> 
EMAIL：<?php echo h($mail);?>
<!-- hの関数を利用するときは「echo」するところのみに埋め込む -->

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>