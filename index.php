<?php

require './vendor/autoload.php';

use App\Controller\FrontController;

$frontController = new FrontController();

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
        }
    } else {
        $frontController->listPosts();
    }    