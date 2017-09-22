<?php

/**
 * Created by PhpStorm.
 * User: jidong
 * Date: 2017/9/21
 * Time: 下午3:37
 */
class HeapSort
{
    public  function run(&$arr){
        $count = count($arr);
        $mid   = floor($count/2) -1;
        for($i = $mid; $i >= 0 ; $i--){
            $this->buildHeap($arr,$i,$count);
        }
        for($i = --$count;$i>=0;$i--){
            $this->swap($arr,$i,0);
            $this->buildHeap($arr,0,$i-1);
        }
    }
    private function swap(&$arr,$i,$y){
        $temp = $arr[$i];
        $arr[$i] = $arr[$y];
        $arr[$y] = $temp;

    }
    private function buildHeap(&$arr,$start,$end){
        $temp = $arr[$start];
        for($i = $start*2+1;$i<=$end;$i=2*$i+1){
            if($i+1 < $end && $arr[$i]<$arr[$i+1]){
                $i++;
            }
            if($temp > $arr[$i]){
                break;
            }
            $arr[$start] = $arr[$i];
            $start = $i;
        }
        $arr[$start] = $temp;
    }
}
$arr = array();
for($i = 0 ;$i< 10;$i++){
    $arr[] = rand(1,1000);
}
var_dump($arr);
$object = new HeapSort();
$object->run($arr);
var_dump($arr);