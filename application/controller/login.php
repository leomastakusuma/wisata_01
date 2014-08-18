<?php
class login extends Controller {
    
    private $table ='login';
    


    public function index(){
        require 'application/views/login/index.html';
       
    }
    
    public function cari(){
        $id = '1';
        $cari = $this->loadModel('user');
        $getuser = $cari->search($id);
        foreach ($getuser as $row)
        {
            print_r($row).'<br>';
        }
//        echo $getuser;
//        $user
    }
    
    public function hapus(){
        require_once "application/views/login/index.html";
        
    }
    
    public function tesquery(){
         $usermodel     = $this->loadModel('user');
         $getalluser    = $usermodel->getuser();
         foreach ($getalluser as $row){
             echo $row->id;
             echo $row->user;
             echo $row->pass;
         }
           
    }
    
    public function tesfunc(){
        
      
        $usermodel  = $this->loadModel('user');
        $user       = $usermodel->getuser();
           $this->view('login','index',$user);
    }
    
    public function proses(){
        echo '<pre>';
        $data = $_POST;
        print_r($data);
    }
}
    
