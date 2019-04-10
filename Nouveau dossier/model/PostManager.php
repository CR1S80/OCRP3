<?php

namespace App\Model;

use App\Model\DbConnect;
use App\Model\PostEntity;

class PostManager {

    private $db;

    public function __construct() {

        $this->db = DbConnect::connect();
    }

    public function getLastFivePosts() {

        $req = $this->db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
         
        return $req;      
        
        
    }

    public function getSinglePost($postId) {

        $req = $this->db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $result = $req->fetch();
        $post = new PostEntity();
        $post->setId($result['id'])
             ->setTitle($result['title'])
             ->setContent($result['content'])
             ->setCreation_date($result['creation_date_fr']);
        return $post;

        
    }
    
    public function addPost () {
        
    }
    
    public function delPost() {
        
    }

}
