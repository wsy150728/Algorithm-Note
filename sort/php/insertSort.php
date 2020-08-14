<?php
/**
 * Created by PhpStorm.
 * User: WsyKarl
 * Date: 2017/2/21
 * Time: 15:30
 * 直接插入排序
 */

//插入排序,使用同一个数组后移方法实现
function insertSort($arr)
{
    for ($i = 1; $i < count($arr); $i++) { //未排序数组,从第二个元素开始
        $insertEle = $arr[$i];      //待插入元素
        for ($j = 0; $j < $i; $j++) {   //已排序好数组,从第一个元素开始
            if ($arr[$j] > $arr[$i]) {
                //先将已排序好数组中大于待插入元素的元素全部后移一位
                for ($x = $i-1; $x >= $j; $x--) {
                    $arr[$x + 1] = $arr[$x];
                }

                $arr[$j] = $insertEle;
            }
        }
    }
    return $arr;
}

$arr = array(6, 4, 56, 43, 24, 79);
$arr = insertSort($arr);
print_r($arr);
