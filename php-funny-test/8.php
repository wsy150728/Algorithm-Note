<?php
//百钱买百鸡问题，公鸡5文一只，母鸡3文一只，小鸡1文三只，100文钱买了100只鸡，问公鸡母鸡小鸡各多少只？（每种至少一只）
for ($g = 0; $g < 20; $g++) {
    for ($m = 0; $m < 33; $m++) {
        $x = 100 - $g - $m;
        if (5 * $g + 3 * $m + $x / 3 == 100) {
            echo '公鸡:' . $g . '只，母鸡' . $m . '只，小鸡' . $x . '只<br/>';
        }
    }
}