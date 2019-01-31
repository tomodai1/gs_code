<?php
// 更新ファイル

//1.POSTでParamを取得（新規post時はID自動だったが、更新時は既存振り分けられたものを送信する必要あり）
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];
$id = $_POST["id"];

//2. DB接続します
include "funcs.php";
$pdo = db_con();

//3.　データ更新SQL作成
$sql = "UPDATE gs_user_table SET name=:name,lid=:lid,lpw=:lpw,kanri_flg=:kanri_flg,life_flg=:life_flg WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);//Integer（文字列の場合は左記入力、数値の場合 PDO::PARAM_INT)セキュリティ上必要
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);//Integer（数値の場合 PDO::PARAM_INT)※idの場合はINTを使う
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);//Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select_user.php"); //リダイレクトの「:」の後は半角スペース必要
    exit;
}




?>
