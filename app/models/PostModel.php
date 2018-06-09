<?php

class PostModel extends DModel {

    public function __construct(){
        parent::__construct();
    }

    public function getAllPosts($table, $limit) {
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $limit";
        return $this->db->select($sql);
    }


    public function getPostById($tablePost, $tableCat, $id) {
        $sql = "SELECT $tablePost.*, $tableCat.name FROM $tablePost 
                INNER JOIN $tableCat
                ON $tablePost.cat = $tableCat.id
                WHERE $tablePost.id = $id";
        return $this->db->select($sql);
    }

    public function getPostByCat($tablePost, $tableCat, $id) {
        $sql = "SELECT $tablePost.*, $tableCat.name FROM $tablePost 
                INNER JOIN $tableCat
                ON $tablePost.cat = $tableCat.id
                WHERE $tableCat.id = $id";
        return $this->db->select($sql);
    }

    public function latestPost($table) {
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 5";
        return $this->db->select($sql);
    }

    public function getPostBySearch($tablePost, $keyword, $category) {
        if (empty($keyword) && $category == 0) {
            header('Location: ' . BASE_URL . '/IndexController/home');
        }
        if (isset($keyword) && !empty($keyword)) {
            $sql = "SELECT * FROM $tablePost WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";

        } elseif (isset($category)) {
            $sql = "SELECT * FROM $tablePost WHERE cat = $category";
        }
        return $this->db->select($sql);
    }

    public function insertPost($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function postById($tablePost, $id) {
        $sql = "SELECT * FROM $tablePost WHERE id = $id";
        return $this->db->select($sql);
    }

    public function postUpdate($table, $data, $cond) {
        return $this->db->update($table, $data, $cond);
    }

    public function postDelete($table, $cond, $limit) {
        return $this->db->delete($table, $cond, $limit);
    }


}