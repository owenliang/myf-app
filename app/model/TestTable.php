<?php
namespace app\model;

use myf\Mysql;

class TestTable
{
    public static function deleteOne()
    {
        $db = Mysql::instance('default');
        try {
            $db->begin();

            $row = $db->query('select * from test_table limit 1', [], ['getRow' => true]);
            if (!empty($row)) {
                $db->exec('delete from test_table where id=:id', [':id' => $row['id']]);
            }
            $db->commit();
            echo 'commit';
        } catch (\Exception $e) {
            echo 'rollback';
            throw $e;
        }
    }
}