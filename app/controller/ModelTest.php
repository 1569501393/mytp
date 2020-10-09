<?php
declare (strict_types = 1);

namespace app\controller;

use app\model\User;
use think\Request;

class ModelTest
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

    }

    public function getUser(){
        $user = User::select();
        return json($user);
    }


}
