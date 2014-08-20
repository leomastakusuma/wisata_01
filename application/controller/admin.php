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
        require 'application/templates/admin/index.html';
    }
    public function test(){
        $title  = 'Test';
        $body   = '<p>Abc</p>';
        $foter  = 'Leo';
        views($title, $body, $foter);
                
    }
}
