<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
書き込みを行います。<br>
This is a Pen. とdata.txt に書き込みます。
<?php

$name = $_POST["name"];
$mail = $_POST["mail"];

// post.phpの送信先をwrite.phpにしている⇒post.phpから入力　write.phpでdata.textに登録している

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\r\n"); //書き込み　※「.」は「+」と同じ意味 「\r\n」は改行（<br>はブラウザのみ反応.txt等は反応しない）
fclose($file);
//$exp = explode(",",$text);


// グラフ作るときの参考
// whileの前に i = 0

//whileの中に

// const i = [<?php echo $array ?+>]; ※+は削除！
// $array[$] = $exp[0];
//$i++;

?>


<ul>
<li><a href="#">戻る</a></li>
</ul>
</body>
</html>