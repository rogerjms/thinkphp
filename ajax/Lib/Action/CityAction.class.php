<?php
class CityAction extends Action{
    //ǰ�ò�������
    public function _before_index(){
        echo 'before<br/>';
    }
    public function index(){
        echo 'index<br/>';
    }
    //���ò�������
    public function _after_index(){
        echo 'after<br/>';
    }
}
?>