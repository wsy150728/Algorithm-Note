<?php
//输出100以内（不含100）能被3整除的且个位数是6的所有整数
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 10 == 6) {
        echo $i . '<br/>';
    }
}
