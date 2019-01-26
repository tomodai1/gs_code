<?php

$name = $_GET["name"]; //get.phpから送信された情報を受信
$mail = $_GET["mail"];
if($name == ""){
    $name ="未入力";
}

?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>

<!--上で受信した情報をhtml上に表示する  -->
お名前：<?php echo $name; ?> 
Mail：<?php echo $mail; ?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>