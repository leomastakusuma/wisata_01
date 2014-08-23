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
    
    
}
