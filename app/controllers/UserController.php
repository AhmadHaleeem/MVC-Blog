<?php

class UserController extends HomeController
{
    public function __construct()
    {
        parent::__construct();

    }

    public function makeUser() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/addUser');
        $this->load->view('admin/footer');
    }

    public function userList() {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data = array();
        $table = 'tbl_user';
        $userModel = $this->load->model('userModel');
        $data['allUsers'] = $userModel->getAllUsers($table);
        $this->load->view('admin/userList', $data);
        $this->load->view('admin/footer');
    }

    public function addNewUser() {
        $table = 'tbl_user';
        $username  = $_POST['username'];
        $password  = sha1($_POST['password']);
        $level     = $_POST['level'];
        if (!empty($username) && !empty($password) && !empty($level)) {
            $data = array(
                'username'  => $username,
                'password'  => $password,
                'level'     => $level
            );
            $userModel = $this->load->model('userModel');
            $result = $userModel->insertUser($table, $data);
            $messageData = array();
            if ($result == 1) {
                $messageData['msg'] = "<div class='alert alert-success '>User Added Successfully</div>";
            } else {
                $messageData['msg'] = "<div class='alert alert-danger '>User not Added</div>";
            }
            $url =  BASE_URL . '/UserController/userList?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
            $this->load->view('admin/addPost', $messageData);
            $this->load->view('admin/footer');
        } else {
            $messageData['msg'] = "<div class='alert alert-info '>Fields can't be empty</div>";
            $url =  BASE_URL . '/UserController/makeUser?msg=' . urlencode(serialize($messageData));
            header('Location:' . $url);
        }
    }

    public function deleteUser($id) {
        $table = 'tbl_user';
        $cond  = "id=$id";
        $limit = 1;
        $userModel = $this->load->model('userModel');
        $result = $userModel->userDelete($table, $cond, $limit);
        if ($result == 1) {
            $messageData['msg'] = "<div class='alert alert-success '>User Deleted Successfully</div>";
        } else {
            $messageData['msg'] = "<div class='alert alert-danger '>User not Deleted</div>";
        }
        $url =  BASE_URL . '/UserController/userList?msg=' . urlencode(serialize($messageData));
        header('Location:' . $url);
    }
}