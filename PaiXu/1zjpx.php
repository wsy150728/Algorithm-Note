<?php
/**
 * Created by PhpStorm.
 * User: WsyKarl
 * Date: 2017/2/21
 * Time: 15:30
 */

//指定部分数组元素全部向后移动一位
function moveAfter($arr, $start = null, $end = null)
{
    if (!isset($start) || $start < 0) $start = 0;
    if (!isset($end) || $end >= count($arr)) $end = count($arr) - 2;    //最后只能选到倒数第二个元素
    for ($i = $end; $i >= $start; $i--) {
        $arr[$i + 1] = $arr[$i];
    }
    return $arr;
}

//插入排序,使用同一个数组后移方法实现
function insertSort($arr)
{
    for ($i = 1; $i < count($arr); $i++) { //未排序数组,从第二个元素开始
        $insertEle = $arr[$i];      //待插入元素
        for ($j = 0; $j < $i; $j++) {   //已排序好数组,从第一个元素开始
            if ($arr[$j] > $arr[$i]) {
                $arr = moveAfter($arr, $j, $i - 1);  //先将已排序好数组中大于待插入元素的元素全部后移一位
                $arr[$j] = $insertEle;
            }
        }
    }
    return $arr;
}

$arr = array(6, 4, 56, 43, 24, 79);
$arr = insertSort($arr);
print_r($arr);
