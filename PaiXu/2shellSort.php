<?php
/**
 * Created by PhpStorm.
 * User: Wsykarl
 * Date: 2017/2/21
 * Time: 18:17
 * 希尔排序
 */
function shellSort($array)
{
    $count = count($array);
    for ($h = $count / 2; $h >= 1; $h = $h / 2) {//每次缩小2倍去进行插入排序
        for ($i = $h; $i < $count; $i++) {//从$h开始
            $temp = $array[$i];
            for ($j = $i - $h; $j >= 0 && $temp < $array[$j]; $j -= $h) {
                //查看变量情况
                echo 'j = '.$j.'| i ='.$i.'| h = '.$h.'| temp = '.$temp.'| arr['.$j.'] = '.$array[$j].'| arr['.($j + $h).'] = '.$array[$j + $h].'<br/>';
                $array[$j + $h] = $array[$j];
            }
            $array[$j + $h] = $temp;
        }
        //每次排序的情况
        foreach ($array as $v){echo $v.' ';}echo '<br/>';
    }
    return $array;
}


$array = array(44, 14, 55, 32, 87, 32, 65, 11);
echo '原数组:';
foreach ($array as $v){
    echo $v.' ';
}
echo '<br/>';
$res = shellSort($array);

