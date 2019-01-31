<?php
//1. POSTデータ取得

$name = $_POST["name"];
$url = $_POST["url"];
$naiyou = $_POST["naiyou"];


//2. DB接続します（定番　使いまわし）
include("funcs.php");
$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,url,naiyou,indate) VALUES(:name,:url,:naiyou,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（文字列の場合は左記入力、数値の場合 PDO::PARAM_INT)セキュリティ上必要
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)※idの場合はINTを使う
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後（定番　使いまわし）
if($status==false){
  sqlError($stmt);//関数の実行
}else{


//５．index.phpへリダイレクト（定番　使いまわし）
  redirect("index.php");
}
?>
