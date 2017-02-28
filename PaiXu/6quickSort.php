<?php
/**
 * Created by PhpStorm.
 * User: Wsykarl
 * Date: 2017/2/24
 * Time: 15:50
 */
function quickSort($arr){
    $flag = $arr[0];
    $count = count($arr);
    $left = $right = array();
    for ($i = 1;$i<$count;$i++){
        if($flag > $arr[$i]){
            $left[] = $arr;
        }else{
            $right[] = $arr[$i];
        }
        $left = quickSort($left);
        $right = quickSort($right);
    }
    $arr = array_merge($left,$arr[0],$right);
    return $arr;
}
$arr = array(23,34,15,16,36,3,5,14,7);