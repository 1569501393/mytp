<?php
declare (strict_types = 1);

namespace app\controller;

class Url
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        echo '这是url首页';
    }

    /**
     * Notes:
     * User: Administrator
     * Date: 2020/10/8' 0008
     * Time: 23:29
     * @param string $value
     * @return string
     */
    public function hello($value = '')
    {
        return 'hello ' . $value;
    }

    /**
     * Notes:
     * User: Administrator
     * Date: 2020/10/8' 0008
     * Time: 21:46
     */
    public function test()
    {
        echo '这是测试页';
    }
}
