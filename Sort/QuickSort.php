<?php

/**
 * Created by PhpStorm.
 * User: jidong
 * Date: 2017/9/20
 * Time: 下午4:38
 */
class QuickSort
{
    private static $c = 1;
    public function sort(&$arr){
        $this->subSort($arr,0,count($arr)-1);
    }
    private function subSort(&$arr,$start,$end){
        var_dump($start.'-'.$end);
        self::$c++;
        if(self::$c > 100){
//            exit;
        }
        if($start >= $end){
            return ;
        }
        $flag = $arr[$start];
        $i = $start;
        $j = $end;
        while($i != $j){
            while($arr[$j] >= $flag && $i < $j){
                $j --;
            }
            while($arr[$i] <= $flag && $i < $j){
                $i ++;
            }
            if($i<$j){
                $this->swap($arr,$i,$j);
            }
        }
        $arr[$i]     = $flag;
        $this->subSort($arr,$start,$i);
        $this->subSort($arr,$i+1,$end);
    }
    private function swap(&$arr,$i,$j){
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}
$object = new QuickSort();
$arr = array();
for($i = 0 ;$i< 100;$i++){
    $arr[] = rand(1,1000);
}
var_dump($arr);
$object->sort($arr);
var_dump($arr);