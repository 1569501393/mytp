<?php
declare (strict_types = 1);

namespace app\controller;

use think\facade\Db;
use think\Request;

class DataTest
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        // $user = Db::table('tp_user')->select();
        // $user = Db::table('tp_user')->order('id desc')->select();
        // $user = Db::connect('mysql')->table('tp_user')->order('id desc')->select();

        // 连接demo配置
        // $user = Db::connect('demo')->table('tp_user')->order('id desc')->select();

        // 1. 单数据查询
        // 1.1 查询一条数据 Db::table()中 table 必须指定完整数据表（包括前缀）；
        // $user = Db::table('tp_user')->where('id', 27)->find();
        // $lastSql = Db::getLastSql();
        // dd($lastSql);

        // 1.2 使用findOrFail()方法，同 find(), 在没有数据时抛出异常；
        // $user  = Db::table('tp_user')->where('id=1')->findOrFail();

        // 1.3 使用findOrEmpty()方法同find,在没有数据时放回一个空数组
        // $user  = Db::table('tp_user')->where('id=1')->findOrEmpty();
        // return json($user);

        // 2.数据集查询
        // 2.1 获取多列数据，使用select方法
        $userList = Db::table('tp_user')->select();

        // 2.2 多列数据查询不到任何数据时返回空数组，使用selectOrFail()抛出异常
        // $userList = Db::table('tp_user')->where('id', 1)->selectOrFail();

        // 2.3 使用select方法后再使用toArray()方法，可以将数据集对象转为数组
        $userList = Db::table('tp_user')->where('id', 19)->selectOrFail()->toArray();

        // 2.4 当在数据库配置文件中设置了前缀，那么我们可以使用 name()方法忽略前缀；
        // $userList = Db::name('user')->select();
        // dd($userList);
        // return json($userList);

        // 3. 其它查询
        // 3.1 通过value()方法，可以查询指定字段的值，没有数据返回null
        // $username = Db::name('user')->where('id', 27)->value('username');

        // 3.2 通过 colunm()方法，可以查询指定列的值（多个），没有数据返回空数组；
        $usernameLiset = Db::name('user')->column('username');

        // 3.3 可以指定 id 作为列值的索引
        // $usernameLiset = Db::name('user')->column('username', 'id');

        // 3.4 如果处理的数据量巨大，成百上千那种，一次性读取有可能会导致内存开销过大；
        // 为了避免内存处理太多数据出错，可以使用 chunk()方法分批处理数据；
        // 比如，每次只处理 100 条，处理完毕后，再读取 100 条继续处理；
        // Db::name('user')->chunk(3, function ($users) {
        //     foreach ($users as $user) {
        //         dump($user);
        //     }
        //     echo 1;
        // });

        // 3.5 可以利用游标查询功能，可以大幅度减少海量数据的内存开销，它利用了 PHP 生 成器特性。每次查询只读一行，然后再读取时，自动定位到下一行继续读取；
        /*$cursor = Db::name('user')->cursor();
        foreach ($cursor as $user) {
            dump($user);
        }*/

        dd($usernameLiset);
    }

    /**
     * Notes:
     * User: Administrator
     * Date: 2020/10/10' 0010
     * Time: 0:28
     */
    public function query(){
        // 1. 如果多次使用数据库查询，那么每次静态创建都会生成一个实例，造成浪费； 2. 我们可以把对象实例保存下来，再进行反复调用即可；
        $userQuery = Db::name('user');
        // $dataFind = $userQuery->where('id', 27)->findOrEmpty();
        // $dataSelect = $userQuery->select();

        // $data1 = $userQuery->order('id', 'desc')->select();
        $data1 = $userQuery->where('id', 27)->order('id', 'desc')->select();

        // 使用 removeOption()方法，可以清理掉上一次查询保留的值；
        $userQuery->removeOption('where')->select();

        // 当同一个对象实例第二次查询后，会保留第一次查询的值；
        $data2 = $userQuery->select();
        // $sql = $userQuery->getLastSql();
        $sql = Db::getLastSql();

        dd($sql, $data1, $data2);
    }

    public function demo()
    {
        $demo = Db::connect('demo')->table('tp_user')->select();
        return json($demo);

    }


}
