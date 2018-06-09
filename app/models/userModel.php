<?php

class userModel extends DModel {

    public function __construct(){
        parent::__construct();
    }

    public function getAllUsers($table) {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        return $this->db->select($sql);
    }

    public function insertUser($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function userDelete($table, $cond, $limit) {
        return $this->db->delete($table, $cond, $limit);
    }



}