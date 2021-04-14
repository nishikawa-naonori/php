<?php

$ships = array(1, 2, 3, 4, 5);

foreach ($ships as $ship){
    print $ship;
    print "\n";
}


// $ships配列(連想配列？)から先頭のデータをとりだして$shipに受ける
// スコープ内の動作を実行
// 終了後まだデータが残っていたら次のデータにシークして$priceに受ける
// 同様に実行
// これをデータが無くなるまでループする