<?php

namespace App\Model;

use PDO;

class DbConnect {

    public static function connect() {
        try {
            $db = new PDO('mysql:host=db5000055606.hosting-data.io;dbname=dbs50456;charset=utf8', 'dbu150737', '&|6+D"n7"kH|');
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
