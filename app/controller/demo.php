<?php
namespace app\controller;

use app\service\TestTable;
use common\service\base;
use myf\Redis;
use myf\View;

class Demo
{
    // 类自动加载
    public function service()
    {
        echo base::name();
    }

    // 正则URI传参
    public function params($page)
    {
        echo $page;
    }

    // 模板渲染
    public function view()
    {
        echo View::render('app/view/demo/c', ['title' => 'myf']);
    }

    // 访问Mysql
    public function mysql()
    {
        TestTable::deleteOne();
    }

    // 访问Redis
    public function redis()
    {
        $m = Redis::master('default');
        $s = Redis::slave('default');

        $m->set('myf', ' is good');
        echo 'myf' . $s->get('myf') . PHP_EOL;

        //$c = Redis::cluster('myCluster');
        //$c->set('myf', ' not bad');
        //echo 'myf' . $c->get('myf');
    }
}