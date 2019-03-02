<?php
// 更新ファイル
session_start();

include "funcs.php";
sessChk();

//1.POSTでParamを取得（新規post時はID自動だったが、更新時は既存振り分けられたものを送信する必要あり）
$name = filter_input( INPUT_POST, "name" );
$url = filter_input( INPUT_POST, "url" );
$naiyou = filter_input( INPUT_POST, "naiyou" );
$id = filter_input( INPUT_POST, "id" );

//2. DB接続します
$pdo = db_con();

//3.　データ更新SQL作成
$sql = "UPDATE gs_bm_table SET name=:name,url=:url,naiyou=:naiyou WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);//Integer（文字列の場合は左記入力、数値の場合 PDO::PARAM_INT)セキュリティ上必要
$stmt->bindValue(':url', $url, PDO::PARAM_STR);//Integer（数値の場合 PDO::PARAM_INT)※idの場合はINTを使う
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select.php"); //リダイレクトの「:」の後は半角スペース必要
    exit;
}




?>
