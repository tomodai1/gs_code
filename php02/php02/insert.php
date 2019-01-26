<?php
//1. POSTデータ取得
// $name = filter_input( INPUT_GET,"name" ); //こういうのもあるよ
// $email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

$name = $_POST["name"];
$email = $_POST["email"];
$naiyou = $_POST["naiyou"];


//2. DB接続します（定番　使いまわし）
include("funcs.php");
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES(:name,:email,:naiyou,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（文字列の場合は左記入力、数値の場合 PDO::PARAM_INT)セキュリティ上必要
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)※idの場合はINTを使う
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後（定番　使いまわし）
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  // function sqlError($stmt){ //関数化（）中は引数？外に出すものがあるとき入力
    // $error = $stmt->errorInfo();
    // exit("ErrorSQL".$error[2]);
  // }
  sqlError($stmt);//関数の実行
}else{


//５．index.phpへリダイレクト（定番　使いまわし）
//エラーの時は飛ぶ前にexit;で原因究明する
  // header("Location: index.php"); //ファイル名の後ろ半角スペース必要
  // exit;
  // }
  redirect("index.php");
}
?>
