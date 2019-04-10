<?php

namespace App\Model;

use PDO;

class DbConnect {

    public static function connect() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=blogprojet;charset=utf8', 'root', '');
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
