<?php

if (!isset($_SESSION)) {
    session_start();
}


require './vendor/autoload.php';

use App\Controller\FrontController;
use App\Controller\AdminController;
use App\Controller\SecurityController;
use App\Model\PostManager;
use App\Model\CommentManager;

$frontController = new FrontController();
$adminController = new AdminController();
$securityController = new SecurityController();
$postManager = new PostManager;
$commentManager = new CommentManager;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        $frontController->listPosts();
    } elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $frontController->post();
        } else {
            require 'view/frontend/404.php';
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
        }
    } elseif ($_GET['action'] == 'admin') {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {

            if (isset($_GET['adminAction'])) {
                if ($_GET['adminAction'] == 'home') {
                    $adminController->home();
                } elseif ($_GET['adminAction'] == 'view') {

                    $adminController->viewPost();
                } elseif ($_GET['adminAction'] == 'edit') {

                    $adminController->editPostAdmin();
                } 
                elseif ($_GET['adminAction'] == 'editPost') {
					if (isset($_GET['id']) && $_GET['id'] > 0) {
						if (isset($_POST['content']) && isset($_POST['title'])) {
							if (!empty(trim($_POST['content'])) && !empty(trim($_POST['title']))) {

                    $adminController->editPost($_GET['id'], $_POST['content'], $_POST['title']);
							}
						}
					}
				}
                 elseif ($_GET['adminAction'] == 'addPost') {

                    $postManager->postForm();
                } elseif ($_GET['adminAction'] == 'add') {
					if (isset($_POST['content']) && isset($_POST['title'])) {
						if (!empty(trim($_POST['content'])) && !empty(trim($_POST['title']))) {

                    $adminController->addPost($_POST['title'], $_POST['content']);
						}
					}
				} elseif ($_GET['adminAction'] == 'deletePost') {
					if (isset($_GET['id']) && $_GET['id'] > 0) {
						$adminController->deletePost($_GET['id']);
						header('Location: https://projet3.cpdmdev-mg.fr/?action=admin&adminAction=adminSpace');
					}
				
                } elseif ($_GET['adminAction'] == 'adminSpace') {

                    $adminController->adminSpace();
                } elseif ($_GET['adminAction'] == 'deleteComment') {
					if (isset($_GET['id']) && $_GET['id'] > 0) {

						$commentManager->deleteComment($_GET['id']);
					}
				} elseif ($_GET['adminAction'] == 'validationComment') {
					if (isset($_GET['id']) && $_GET['id'] > 0) {
						$commentManager->validationComment($_GET['id']);
					}
                } 
            }
        }
		else {

            $securityController->loginForm();
        }
    } elseif ($_GET['action'] == 'login') {

        $securityController->loginForm();
    } elseif ($_GET['action'] == 'checklogin') {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if (!empty(trim($_POST['email']) && !empty(trim($_POST['password'])))) {


                $securityController->checkForm($_POST['email'], $_POST['password']);
            }
        }
    } elseif ($_GET['action'] == 'logout') {
        $securityController->logout();
        header('Location: https://projet3.cpdmdev-mg.fr/');
    } elseif ($_GET['action'] == 'reportComment') {
		if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $commentManager->setReportedComment($_GET['id']);
                    
                }
	}
	} else {
    $frontController->listPosts();
}    
