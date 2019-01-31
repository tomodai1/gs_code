<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_con(){
    try {
        $pdo = new PDO('mysql:dbname=kadai_07;charset=utf8;host=localhost','root',''); //本番はlocalhostではなく、sakura。idとpwも送付される
        return $pdo;
    } catch (PDOException $e) {
        exit('DB-Connection-Error:'.$e->getMessage());//本番はエラーメッセージを見せない
      }
}


function sqlError($stmt){ //関数化（）中は引数？外に出すものがあるとき入力
    $error = $stmt->errorInfo();
    exit("ErrorSQL".$error[2]);
}


function redirect($page){
    header("Location: ".$page);
    exit;
}
