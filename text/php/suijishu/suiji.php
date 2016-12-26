<?php
/**
 * Created by PhpStorm.
 * User: xiaotingzhang
 * Date: 2016/12/24
 * Time: 23:27
 */
$arr = array();
while(count($arr)<5){
    $arr[]=mt_rand(0,9);
    $arr = array_unique($arr);
}
echo implode(',',$arr);


//$arr = [];
//do{
//    $a = mt_rand(0,9);
//    $arr[] = $a;
//    $arr = array_unique($arr);
//}while(count($arr) != 5);
//
//foreach ($arr as $value){
//    echo $value." ";
//}