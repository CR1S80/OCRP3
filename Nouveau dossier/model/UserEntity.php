<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of UserEntity
 *
 * @author crisd
 */
class UserEntity {
    
    
    private $email;
    private $password;
    
     
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }



    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    


}
