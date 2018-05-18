<?php
namespace app\service;

class TestTable
{
    public static function deleteOne()
    {
        \app\model\TestTable::deleteOne();
    }
}