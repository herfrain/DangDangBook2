<?php
namespace app\back\controller;

use think\Controller;
use think\Db;
class Goodsmanager extends Controller{
    
    public function productList(){
        return  $this->fetch();
    }
    
    public function index(){
        return  $this->fetch();
    }
    
    public function productAdd(){
        return  $this->fetch();
    }
}