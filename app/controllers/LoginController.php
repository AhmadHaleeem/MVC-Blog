<?php


class LoginController extends HomeController {

    public function __construct()
    {
        parent::__construct();
    }

    public function login() {
        Session::init();
        if (Session::get('login') == true) {
            header('Location: ' . BASE_URL . '/AdminController/home');
        }
        $this->load->view('login/login');
    }

    public function loginAuth() {
        $table = 'tbl_user';
        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $loginModel = $this->load->model('LoginModel');
        $count = $loginModel->userController($table, $username, $password);
        if ($count > 0) {
           $result = $loginModel->getUserData($table, $username, $password);
           Session::init();
           Session::set('login', true);
           Session::set('username', $result[0]['username']);
           Session::set('userId', $result[0]['id']);
           Session::set('level', $result[0]['level']);
           header('Location: ' . BASE_URL . '/AdminController/home');
        } else {
            header('Location: ' . BASE_URL . '/LoginController');
        }
    }

    public function logout() {
        Session::init();
        Session::destroy();
        header('Location: ' . BASE_URL . '/LoginController/login');
    }
}