<?php

/**
 * Created by PhpStorm.
 * User: jidong
 * Date: 2017/9/22
 * Time: 下午4:38
 */
class Node{
    public $data  = null;
    public $left  = null;
    public $right = null;
}
class TreeSearch
{
    public function run(Node $tree,$data){
        $stack = array();
        $temp  = array();
        array_push($stack,$tree);
        while(!empty($tree)){
            $node = array_pop($stack);
            if($node->data == $data){
                break;
            }
            $temp[]  = $node->$data;
            if($node->left != null) array_push($stack,$node->left);
            if($node->right != null) array_push($stack,$node->right);
        }
    }
    public function buildTree(){

    }
}