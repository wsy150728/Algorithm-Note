<?php
//输出1~100(不包含100)之间的所有的偶数，5个一行输出
for ($i = 1, $j = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . ' ';
        $j++;
        if ($j % 5 == 0) {
            echo '<br/>';
        }
    }
}