<?php
//配列の練習

// $array = array("A","B","C","D");
// var_dump($array);
// *配列の練習

// 文字列の変換
//$str_base = "PHP5_PHP6_PHP7_PHP5";
//$s = str_replace("PHP5","PHP5.5",$str_base);//分かりやすくするため一度関数$sに置き換え
//echo $s;
// *文字列の変換

//文字列を配列に変換（explodeを使うと配列にできる）
$s = "A,B,C,D,E,F";
$str = explode(",",$s); //第1=ターゲット文字, 第2=元の文字列
var_dump($str);
//*文字列を配列に変換


?>