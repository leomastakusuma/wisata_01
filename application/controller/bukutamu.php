<?php

class bukutamu extends Controller{
    public function index(){
        $nama='';
        if($nama=='oke'){
        
        require 'application/templates/header.html';
        require 'application/templates/menu.html';
        require 'application/views/bukutamu/index.html';
        require 'application/templates/footer.php';
        }
        if($nama==''){
            echo 'test';
        }
        
    }
    public function save(){
        print_r($_POST);
        $this->redirect('bukutamu');
    }
    
    
}