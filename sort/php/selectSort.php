<?php

/**
 * Created by PhpStorm.
 * User: Wsykarl
 * Date: 2017/2/22
 * Time: 15:20
 * 简单选择排序
 */
function selectSort($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        $min = $i;
        for ($j = $i + 1; $j <= $len - 1; $j++) {
            if ($arr[$min] > $arr[$j]) {//如果找到比$arr[$min]较小的值，则将该下标赋给$min
                $min = $j;
            }
        }
        if ($min != $i) {//若$min不等于$i，说明找到了最小值，则交换
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }
    return $arr;
}
//二元选择排序
function selectSortImprove($arr)
{
    $len = count($arr);
    for ($i = 0; $i <= $len/2; $i++) {
        $min = $i;
        $max = $i;
        for ($j = $i + 1; $j <= $len - 1 - $i; $j++) {
            if ($arr[$min] > $arr[$j]) {//如果找到比$arr[$min]较小的值，则将该下标赋给$min
                $min = $j;
            }
            if ($arr[$max] < $arr[$j]) {//如果找到比$arr[$max]较大的值，则将该下标赋给$max
                $max = $j;
            }
        }
        if ($min != $i) {//若$min不等于$i，说明找到了最小值，则交换
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        if ($max != $i) {//$max，说明找到了最大值，则交换
            $temp = $arr[$len - $i - 1];
            $arr[$len - $i - 1] = $arr[$max];
            $arr[$max] = $temp;
        }
        print_r($arr);echo '<br/>';
    }
    return $arr;
}

$arr = array(4, 6, 1, 2, 9, 8, 7, 3, 5);
$test = selectSortImprove($arr);
var_dump($test);exit;
