<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author leomasta
 */
require 'application/templates/admin/view.php';
class admin extends Controller {
    //put your code here
    public function index(){
//        require 'application/templates/admin/index.html';
        require 'application/templates/admin/header.html';
        require 'application/templates/admin/contents.html';
        
    }
    public function all(){
        require 'application/templates/admin/header.html';
        require 'application/templates/admin/contentsfull.html';         
    }
    public function table(){
        require 'application/templates/admin/tables.html';
    }
    public function reservasi(){
        require 'application/templates/admin/header.html';
        require 'application/views/admin/reservasi/index.html';
        require 'application/templates/admin/footer.html';
    }
    
    public function insertreservasi(){
       
        $form               = $_POST;
        
        $tanggal            = date('Y-m-d');
        $tujuan             = $form['tujuan'];
        $paket              = $form['paket'];
        $images             = $_FILES['file_gambar']['name'];
        $random             = rand(0000,9999); //function random 
        $newfile            = $random.$images;  // implement change name
        $path               = getcwd(); //path on  root directory web
        $dir                = $path.'/public/images/';
     
        if(!file_exists($dir)){
        mkdir($dir, 0777);
        }
        
        $extfile=strtolower(substr($_FILES["file_gambar"]["name"],-3));
        $error = array();
        
        
        if(is_numeric($tujuan) || empty($tujuan)){
            $error[] = 'Format Tujuan Salah, Tidak dizinkan format Alphanumeric,Hanya [A-Z,a-z]';
        }


        if($extfile != "jpg"){
            $error[]= 'Format Gambar Salah, Hanya ekstensi *.jpg yang diizinkan';
           
        }

        if(count($error)>0){
            $msg = $error;
            require 'application/templates/admin/header.html';
            require 'application/views/admin/reservasi/index.html';
            require 'application/templates/admin/footer.html';
        }
        else {
        $move_gambar        = $dir.basename($newfile);
        move_uploaded_file($_FILES['file_gambar']['tmp_name'],$move_gambar);
        }


       
    }
    
}
