<?php

// リンクからID取得
$id = $_GET["id"];

//--------------------------------------------------
// 以下、select.phpをコピーしてきました。
// -------------------------------------------------

include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt ->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    $row = $stmt->fetch();
}


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>User更新画面</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_user.php">User一覧へ</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BookMark</legend>
     <label>名前：<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
     <label>ID：<input type="text" name="lid" value="<?php echo $row["lid"]; ?>"></label><br>
     <label>PW：<input type="text" name="lpw" value="<?php echo $row["lpw"]; ?>"></label><br>
     <label>ID：<input type="number" name="kanri_flg" value="<?php echo $row["kanri_flg"]; ?>"></label><br>
     <label>ID：<input type="number" name="life_flg" value="<?php echo $row["life_flg"]; ?>"></label><br>
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
