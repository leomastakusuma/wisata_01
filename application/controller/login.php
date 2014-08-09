<?php
class login extends Controller {
    
    private $table ='user';


    public function index(){
        
       
        $usermodel = $this->loadModel('user');
        $user      = $usermodel->getalluser();
//        echo $user = $this->model();
//        die;
        foreach ($user as $row){
            echo 'ID    =   '. $row->id.'<br>';
            echo 'User  =   '.$row->user.'<br>';
            echo 'Pass  =   '.$row->pass;
        }
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
    
    
}
    
