<?php
namespace app\controller;
/**
 * Error.php
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/10/8' 0008
 * Time: 23:51
 */
class Error {
    public function index()
    {
        return '当前控制器不在1';
    }


    public function __call($method, $args)
    {
        return '当前控制器不在2';
    }
}