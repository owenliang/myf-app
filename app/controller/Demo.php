<?php
namespace app\controller;

use app\service\TestTable;
use common\service\base;
use myf\Elasticsearch;
use myf\Http;
use myf\Redis;
use myf\View;
use ONGR\ElasticsearchDSL\Query\MatchAllQuery;
use ONGR\ElasticsearchDSL\Search;

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

    // http客户端
    public function http()
    {
        $ret = Http::post('http://myf.com/service', ['a' => 1],  ['b' => 'hello']);
        echo json_encode($ret);
    }

    // Elasticsearch客户端
    public function elasticsearch()
    {
        $es = Elasticsearch::instance('default');

        $es->index([
            'index' => 'test',
            'type' => 'doc',
            'id' => 1,
            'body' => [
                'myf' => ' is good',
            ]
        ]);

        $search = new Search();
        $search->addQuery(new MatchAllQuery());
        $result = $es->search([
            'index' => 'test',
            'type' => 'doc',
            'body' => $search->toArray(),
        ]);
        echo json_encode($result);
    }
}