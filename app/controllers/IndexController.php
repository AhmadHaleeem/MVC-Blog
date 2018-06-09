<?php
 class IndexController extends HomeController {

    public function __construct(){
        parent::__construct();
    }

    public function Index() {
        $this->home();
    }


    public function home() {
        $data = array();
        $tableCat = 'category';
        $tablePost = 'post';
        $limit = 3;
        $catModel = $this->load->model('catModel');
        $data['allCats'] = $catModel->catList($tableCat);
        $this->load->view('search', $data);

        $this->load->view('header');

        $postModel = $this->load->model('PostModel');
        $data['allPosts'] = $postModel->getAllPosts($tablePost, $limit);
        $this->load->view('content', $data);

//        $data['allCats'] = $catModel->catList($tableCat);
        $data['latestPosts'] = $postModel->latestPost($tablePost);
        $this->load->view('sidebar', $data);

        $this->load->view('footer');
    }

     public function postDetails($id) {
         $data = array();
         $tableCat = 'category';
         $tablePost = 'post';
         $catModel = $this->load->model('catModel');
         $data['allCats'] = $catModel->catList($tableCat);
         $this->load->view('search', $data);

         $this->load->view('header');

         $postModel = $this->load->model('PostModel');
         $data['getPost'] = $postModel->getPostById($tablePost, $tableCat, $id);
         $this->load->view('details', $data);

         $data['latestPosts'] = $postModel->latestPost($tablePost);
         $this->load->view('sidebar', $data);
         $this->load->view('footer');
     }

     public function postByCat($id) {
         $data = array();
         $tableCat = 'category';
         $tablePost = 'post';
         $catModel = $this->load->model('catModel');
         $data['allCats'] = $catModel->catList($tableCat);
         $this->load->view('search', $data);

         $this->load->view('header');

         $postModel = $this->load->model('PostModel');
         $data['postByCat'] = $postModel->getPostByCat($tablePost, $tableCat, $id);
         $this->load->view('postByCat', $data);

         $data['latestPosts'] = $postModel->latestPost($tablePost);
         $this->load->view('sidebar', $data);
         $this->load->view('footer');
     }

     public function search() {
         $data = array();
         $keyword   = $_REQUEST['keyword'];
         $category  = $_REQUEST['category'];
         $tableCat  = 'category';
         $tablePost = 'post';
         $catModel  = $this->load->model('catModel');
         $data['allCats'] = $catModel->catList($tableCat);
         $this->load->view('search', $data);

         $this->load->view('header');

         $postModel = $this->load->model('PostModel');
         $data['postBySearch'] = $postModel->getPostBySearch($tablePost, $keyword, $category);
         $this->load->view('searchResult', $data);

         $data['latestPosts'] = $postModel->latestPost($tablePost);
         $this->load->view('sidebar', $data);
         $this->load->view('footer');
     }




 }