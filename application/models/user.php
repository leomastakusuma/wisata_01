<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User extends Models{
    
    private $_table = 'user';
    
    public function getalluser(){
        $sql = "SELECT id, user,pass FROM user";
        $query = $this->db->prepare($sql);
//        print_r($query);die;
        $query->execute();
        return $query->fetchAll();
        
    }
     
 
//    public function search($id ){
//        $sql    = "SELECT * from user WHERE id='{$id}'";
//        $query  = $this->db->prepare($sql);
//        
//        $query->execute();
// 
//        return $query->fetchAll();  
//    
//    }
    
    public function delUser($id){
        $sql    = "DELETE FROM user WHERE id ='{$id}'";
        $query  = $this->db->prepare($sql);
        $query->execute(array(':id'=>$id));
               
        
        
    }
    
    public function getuser(){
//        die;
        $colums = 'id,user,pass';
        $data   = $this->select($colums, $this->_table);
        return $data;
        
        
        
    }
      
       
        
}   
   
