<?php
//削除該当ID
$id = $_GET["id"];

//DB接続
include "funcs.php";
$pdo = db_con();

//DB削除SQL作成
$sql = "DELETE FROM gs_user_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

//登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．一覧画面(select.php)へ飛ぶ※削除されている
    header("Location: select_user.php");
    exit;
}

?>
