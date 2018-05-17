<?php
namespace app\controller;

use common\service\base;

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

}