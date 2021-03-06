<?php

namespace App\Model;

use App\Model\DbConnect;
use App\Model\PostEntity;

class PostManager {

    private $db;

    public function __construct() {

        $this->db = DbConnect::connect();
    }

    public function postForm() {

        require 'view/admin/frontend/AddPost.php';
    }
    
    public function getAllPosts() {
        $req = $this->db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

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

    public function addPost(PostEntity $entity) {
        $post = $this->db->prepare('INSERT INTO posts (title, content, creation_date) VALUES (?, ?, NOW())');
        return $post->execute(array($entity->getTitle(),
                    $entity->getContent()
        ));
    }

    public function editPost($id, $content, $title) {
        $post = $this->db->prepare('UPDATE posts set title = ?, content = ? WHERE id=?');
        return $post->execute(array($title, $content, $id));
    }

    public function deletePost($postId) {
        $post = $this->db->prepare('DELETE posts,comments FROM posts LEFT JOIN comments  ON (posts.ID = comments.post_id) WHERE posts.ID =?');
        return $post->execute(array($postId));
    }

}

