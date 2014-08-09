<?php

class bukutamu extends Controller{
    public function index(){
     
        $usermodel = $this->loadModel('user');
        $user      = $usermodel->getalluser();
        echo '<pre>';
        print_r($usermodel);
        
        
        
    }
    
    
}