<?php
    class EmptyAction extends Action{
        public function index(){
            //���ݵ�ǰģ�������ж�Ҫִ���Ǹ����еĲ���
             $cityName = MODULE_NAME;
            $this->city($cityName);
        }
        //ע�� city���� ������ protected ����
        protected function city($name){
            //��$name���������صĴ���
             echo '��ǰ����' . $name;
        }
    }
