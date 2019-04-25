<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of CommentEntity
 *
 * @author crisd
 */
class CommentEntity {
    
    private $id;
    private $post_id;
    private $author;
    private $comment;
    private $comment_date;
    private $reports;
    private $post;
    
    
    public function getPost() {
        return $this->post;
    }

    public function setPost($post) {
        $this->post = $post;
        return $this;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getPost_id() {
        return $this->post_id;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getComment() {
        return $this->comment;
    }

    public function getComment_date() {
        return $this->comment_date;
    }
    
    public function getReports() {
        return $this->reports;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setPost_id($post_id) {
        $this->post_id = $post_id;
        return $this;
    }

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    public function setComment_date($comment_date) {
        $this->comment_date = $comment_date;
        return $this;
    }
    
    public function setReports($reports) {
        $this->reports = $reports;
        return $this;
    }
    
    


    
}
