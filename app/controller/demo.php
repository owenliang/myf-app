<?php
namespace app\controller;

use common\service\base;
use myf\View;

class Demo
{
    public function a()
    {
        echo base::name();
    }

    public function b($page)
    {
        var_dump($page);
    }

    public function c()
    {
        echo View::render('app/view/demo/c', ['title' => 'myf']);
    }

}