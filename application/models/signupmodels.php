<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class signupmodels extends Models{
    private $table='registrasi';
    
    public function getall(){
        
       
        $data = $this->select('*', $this->table);
        
        return $data;
     
        
    }
    public function insertSignUP($nama,$alamat,$ttl,$jeniskelamin,$email,$username,$password,$tgl_registasi){
        
        
        $data          = array(':nama'           =>$nama,
                               ':alamat'         =>$alamat,
                               ':ttl'            =>$ttl,
                               ':jeniskelamin'   =>$jeniskelamin,
                               ':email'          =>$email,
                               ':username'       =>$username,
                               ':password'       =>$password,
                               ':tgl_registrasi' =>$tgl_registasi
                               );
        
        
        
     
        $sql = "INSERT INTO {$this->table} (nama, alamat, ttl,jeniskelamin,email,username,password,tgl_registrasi)";
        $sql .= "VALUES (:nama, :alamat, :ttl, :jeniskelamin, :email, :username, :password, :tgl_registrasi)";
        $query = $this->db->prepare($sql);
        $query->execute($data);
        
   }
}
