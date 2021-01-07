<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'this is tp5 haa';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function unit(){
    	return '进行单元测试实验!';
    }
}
