<?php
function h($s){ //関数(ここではh)を作成　いちいち入力するのを省くため
    $h = htmlspecialchars($s,ENT_QUOTES);
    return $h; // echo 使うときはreturn不要
    //上の2行は1行で　return $h = htmlspecialchars($s,ENT_QUOTES);と同様
}




?>