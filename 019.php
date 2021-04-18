<?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // "c", "d", "e" を返す


// 配列キーの違いに注意
print_r(array_slice($input, 0, 7));




// 配列の何番目からいくつ取り出すかを指定して取得する
?>