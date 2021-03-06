<?php
//1. POSTデータ取得
session_start();

include("funcs.php");
sessChk();

$name = filter_input( INPUT_POST, "name" );
$lid = filter_input( INPUT_POST, "lid" );
$lpw = filter_input( INPUT_POST, "lpw" );
$kanri_flg = filter_input( INPUT_POST, "kanri_flg" );
$life_flg = password_hash($lpw, PASSWORD_DEFAULT);


//2. DB接続します（定番　使いまわし）

$pdo = db_con();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(name,lid,lpw,kanri_flg,life_flg) VALUES(:name,:lid,:lpw,:kanri_flg,:life_flg)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);//Integer（文字列の場合は左記入力、数値の場合 PDO::PARAM_INT)セキュリティ上必要
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);//Integer（数値の場合 PDO::PARAM_INT)※idの場合はINTを使う
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);//Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後（定番　使いまわし）
if($status==false){
  sqlError($stmt);//関数の実行
}else{


//５．index.phpへリダイレクト（定番　使いまわし）
  redirect("index_user.php");
}
?>
