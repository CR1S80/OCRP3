<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

use App\Model\DbConnect;
use App\Model\UserEntity;

/**
 * Description of UserManager
 *
 * @author crisd
 */
class UserManager {
    
    private $db;

    public function __construct() {

        $this->db = DbConnect::connect();
    }
    
    
    public function checkUserExist(UserEntity $userLog) {
        
        $req = $this->db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        
        $result = $req->execute(array($userLog->getEmail(),
                                      $userLog->getPassword()
                                      ));
        
        
        
        
       
        
                
                            
        return $req->fetch(\PDO::FETCH_ASSOC); 
        
    }
}
