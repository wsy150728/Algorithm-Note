<?php
/**
 * Created by PhpStorm.
 * User: Wsykarl
 * Date: 2017/2/24
 * Time: 14:47
 */
function bubbleSort($arr){
    $count = count($arr);
    for($i=0;$i<$count-1;$i++){
        for($j=0;$j<$count-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

//优化1
function bubbleSortFlag($arr){
    $count = count($arr);
    for($i=0;$i<$count-1;$i++){
        $flag = false;
        for($j=0;$j<$count-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
                $flag = true;
            }
        }
        if(!$flag){
            break;
        }
    }
    return $arr;
}
//优化2
function bubbleSortDouble($arr){
    $count = count($arr);
    for($i=0;$i<($count-1)/2;$i++){
        $flag = false;
        for($j=$i;$j<$count-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
                $flag = true;
            }
        }
        for($j=$count-$i-1;$j>$i;$j--){
            if($arr[$j]<$arr[$j-1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $temp;
                $flag = true;
            }
        }
        if(!$flag){
            break;
        }
    }
    return $arr;
}
$arr = array(13,24,1,7,34,57,46,21,13,26,54,34,75,123,432,27);
$arr = bubbleSortDouble($arr);
print_r($arr);exit;