<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Model\UserEntity;
use App\Model\UserManager;


/**
 * Description of SecurityController
 *
 * @author crisd
 */
class SecurityController {
    
    public function loginForm () {
        
        require 'view/frontend/login.php';
        
    }
    
    public function checkForm($email, $password) {
        
        $checkUser = new UserManager();
        $entityUser = new UserEntity();
        
        $entityUser->setEmail($email)
                ->setPassword($password);
        
        $result = $checkUser->checkUserExist($entityUser);
        
        
       
        if($result) {
            $_SESSION['admin'] = $result;
        }
        

        header('Location: http://localhost/CoursPHP/TPBlog/OCRP3/?action=admin&adminAction=home');
        
        
    }
    
    public function logout() {
        
        session_destroy();
        
        header('Location: http://localhost/CoursPHP/TPBlog/OCRP3/');
        

    }
    
}
