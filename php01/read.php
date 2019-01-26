<table border="1">
<?php

// ファイルを変数に格納
$filename = 'data/data.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
//

// whileで行末までループ処理
while (!feof($fp)){
 
  // fgetsでファイルを読み込み、変数に格納
  $txt = fgets($fp);
  $exp = explode(",",$txt);
  
  // ファイルを読み込んだ変数を出力
  echo '<tr>';
  for($i = 0; $i < count($exp);$i++){
    $elem = nl2br($exp[$i]);
		$elem = $elem === "" ?  "&nbsp;" : $elem;
		echo("<td>".$elem."</td>");
  }
  echo '</tr>';
}

// fcloseでファイルを閉じる
fclose($fp);



// $exp = explode(",",$txt);
// for($i =1;$i<count($txt);++$i){
//   echo '<tr>';
//   $array[$i] = $exp[0];
// }

?>