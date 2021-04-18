<?php
const LOOP = 10000;

function bench($name, callable $fn) {
    echo "$name\t";
    $start = microtime(true);
    for ($i=0; $i<LOOP; ++$i) {
        $fn();
    }
    echo microtime(true) - $start, PHP_EOL;
}

define('example', 'http://' . file_get_contents('/dev/urandom', false, null, 0, '204800'));
//define('example', file_get_contents('/dev/urandom', false, null, 0, '204800'));
//define('example', file_get_contents('/dev/urandom', false, null, 0, '204800') . 'http');


// 先頭マッチの書き方色々
bench('strpos    ', function(){
    0 === strpos(example, 'http');
});

bench('substr    ', function(){
    'http' === substr(example, 0, 4);
});

bench('preg_match', function(){
    preg_match('/^http/', example);
});

bench('substr_compare', function(){
    0 === substr_compare(example, 'http', 0, 4);
});

bench('strncmp      ', function(){
    0 === strncmp(example, 'http', 4);
});
