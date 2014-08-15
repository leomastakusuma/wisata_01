<?php


class signup extends Controller{
    private $model ='signupmodels';
    

    public function index(){
       require 'application/templates/header.html';
        require 'application/templates/menu.html';
        require 'application/views/signup/index.html';
        require 'application/templates/footer.php';
    }
    public function saves(){
        $form=$_POST;
        $nama = $form['nama'];
        $alamat = $form['alamat'];
        $ttl    = $form['ttl'];
        $jeniskelamin = $form['jeniskelamin'];
        $email          = $form['email'];
        $username       = $form['username'];
        $password       = $form['password'];
        $tgl_registrasi = date('Y-m-d');
        if(!empty($form)){
                    if(!validname($form['nama'])){
                        $msg[] = 'Format Nama Salah';
                    }
                    if(!validaddres($form['alamat']))
                    {
                        $msg[] = 'Format Alamat Salah';
                    }
                    if(!validateEmail($form['email'])){
                        $msg[] = 'Format Email Salah';
                    }
                    if(!empty($form['jeniskelamin'])&& ($form['Jeniskelamin']=='--Pilih--')){
                        $msg[] = 'Jenis Kelamin Tidak Boleh Kosong';
                    }
                    
            
            if(count($msg)>1){
                $flashmsg=$msg;
                require 'application/templates/header.html';
                require 'application/templates/menu.html';
                require 'application/views/signup/index.html';
                require 'application/templates/footer.php';}
            else{
             $model = $this->loadModel($this->model);
             $simpan =$model->insertSignUP($nama,$alamat,$ttl,$jeniskelamin,$email,$username,$password,$tgl_registrasi);
             $this->redirect('signup/getall');
            }
        }     
    }
    
    public function getall(){
        
        $data = $this->loadModel($this->model)->getall();
        require 'application/templates/header.html';
        require 'application/templates/menu.html';
        require 'application/views/signup/data.html';
        require 'application/templates/footer.php';
    }
    
    public function content(){
        require 'application/templates/header.html';
        require 'application/templates/menu.html';
        require 'application/templates/contents.html';
        require 'application/templates/footer.php';
    }
    
    public function save(){
         $form = $_POST;
         $nama      = $form['nama'];
         $alamat    = $form['alamat'];
         $notlp     = $form['notlp'];
         $email     = $form['email'];
         $username  = $form['username'];
         $password  = $form['password'];
         $tgl_registrasi = date('Y-m-d');

       
         if(!empty($form)){
                    //Validasi Form
                    if(!validname($nama)){
                        $msg[] = 'Format Nama Salah';
                    }
                    if(!validaddres($alamat)){
                        $msg[] = 'Format Alamat Salah';
                    }
                    if(!is_numeric($notlp)){
                        $msg[] = 'Format No Telp Salah';
                    }
                    if(!validateEmail($email)){
                        $msg[] = 'Format Email Salah';
                    }
                    if(strlen($username)<5){
                        $msg[] = 'Username Minimal 5 Karakter';
                    }
                    if(strlen($password)<6){
                        $msg[] = 'Password Mininal 6 Karakter';
                    }
             //Jika Terdapat Kembali Ke Form Dengan Msg.
             if(count($msg)>= 1){
                    $errormsg=$msg;
                    require 'application/templates/header.html';
                    require 'application/templates/menu.html';
                    require 'application/views/signup/index.html';
                    require 'application/templates/footer.php';
             }
             //Disimpan ke database
             
             else{
//                 echo '<pre>';
//                 print_r($form);
//                 echo $tgl_registrasi;
             $model = $this->loadModel($this->model);
             $simpan =$model->insertSignUP($nama,$alamat,$notlp,$email,$username,$password,$tgl_registrasi);
             $this->redirect('signup/getall');
             }
         }
         
    }
}