<?php
class login extends Controller {
    
    private $table ='user';


    public function index(){
      require_once 'application/templates/header.html';
		 		require_once 'application/templates/menu.html';
//				require_once"application/views/home/nama.html"; 
				$this->view('login', 'login');
                                require_once 'application/templates/footer.php';
       
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
    
    public function proces(){
        $data = $_POST;
        print_r($data);
    }
}
    
