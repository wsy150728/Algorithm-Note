<?php
//打印九九乘法表
echo '<table>';
for ($i = 1; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j < 10; $j++) {
        if ($i >= $j) {
            echo '<td>';
            echo $i . '*' . $j . '=' . $i * $j;
            echo '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';