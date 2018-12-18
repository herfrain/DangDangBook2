<?php
namespace app\back\controller;

use think\Controller;
use think\Db;
class Ordermanager extends Controller{
    
    
    public function orderList(){
        return  $this->fetch();
    }
    
    public function orderDetail(){
        return  $this->fetch();
    }
    
    public function orderInformation(){
        return  $this->fetch();
    }
    
    public function orderInformationEdit(){
        return  $this->fetch();
    }
    
    public function orderProcess(){
        return  $this->fetch();
    }
}