<?php
class CityAction extends Action{
    //前置操作方法
    public function _before_index(){
        echo 'before<br/>';
    }
    public function index(){
        echo 'index<br/>';
    }
    //后置操作方法
    public function _after_index(){
        echo 'after<br/>';
    }
}
?>