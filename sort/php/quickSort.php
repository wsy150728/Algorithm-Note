<?php
/**
 * Created by PhpStorm.
 * User: Wsykarl
 * Date: 2017/2/24
 * Time: 15:50
 */
function quickSort($arr){
    //判断参数是否是一个数组
    if(!is_array($arr)) return false;

    //递归出口:数组长度为1，直接返回数组
    $length=count($arr);
    if($length<=1) return $arr;

    $flag = $arr[0];
    $count = count($arr);
    $left = $right = array();
    for ($i = 1;$i<$count;$i++){
        if($flag > $arr[$i]){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }
    //递归调用
    $left=quickSort($left);
    $right=quickSort($right);
    //将所有的结果合并
    return array_merge($left,array($arr[0]),$right);
}
$arr = array(23,34,15,16,36,3,5,14,7);
//调用
echo "<pre>";
print_r(quickSort($arr));