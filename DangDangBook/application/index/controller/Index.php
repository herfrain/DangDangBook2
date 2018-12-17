<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
        //实现搜索功能
        //商品显示
        return  $this->fetch();
    }
    
    
    //用ajax实现筛选
    //html界面要新增筛选条件
    public function bookScreen()
    {
        
    }
}
