<?php

namespace App\Controller;

use App\Model\UserEntity;
use App\Model\UserManager;


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
        header('Location: https://projet3.cpdmdev-mg.fr/?action=admin&adminAction=home');
		exit();        
    }    
    public function logout() {
        
        session_destroy();
        
        header('Location: https://projet3.cpdmdev-mg.fr/');
		exit();       
    }    
}
