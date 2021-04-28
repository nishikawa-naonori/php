<?php
$name = trim(fgets(STDIN));
echo "Hello " . $name ."\n";

$number = trim(fgets(STDIN));
echo $number * 10;



//  関数  trim     文字列の先頭や末尾にある空白や改行を削除する
//  関数  fgets    指定した場所からデータを一行受け取る
//  STDIN （スタンダードイン） 標準入力  入力タブってこと

// 出力結果
// Hello 入力した文字列

?>