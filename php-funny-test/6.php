<?php
//打印0到300之间不含4的自然数
for ($x = 0; $x < 2; $x++) {
    for ($y = 0; $y <= 9; $y++) {
        for ($z = 0; $z <= 9; $z++) {
            if ($y != 4 && $z != 4) {
                echo 100 * $x + 10 * $y + $z . '<br/>';
            }
        }
    }
}