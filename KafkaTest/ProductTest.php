<?php

/**
 * Created by PhpStorm.
 * User: jidong
 * Date: 2017/10/23
 * Time: 下午4:40
 */
require '/data/www/c2b-script/script/bootstrap.php';

ProductTest::run();
class ProductTest
{
    public static function run(){
        $arr = array(1,12,23,34,45,56,67);
        foreach ($arr as $message){
            $ret = \C2b\Kafka\KafkaProduct::push($message);
            echo 'push ret '.$ret;echo PHP_EOL;
        }
    }
}