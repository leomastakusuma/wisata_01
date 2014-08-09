<?php


class signup extends Controller{
    public function index(){
        $usermodel = $this->loadModel('user');
        print_r($usermodel);
    }
    
    
}