<?php

/**
 * Created by PhpStorm.
 * User: jidong
 * Date: 2017/10/23
 * Time: 下午4:41
 */
require '/Users/jidong/www/guazi/c2b-php-common/tests/bootstrap.php';

ConsumerTest::run();
class ConsumerTest
{
    public static function run(){
        $consumer = Kafka\Consumer::getInstance(\C2b\Config\KafkaConfig::KAFKA_URL, 600);
        $consumer->setGroup(\C2b\Config\KafkaConfig::$CTOB_KAFKA_CONFIG['group']);
        $consumer->setFromOffset(true);
        $consumer->setTopic(\C2b\Config\KafkaConfig::$CTOB_KAFKA_CONFIG['topic']);
        $consumer->setMaxBytes(102400);
        while(true){
            $topic = $consumer->fetch();
            foreach ($topic as $topicName => $partition) {
                foreach ($partition as $partId => $messageSet) {
                    foreach ($messageSet as $message) {
                        var_dump($message);
                    }
                }
            }
            echo "consumer sleeping\n";
            sleep(1);
        }
    }
}