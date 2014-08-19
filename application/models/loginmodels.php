<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class loginmodels extends Models{
    private $_table ='registrasi';
    
    public function loginaction($username,$password){
        $sql  = "select * from {$this->_table} Where username = :username and password = :password ";
        $query = $this->db->prepare($sql);
        $data = array(':username' => $username,
                      ':password' => $password);
                 
        $query->execute($data);
        return $query->fetchAll();

//        print_r($query);die;
    }
}