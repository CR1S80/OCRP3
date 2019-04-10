<?php
if (!isset ($_SESSION)) {
    session_start();
}


require './vendor/autoload.php';

use App\Controller\FrontController;
use App\Controller\AdminController;
use App\Controller\SecurityController;
use App\Model\PostManager;

$frontController = new FrontController();
$adminController = new AdminController();
$securityController = new SecurityController();
$postManager = new PostManager;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        $frontController->listPosts();
    } elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $frontController->post();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    } elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (isset($_POST['author']) && isset($_POST['comment'])) {
                if (!empty(trim($_POST['author'])) && !empty(trim($_POST['comment']))) {
                    $frontController->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    echo 'Erreur : tous les champs ne sont pas remplis !';
                }
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
            }
        }//message post inexistant
    } elseif ($_GET['action'] == 'admin') {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {

            if (isset($_GET['adminAction'])) {
                if ($_GET['adminAction'] == 'home') {
                    $adminController->home();
                } 
                elseif ($_GET['adminAction'] == 'edit') {
                    
                    $adminController->editPost();
                }
                elseif ($_GET['adminAction'] == 'addPost') {
                    
                    $postManager->postForm ();
                
            } elseif ($_GET['adminAction'] == 'add') {
                
                $adminController->addPost($_POST['title'], $_POST['content']);
            
        } elseif ($_GET['adminAction'] == 'deletePost') {
            
            $adminController->deletePost($_GET['id']);
            
        } 
            } 
        } else {

            $securityController->loginForm();
        }
    } elseif ($_GET['action'] == 'login') {

        $securityController->loginForm();
    } elseif ($_GET['action'] == 'checklogin') {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if (!empty(trim($_POST['email']) && !empty(trim($_POST['password'])))) {


                $securityController->checkForm($_POST['email'],$_POST['password']);
            }
        }
    }
    
    elseif ($_GET['action'] == 'logout') {
        $securityController->logout();
    }
} else {
    $frontController->listPosts();
}    

