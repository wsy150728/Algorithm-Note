<?php
/*一只猴子旁边有100根香蕉，猴子距离家50米，猴子一次最多搬50根香蕉，但是猴子每搬1米就要吃掉一根香蕉
问猴子最多能拿多少根香蕉回家*/
$b = 100;
for ($m = 1; $m <= 50; $m++) {
    if ($b > 50) {
        $b -= 3;
    } else {
        $b -= 1;
    }
    echo '走了' . $m . '米，还剩香蕉' . $b . '跟<br/>';
}

