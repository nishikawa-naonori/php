<?php
// 分 min
echo date("Y-m-d H:i:s") ." 現在\n";
echo date("Y-m-d H:i:s", strtotime("-3 min")) ." 3分前\n";
echo date("Y-m-d H:i:s", strtotime("-2 min")) ." 2分前\n";
echo date("Y-m-d H:i:s", strtotime("-1 min")) ." 1分前\n";
echo date("Y-m-d H:i:s", strtotime("1 min")) ." 1分後\n";
echo date("Y-m-d H:i:s", strtotime("2 min")) ." 2分後\n";
echo date("Y-m-d H:i:s", strtotime("3 min")) ." 3分後\n\n";
?>
